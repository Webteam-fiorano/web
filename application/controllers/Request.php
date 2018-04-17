
<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/16/2017
 * Time: 11:25 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function demo(){
        $data['heading']=" Request for the Demo | Fiorano Demo";
        $data['title']="Request for the Demo | Fiorano Demo";
        $data['reg']=0;

        if ($_POST) {
            $this->form_validation->set_rules('get_choice', 'What do you need to get in touch about', 'trim|required');
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'email', 'trim|required');
            $this->form_validation->set_rules('company', 'Company', 'trim|required');
            $this->form_validation->set_rules('role', 'Your Role', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
            $this->form_validation->set_rules('choice', 'Demo Choice', 'trim');
            $this->form_validation->set_rules('datepicker', 'Date', 'trim');
            $this->form_validation->set_rules('timepicker', 'Time', 'trim');
            $this->form_validation->set_rules('country', 'Country', 'trim|required');
            $this->form_validation->set_rules('desc', 'Description Or Information', 'trim|required');
            if ($this->form_validation->run() != FALSE) {
                $selDate = date("d-m-Y", strtotime($this->input->post('datepicker')));
                $dat = array(
                    'get_choice'=>$this->input->post('get_choice'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'company' => $this->input->post('company'),
                    'role' => $this->input->post('role'),
                    'phone' => $this->input->post('phone'),
                    'choice' => $this->input->post('choice'),
                    'pchoice' => $this->input->post('pchoice'),
                    'date' => $selDate,
                    'time' => $this->input->post('timepicker'),
                    'country' => $this->input->post('country'),
                    'comments' => $this->input->post('desc'),
                    'ipaddress' => $_SERVER['REMOTE_ADDR'],
                    'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                    'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                    'browser' => $_SERVER['HTTP_USER_AGENT']
                );
                if($this->input->post('choice')=='Product'){
                $dat['userchoices']= $this->input->post('pchoice');
                }elseif ($this->input->post('choice')=='Solution'){
                    $dat['userchoices']= $this->input->post('schoice');
                }else{
                    $dat['userchoices']='';
                }


               $to_main = "download-notifications@in.fiorano.com";
               // $to_main = "harikrishnan.v@in.fiorano.com";
                $touser=$this->input->post('email');
                $choice=$this->input->post('choice');

                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('download-notifications@in.fiorano.com', 'Fiorano Downloads');
                $this->email->to($to_main);
                $this->email->bcc("harikrishnan.v@in.fiorano.com");
                $this->email->subject( $choice." Request Demo - ".$this->input->post('name')."(".$this->input->post('company').")");
                $body = $this->load->view('templates/email/demoRegister', $dat, TRUE);
                $this->email->message($body);
                if ($this->email->send()) {
                    $this->load->library('email');
                    $this->email->set_mailtype("html");
                    $this->email->from('no-reply@fiorano.com');
                    $this->email->to($touser);

                    $this->email->subject("Fiorano - Request for Demo submitted");
                    $dat1 = array(
                        'uname' => $this->input->post('name'),
                        'date' => $selDate,
                        'time' => $this->input->post('timepicker')
                    );
                    $thanksbody = $this->load->view('templates/email/demo_thanks', $dat1, TRUE);
                    $this->email->message($thanksbody);
                    $this->email->send();

                    $this->session->set_flashdata("email_sent", "Email sent successfully.");
                    $data['reg']=1;
                } else {
                    $this->session->set_flashdata("email_sent", "Error in sending Email.");
                    $data['reg']=2;
                }
            }
        }
        $this->load->view('common/header',$data);
        $this->load->view('request/demo_v1');
        $this->load->view('common/footer');
    }

}