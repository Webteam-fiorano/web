<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 2/16/2017
 * Time: 5:04 PM
 */

Class Auth extends CI_Model
{

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
        return $bid=$this->db->insert_id();
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


}
?>