<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 2/16/2017
 * Time: 5:04 PM
 */

Class Auth extends CI_Model
{


    /**/
    function showdet(){
        $this->db->select('auth_lookup.*,user_details.*');
        $this->db->from('auth_lookup');
        $this->db->join('user_details', 'user_details.id = auth_lookup.id');
        $this->db->where('auth_lookup.blocked', 0);
        $this->db->where('auth_lookup.email', 'harshit.shrivastava@fiorano.com');

        $query = $this->db->get();
        if ($query->num_rows() != 0) {
        print_r($query->result());
        // return $query->result();
        } else {
            return false;
        }
    }

    /* Function to login a user */
    function login($username, $password)
    {
        $this->db->select('auth_lookup.*,user_details.*');
        $this->db->from('auth_lookup');
        $this->db->join('user_details', 'user_details.id = auth_lookup.id');
       $this->db->where('auth_lookup.blocked', 0);
        $this->db->where('auth_lookup.email', $username);
        $this->db->where('auth_lookup.hash', $password);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function demo_verified($username){/*Check user is verified or not */
        $this->db->select('auth_lookup.id');
        $this->db->from('auth_lookup');
        $this->db->where('auth_lookup.blocked', 0);
        $this->db->where('auth_lookup.verified', 1);
        $this->db->where('auth_lookup.email', $username);

        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function insertData($data=null, $table=null){/*Insertion from the accou8nts*/
        $query = $this->db->insert($table,$data);
        $bid = $this->db->insert_id();
        return $bid;
        }
    function insertuserData($data=null, $table=null, $uid=null){/*Insertion from the accou8nts*/
        $query = $this->db->insert($table,$data);
        //echo $bid = $this->db->insert_id();
        return $uid;
    }

    function check_email($email){/*check email is already registerd or not. */
        $this->db->select('auth_lookup.email');
        $this->db->from('auth_lookup');
        $this->db->where('auth_lookup.email', $email);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    /* Function to login a user */
    function adminlogin($username, $password)
    {
        $DB2 = $this->load->database('admin', TRUE);
        $DB2->select('*');
        $DB2->from('admin_users');
        $DB2->where('admin_users.username', $username);
        $DB2->where('admin_users.password', $password);
        $DB2->where('admin_users.status', 1);
        $query = $DB2->get();
        if($query->num_rows() != 0){
            return $query->result();
        }else{
            return false;
        }
    }

function checkActivatestatus($email){
    $this->db->select('auth_lookup.verified');
    $this->db->from('auth_lookup');
    $this->db->where('auth_lookup.email', $email);
    $this->db->where('auth_lookup.verified', 0);
    $query = $this->db->get();
    if ($query->num_rows() != 0) {
         /*print_r( $query->result());
         exit();*/
            $this->db->where('email', $email);
            $this->db->update('auth_lookup', array('verified'=>1));
            return $email;

    } else {
        return false;
    }
}
    function updatePass($data=null){
        $this->db->where('email', $data['email']);
        $this->db->update('auth_lookup',$data);


    }
    function updateAccount($data=null,$id=null){

        $query=$this->db->update('user_details', $data, array('id' => $id));
        if($query){
            return $id;
        }else{
            return false;
        }
    }
    function viewUser($id=null){
        $this->db->select('user_details.*');
        $this->db->from('user_details');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}
?>