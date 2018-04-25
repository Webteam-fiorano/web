<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 1/18/2017
 * Time: 12:29 PM
 */ ?>
<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Accounts extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //nocache();
        $this->load->model('auth', '', TRUE);
        $this->load->model('set', '', TRUE);
        if (!empty($this->session->userdata['logged_in'])) {
            $session_array = $this->session->userdata['logged_in'];
            $this->u_id = $session_array['id'];
            $this->email = $session_array['email'];
            $this->name = $session_array['name'];
            $this->job_title = $session_array['job_title'];
            $this->country = $session_array['country'];
            $this->fullname = $session_array['phone'];
            $this->verified = $session_array['verified'];
        }
    }

    public function login($type = null, $loc = null)/*type: dt=demo & Tutorial, dtf= Condition in demo & tutorial, Wp= White paper, ds= datasheets , fsoaDownload=product download*/
    {

        if (!empty($type)) {
            $data['d_type'] = $this->uri->segment(3);;
        } else {
            $data['d_type'] = '';
        }
        if (!empty($loc)) {
            $data['f_loc'] = $this->uri->segment(4);
        } else {
            $data['f_loc'] = '';
        }
        if (!empty($this->session->userdata['logged_in'])) {/*Checking already logg in or not */

            if ($type == 'dt') {
                $location = base_url() . 'assets/videos/flash_demos/' . $loc;
                header('Location:' . $location);
            } elseif ($type == 'dtf') {
                redirect('resources/' . $loc, 'location');
            } elseif ($type == 'wp') {
                $location = base_url() . 'assets/pdf/whitepaper/'. $loc .'.pdf';
                header('Location:' . $location);
            } elseif ($this->input->post('d_type') == 'ds') {

                $location = base_url() . 'assets/pdf/datasheets/' . $loc;
                header('Location:' . $location);
            } elseif ($type == 'fsoaDownload') {
                $location = site_url('resources/fsoaDownload');
                header('Location:' . $location);
            } elseif ($type == 'mqDownload') {
                $location = site_url('resources/mqDownload');
                header('Location:' . $location);
            }else {
                redirect('home', 'location');
            }
        }
        if ($_POST) {

            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
            if ($this->form_validation->run() != FALSE) {
                $username = $this->input->post('username');
                $verified = $this->auth->demo_verified($username);
                $loc = $this->input->post('f_loc');
                $datalog=array();
                $this->logHistory();
                if ((!empty($verified)) & ($this->input->post('d_type') == 'dt')) {
                    $dtyp = $this->input->post('d_type');
                    redirect('resources/demo_interest/' . $dtyp . '/' . $loc, 'location');
                } else {
                    if ($this->input->post('d_type') == 'dt') {
                        $location = base_url() . 'assets/videos/flash_demos/' . $loc;
                        header('Location:' . $location);
                    } elseif ($this->input->post('d_type') == 'dtf') {
                        redirect('resources/' . $loc, 'location');
                    } elseif ($this->input->post('d_type') == 'wp') {
                        $location = base_url() . 'assets/pdf/whitepaper/' . $loc.'.pdf';
                        header('Location:' . $location);
                    } elseif ($this->input->post('d_type') == 'ds') {
                        $location = base_url() . 'assets/pdf/datasheets/' . $loc;
                        header('Location:' . $location);
                    }elseif ($this->input->post('d_type') == 'fsoaDownload') {
                        $location = site_url('resources/fsoaDownload');
                        header('Location:' . $location);
                    }elseif ($this->input->post('d_type') == 'mqDownload') {
                        $location = site_url('resources/mqDownload');
                        header('Location:' . $location);
                    } else {
                        redirect('home', 'location');
                    }
                }
            }
        }
        $data['heading'] = "Account Login | Fiorano ";
        $data['title'] = "JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano ESB";
        $this->load->view('common/header', $data);
        $this->load->view('accounts/login');
        $this->load->view('common/footer');
    }

    /*Check user Valid or not.*/
    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        $password = md5($password);

        //query the database
        $result = $this->auth->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'email' => $row->email,
                    'user_email' => $row->email,
                    'name' => $row->salutation . '.' . $row->first_name . ' ' . $row->last_name,
                    'name_split'=>array(
                      'sal'=> $row->salutation,
                       'fname'=> $row->first_name,
                       'lname'=> $row->last_name
                    ),
                    'job_title' => $row->job_title,
                    'company' => $row->company,
                    'country' => $row->country,
                    'phone' => $row->phone,
                    'verified' => $row->verified,
                    'company' => $row->company,
                    'registered'=> date("d-m-Y H:i:s", strtotime($row->registered)),
                    'website'=> $row->website,
                    'ip_adrs' => $_SERVER['REMOTE_ADDR'],
                    'browser' => $_SERVER['HTTP_USER_AGENT'],
                    'locale' => @$_SERVER['HTTP_ACCEPT_LANGUAGE']

                );

                $this->session->set_userdata('logged_in', $sess_array);
            }
            return true;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

    /*Sign out user from the System*/
    public function signOut()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('home', 'location');
    }

    /* REGISTRATION IS ONGOING */
    public function register( $type = null, $loc = null)
    {
        if (!empty($type)) {
            $data['d_type'] = $this->uri->segment(3);;
        } else {
            $data['d_type'] = '';
        }
        if (!empty($loc)) {
            $data['f_loc'] = $this->uri->segment(4);
        } else {
            $data['f_loc'] = '';
        }

        if ($_POST) {
            $this->form_validation->set_rules('salutation', 'Salutation', 'trim|required');
            $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
            $this->form_validation->set_rules('email', 'email', 'trim|required|callback_check_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
            $this->form_validation->set_rules('cname', 'Company Name', 'trim|required');
            $this->form_validation->set_rules('website', 'Company website Name', 'trim|required');
            $this->form_validation->set_rules('country', 'Country Name', 'trim|required');
            $this->form_validation->set_rules('yourrole', 'Your Role', 'trim|required');
            if ($this->form_validation->run() != FALSE) {
                $data_input1 = array(
                    'email' => $this->input->post('email'),
                    'hash' => md5($this->input->post('password')),
                    'group' => 976,
                    'verified' => 0,
                );
                /*callback_check_email*/
                $table = 'auth_lookup';
               $dataInsert = $this->auth->insertData($data_input1, $table);
                if (!empty($dataInsert)) {
                    $data_input2 = array(
                        'id' => $dataInsert,
                        'salutation' => $this->input->post('salutation'),
                        'first_name' => $this->input->post('fname'),
                        'last_name' => $this->input->post('lname'),
                        'company' => $this->input->post('cname'),
                        'website' => $this->input->post('website'),
                        'phone' => $this->input->post('phone'),
                        'country' => $this->input->post('country'),
                        'phone' => $this->input->post('phone'),
                        'job_title' => $this->input->post('yourrole'),
                        'social' =>''
                    );
                    $table2 = 'user_details';
                   $dataInsertsecond = $this->auth->insertuserData($data_input2, $table2, $dataInsert);
                   if (!empty($dataInsertsecond)) {
                        /*mail Section*/
                        $this->load->library('email');
                        $this->email->set_mailtype("html");
                        $this->email->from('no-reply@fiorano.com', 'Fiorano Software');
                        $this->email->to($this->input->post('email'));
                        $this->email->bcc("harikrishnan.v@in.fiorano.com");
                        $this->email->subject("Please verify your email - Fiorano Software");
                        $activationLink = site_url('accounts/notify/activate/') . base64_encode($this->input->post('email'));
                        $dat1 = array(
                            'uname' => $this->input->post('salutation') . '.' . $this->input->post('fname') . ' ' . $this->input->post('lname'),
                            'link' => $activationLink,
                            'email' => $this->input->post('email')
                        );
                        $thanksbody = $this->load->view('templates/email/thanksletterUsers', $dat1, TRUE);

                       $this->email->message($thanksbody);
                       if ($this->email->send()){
                            $data['PostMessage']="emailSuccess";
                            }else{
                           $data['PostMessage']="emailError";
                       }

                       $dataOfHistory= array(
                           'u_id'=>             $dataInsert,
                           'leadName'=>         getLeadName($this->input->post('country')),
                           'name'=>             $this->input->post('salutation').' '. $this->input->post('fname').' '.$this->input->post('lname'),
                           'email'=>            $this->input->post('email'),
                           'profile'=>          $this->input->post('yourrole'),
                           'company'=>          $this->input->post('cname'),
                           'country'=>          $this->input->post('country'),
                           'phone'=>            $this->input->post('phone'),
                           'business_issue'=>   '',
                           'desc'=>             '',
                           'implementation_stages'=>    '',
                           'usage'=>            '',
                           'source'=>           null,
                           'reffer_url'=>       null,
                           'ipaddress'=>        '',
                       );




                       if ($this->input->post('d_type') == 'dt') {
                           $location = base_url() . 'assets/videos/flash_demos/' . $loc;

                       } elseif ($this->input->post('d_type') == 'dtf') {
                           redirect('resources/' . $loc, 'location');
                       } elseif ($this->input->post('d_type') == 'wp') {
                           $dataOfHistory['download_type']='Whitepaper Download';
                           $dataOfHistory['product']= $loc.'.pdf';
                           $location = base_url() . 'assets/pdf/whitepaper/' . $loc.'.pdf';

                       } elseif ($this->input->post('d_type') == 'ds') {
                           $location = base_url() . 'assets/pdf/datasheets/' . $loc;

                       }elseif ($this->input->post('d_type') == 'fsoaDownload') {
                           $location = site_url('resources/fsoaDownload');

                       }elseif ($this->input->post('d_type') == 'mqDownload') {
                           $location = site_url('resources/mqDownload');

                       } else {
                           $location = site_url('resources/downloads');                       }
                       header('Location:' . $location);
                        /*Mail Section  Close */
                        /*redirect section started */

                        /*Redirection section stopped */
                       //redirect('accounts', 'location');

                    }

                }else{

                    $data['PostMessage']="insertError";
                }


            } else {
                $this->form_validation->set_message('error', 'Error in Registratin please try later.');

            }
        }
        $data['heading'] = "Account Registration  | Fiorano ";
        $data['title'] = "JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano ESB";
        $this->load->view('common/header', $data);
        $this->load->view('accounts/register');
        $this->load->view('common/footer');

    }
    /*Check registring email is valid or not.*/
    public function check_email($email)
    {
        $email_check = $this->auth->check_email($email);
        if (empty($email_check)) {
            return true;
        } else {
            $this->form_validation->set_message('check_email', 'User Already exists, please try with different E-Mail ID!');
            return false;
        }
    }


    function forgot(){ /*Forgot Password landing page */
        $data['heading'] = "Reset Accounts | Fiorano Software";
        $data['title'] = " Reset Accounts | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('accounts/forgot');
        $this->load->view('common/footer');

    }

    function reset(){/*Forgot Password Submit Page */
        if ($_POST) {

            $this->form_validation->set_rules('emailInput', 'email', 'trim|required');
            if ($this->form_validation->run() != FALSE) {
                $forgotEmail =$this->input->post('emailInput');
                $vaildOrNot= $this->check_email_valid($forgotEmail);
               if(!empty($vaildOrNot)){
                    $data['act']='1';/*success*/

                   $this->load->library('email');
                   $this->email->set_mailtype("html");
                   $this->email->from('no-reply@fiorano.com', 'Fiorano Software');
                   $this->email->to($this->input->post('email'));
                   $this->email->bcc("harikrishnan.v@in.fiorano.com");
                   $this->email->subject("Request for password reset - Fiorano Software");

/*                   $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
                   // Create a unique salt. This will never leave PHP unencrypted.
                  $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
                  // Create the unique user password reset key
                   $password = hash('sha512', $salt.$this->input->post('emailInput'));
                   // Create a url which we will direct them to reset their password

                   $pwrurl = "www.yoursitehere.com/reset_password.php?q=".$password;*/


                   $activationLink = site_url('accounts/resetAccount/') . base64_encode($this->input->post('emailInput'));
                   $dat1 = array(
                       'link' => $activationLink,
                       'email' => $this->input->post('emailInput'),
                       'activation_link' =>$activationLink
                   );
                   $thanksbody = $this->load->view('templates/email/forgot', $dat1, TRUE);
                   $this->email->message($thanksbody);
                   //print_r($this->email->message($thanksbody));
                  // exit();
                    }else{
                    $data['act']='2';/*error email not found*/
                }
            }
        }
        $data['heading'] = "Account Reset | Fiorano ";
        $data['title'] = " Account Reset | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('accounts/reset');
        $this->load->view('common/footer');
    }

    /*Check Forgot email is valid or not.*/
    public function check_email_valid($email)
    {
        $email_check = $this->auth->check_email($email);
        if (!empty($email_check)) {
            return true;
        }
    }
    function demo_mail()
    {
        $data['heading'] = "Account Login | Fiorano ";
        $data['title'] = "JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano ESB";
        $this->load->view('common/header', $data);
        $this->load->view('emails/integration_pattern_demos');
        $this->load->view('common/footer');
    }

    function notify($option=null,$val=null){

        $valDet= base64_decode($val);
        if($option=='activate'){
              $check= $this->auth->checkActivatestatus($valDet);
              if(!empty($check)){
                  $data['activate']= 1;
              }else{
                  $data['activate']= 2;
              }
          }else{
            $data['']="";
          }
        $data['heading'] = "Login / Register / Reset Accounts | Fiorano Software";
        $data['title'] = " Login / Register / Reset Accounts | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('accounts/notification_account');
        $this->load->view('common/footer');
    }


    function encode($string,$key) {
        $key = sha1($key);
        $strLen = strlen($string);
        $keyLen = strlen($key);
        $j = 0;
        for ($i = 0; $i < $strLen; $i++) {
            $ordStr = ord(substr($string,$i,1));
            $ordKey = ord(substr($key,$j,1));
            $j++;
            $hash.= strrev(base_convert(dechex($ordStr + $ordKey),16,36));
        }
        return $hash;
    }
    function decode($string,$key) {
        $key = sha1($key);
        $strLen = strlen($string);
        $keyLen = strlen($key);
        $j = 0;
        for ($i = 0; $i < $strLen; $i+=2) {
            $ordStr = hexdec(base_convert(strrev(substr($string,$i,2)),36,16));
            $ordKey = ord(substr($key,$j,1));
            $j++;
            $hash.= chr($ordStr - $ordKey);
        }
        return $hash;
    }
        function resetAccount($hash=null){
           if(!empty($hash)){
                $data['emailInput'] = base64_decode($hash);
            }else{
               redirect('accounts/forgot');
            }
            if($_POST) {
                $this->form_validation->set_rules('emailInput', 'email', 'trim|required');
                $this->form_validation->set_rules('password', 'Password', 'trim|required');
                if ($this->form_validation->run() != FALSE) {
                    $dat = array(
                        'email' => $this->input->post('emailInput'),
                        'hash' => md5($this->input->post('password'))
                    );
                    $update= $this->auth->updatePass($dat);
                    $data['suc']=1;
                }
            }
            $this->load->view('common/header', $data);
            $this->load->view('accounts/new_password');
            $this->load->view('common/footer');
        }

        public function unsubscribe(){

            $data['heading'] = "Fiorano Unsubscribe emails | Fiorano Software";
            $data['title'] = " Fiorano Unsubscribe emails | Fiorano Software";
            $data['reg']=0;
            if($_POST) {
                $dat = array(
                    'email' => $this->input->post('email'),
                    'answer' => $this->input->post('answer')
                );
                $to_main = "pooja.sharma@in.fiorano.com";
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('webteam@fiorano.com', 'Fiorano Web Team');
                $body = $this->load->view('templates/email/unsubscribe-details', $dat, TRUE);
                $this->email->to($to_main);
                $this->email->bcc("harikrishnan.v@in.fiorano.com");
                $this->email->subject("User Unsubscribe request ");
                $this->email->message($body);
                if($this->email->send()){
                    $data['reg']=1;
                }else{
                    $data['reg']=2;
                }

            }

            $this->load->view('common/header', $data);
            $this->load->view('accounts/unsubscribe');
            $this->load->view('common/footer');
        }


        public  function logHistory(){
            if (!empty($this->session->userdata['logged_in'])) {
                $session_array = $this->session->userdata['logged_in'];
                $this->u_id = $session_array['id'];
                $this->user_email = $session_array['email'];
                $this->name = $session_array['name'];
                $this->job_title = $session_array['job_title'];
                $this->country = $session_array['country'];
                $this->fullname = $session_array['phone'];
                $this->verified = $session_array['verified'];
            }

                $login_download_details = array(
                    "email" =>  $this->user_email,
                    "ip" =>     get_ip_det(),
                    "action"=>  "1",
                    "hash" =>   ''
                );

                $ins=$this->set->loginHistory($login_download_details);
                return $ins;
            }

        public function profile()
        {

            if (!empty($this->session->userdata['logged_in'])) {

                $data['userDet']=$this->auth->viewUser($this->session->userdata['logged_in']['id']);
                $data['status']=0;
                if ($_POST) {
                    $this->form_validation->set_rules('salutation', 'Salutation', 'trim|required');
                    $this->form_validation->set_rules('profId', '', 'trim|required');
                    $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
                    $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
                    $this->form_validation->set_rules('email', 'email', 'trim|required');
                    $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
                    $this->form_validation->set_rules('cname', 'Company Name', 'trim|required');
                    $this->form_validation->set_rules('website', 'Company website Name', 'trim|required');
                    $this->form_validation->set_rules('country', 'Country Name', 'trim|required');
                    $this->form_validation->set_rules('yourrole', 'Your Role', 'trim|required');
                    if ($this->form_validation->run() != FALSE) {
                        $dataInsert=$this->input->post('profId');
                        $data_input2 = array(

                            'salutation' => $this->input->post('salutation'),
                            'first_name' => $this->input->post('fname'),
                            'last_name' => $this->input->post('lname'),
                            'company' => $this->input->post('cname'),
                            'website' => $this->input->post('website'),
                            'phone' => $this->input->post('phone'),
                            'country' => $this->input->post('country'),
                            'phone' => $this->input->post('phone'),
                            'job_title' => $this->input->post('yourrole'),
                            'social' =>''
                        );
                        $update= $this->auth->updateAccount($data_input2, $dataInsert);
                        if($update){
                            $data['status']=1;


                        }else{
                            $data['status']=2;
                        }

                    }
                }
                $data['userDet']=$this->auth->viewUser($this->session->userdata['logged_in']['id']);
                $data['heading'] = "User Profile | Fiorano Software";
                $data['title'] = " User Profile | Fiorano Software";

                $this->load->view('common/header', $data);
                $this->load->view('accounts/profile');
                $this->load->view('common/footer');
            }else{
                redirect('accounts/login');
            }
        }
}
?>