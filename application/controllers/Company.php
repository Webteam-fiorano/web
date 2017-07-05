<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //nocache();
        //$this->load->model('auth', '', TRUE);
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
    function index(){
        $data['qmain']='oth';
        $data['qsub']='';
        $data['heading'] = "About | Fiorano Software ";
        $data['title'] = "About | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/about');
        $this->load->view('common/footer');

    }
    function about(){
        $data['heading'] = "About | Fiorano Software ";
        $data['title'] = "About | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/about');
        $this->load->view('common/footer');

    }

    function aboutv2(){
        $data['heading'] = "About | Fiorano Software ";
        $data['title'] = "About | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/aboutv2');
        $this->load->view('common/footer');

    }

    function news(){
        $data['heading'] = "Fiorano News | Fiorano Software ";
        $data['title'] = "Fiorano News | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('news/news');
        $this->load->view('common/footer');

    }
    function pressreleases(){
        $data['heading'] = "Fiorano Press Releases | Fiorano Software ";
        $data['title'] = "Fiorano Press Releases | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('news/pressreleases');
        $this->load->view('common/footer');

    }
    function mediacoverage(){
    $data['heading'] = "Fiorano Media Coverage | Fiorano Software ";
    $data['title'] = "Fiorano Media Coverage | Fiorano Software";
    $this->load->view('common/header', $data);
    $this->load->view('news/mediacoverage');
    $this->load->view('common/footer');
    }
    function prod_review(){
        $data['heading'] = "Fiorano Analytic report & Product Review | Fiorano Software ";
        $data['title'] = "Fiorano Analytic report &  Product Review | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('news/prod_review');
        $this->load->view('common/footer');
    }
    function events(){
        $data['heading'] = "Fiorano Events | Fiorano Software ";
        $data['title'] = "Fiorano Events | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('news/events');
        $this->load->view('common/footer');
    }
    function awards(){
        $data['heading'] = "Fiorano Awards | Fiorano Software ";
        $data['title'] = "Fiorano Awards | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('news/awards');
        $this->load->view('common/footer');
    }

    function careers(){
        $data['heading'] = "Careers & Opportunities at Fiorano | Fiorano Software ";
        $data['title'] = " Careers & Opportunities at Fiorano  | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/careers');
        $this->load->view('common/footer');
    }
    function contacts(){
        $data['heading'] = "Fiorano contact details, Fiorano Worldwide offices, Sales enquiries, worldwide sales & service| Fiorano Software ";
        $data['title'] = " Fiorano contact details, Fiorano Worldwide offices, Sales enquiries, worldwide sales & service  | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/contacts');
        $this->load->view('common/footer');
    }
    function customer_testimonials(){
        $data['heading'] = "Fiorano Customer Testimonials | Fiorano Software ";
        $data['title'] = " Fiorano Customer Testimonials  | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('customers/customer_testimonials');
        $this->load->view('common/footer');
    }
    function termsofuse(){
        $data['heading'] = "Fiorano Company Terms of use | Fiorano Software ";
        $data['title'] = " Fiorano Company Terms of use  | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/termofuse');
        $this->load->view('common/footer');
    }
    function privacy(){
        $data['heading'] = "Fiorano Company Privacy | Fiorano Software ";
        $data['title'] = " Fiorano Company Privacy | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/privacy');
        $this->load->view('common/footer');
    }

    function event_register(){
        $data['heading'] = "Fiorano Events Registration | Fiorano Software ";
        $data['title'] = " Fiorano Events Registration | Fiorano Software";
        $data['reg']=0;
        if ($_POST) {

            $dat = array(
                'eventname' => $this->input->post('eventname'),
                'eventdate' => $this->input->post('eventdate'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
                'profile' => $this->input->post('role'),
                'pchoice' => $this->input->post('pchoice'),
                'curentwork' => $this->input->post('curentwork'),
                'pdate' => $this->input->post('datepicker'),
                'ptime' => $this->input->post('timepicker'),
                'comments' => $this->input->post('comments'),
                'ipaddress' => $_SERVER['REMOTE_ADDR'],
                'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                'browser' => $_SERVER['HTTP_USER_AGENT'],
            );
            $to_main = "events@in.fiorano.com";
            $touser=$this->input->post('email');
            /*events@in.fiorano.com*/
            $eventname=$this->input->post('eventname');
            $eventdate=$this->input->post('eventdate');
            $this->load->library('email');
            $this->email->set_mailtype("html");
            $this->email->from('events@in.fiorano.com', 'Fiorano Events');
            $this->email->to($to_main);
            $this->email->subject("Book your appointment at - " . $this->input->post('eventname'));

            $body = $this->load->view('templates/email/event_register', $dat, TRUE);
            $this->email->message($body);
            if ($this->email->send()) {
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('events@in.fiorano.com', 'Fiorano Events');
                $this->email->to($touser);
                $this->email->subject("Thank you for the appointment at - " . $this->input->post('eventname'));
                $dat1 = array(
                    'uname' => $this->input->post('name'),
                    'eventname' => $this->input->post('eventname'),
                    'eventdate' => $this->input->post('eventdate')
                );

                $thanksbody = $this->load->view('templates/email/events_thanks', $dat1, TRUE);

                $this->email->message($thanksbody);
                $this->email->send();

                $this->session->set_flashdata("email_sent", "Email sent successfully.");
               $data['reg']=1;
            } else {
                $this->session->set_flashdata("email_sent", "Error in sending Email.");
                $data['reg']=2;
            }
        }

        $this->load->view('common/header', $data);
        $this->load->view('news/event_register');
        $this->load->view('common/footer');
    }
    function support(){
        $data['heading'] = "Fiorano Technical Support | Fiorano Software ";
        $data['title'] = " Fiorano Technical Support | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/support');
        $this->load->view('common/footer');
    }
}
?>