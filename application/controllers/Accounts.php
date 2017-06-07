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

    public function index($type = null, $loc = null)/*type: dt=demo & Tutorial, dtf= Condition in demo & tutorial, Wp= White paper, ds= datasheets*/
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
                $location = base_url() . 'assets/pdf/whitepaper/' . $loc;
                header('Location:' . $location);
            } elseif ($this->input->post('d_type') == 'ds') {

                $location = base_url() . 'assets/pdf/datasheets/' . $loc;
                header('Location:' . $location);
            } else {
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
                        $location = base_url() . 'assets/pdf/whitepaper/' . $loc;
                        header('Location:' . $location);
                    } elseif ($this->input->post('d_type') == 'ds') {
                        $location = base_url() . 'assets/pdf/datasheets/' . $loc;
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
        $this->load->view('common/login');
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
                    'name' => $row->salutation . '.' . $row->first_name . ' ' . $row->last_name,
                    'job_title' => $row->job_title,
                    'company' => $row->company,
                    'country' => $row->country,
                    'phone' => $row->phone,
                    'verified' => $row->verified,
                    'company' => $row->company,
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
        redirect(base_url(), 'location');
    }

    /* REGISTRATION IS ONGOING */
    public function register()
    {
        if ($_POST) {

            $this->form_validation->set_rules('email', 'email', 'trim|required|callback_check_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
            $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|callback_check_email');
            $this->form_validation->set_rules('cname', 'Company Name', 'trim|required|callback_check_database');
            $this->form_validation->set_rules('name', 'Name', 'trim|required|callback_check_email');
            if ($this->form_validation->run() != FALSE) {
            $data_input1 = array(
                'email' => $this->input->post('email'),
                'hash' => md5($this->input->post('password')),
                'group' => 976,
                'verified' => 0,
            );
            $table = 'auth_lookup';
            $dataInsert = $this->auth->insertData($data_input1, $table);
            if (!empty($dataInsert)) {
                $data_input2 = array(
                    'id' => $dataInsert,
                    'first_name' => $this->input->post('name'),
                    'company' => $this->input->post('cname'),
                    'phone' => $this->input->post('phone'),
                    'country' => getLocationInfoByIp1(),
                    'phone' => $this->input->post('phone')
                );
                $table = 'user_details';
                $dataInsert1 = $this->auth->insertData($data_input2, $table);
                if (!empty($dataInsert1)) {

                    /*mail Section*/

                    /*Mail Section  Close */
                    /*redirect section started */
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
                            $location = base_url() . 'assets/pdf/whitepaper/' . $loc;
                            header('Location:' . $location);
                        } elseif ($this->input->post('d_type') == 'ds') {
                            $location = base_url() . 'assets/pdf/datasheets/' . $loc;
                            header('Location:' . $location);
                        } else {
                            redirect('home', 'location');
                        }
                    }
                    /*Redirection section stopped */

                } else {
                    $this->form_validation->set_message('error', 'Error in Registratin please try later.');
                    return false;
                }

            }
            }else{

            }

        }
    }
    /*Check registring email is valid or not.*/
    public function check_email($email)
    {
        $email_check = $this->auth->check_email($email);
        if (empty($email_check)) {
            return true;
        } else {
            $this->form_validation->set_message('check_email', 'email already exist in the syetem.');
            return false;
        }
    }
    function reset(){
        if ($_POST) {

            $this->form_validation->set_rules('emailInput', 'email', 'trim|required');
            if ($this->form_validation->run() != FALSE) {
                $forgotEmail =$this->input->post('emailInput');
                $vaildOrNot= $this->check_email_valid($forgotEmail);


                if(!empty($vaildOrNot)){


                    $data['act']='1';/*success*/
                    }else{
                    $data['act']='2';/*error email not found*/
                }

            }
        }
        $data['heading'] = "Account Reset | Fiorano ";
        $data['title'] = " Account Reset | Fiorano ESB";
        $this->load->view('common/header', $data);
        $this->load->view('common/reset');
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
} ?>