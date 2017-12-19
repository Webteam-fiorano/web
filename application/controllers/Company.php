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

    function event_register11($source=null){

        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="25 October 2017, financial leaders, Psd2, Solution Psd2, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="Demystifying PSD2 - Fiorano Software " />
        <meta name="classification" content="PSD2, Business Process Excellence, BPM, SOA, ESB, Web services, XML, Electronic Business, Online Transaction Processing" />';
        $data['fbdata']='

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="Demystifying PSD2 - Fiorano Software">
            <meta name="twitter:description" content="Join Fiorano, a leading global provider of API Management and enterprise middleware, for the second edition of an exclusive breakfast meet to learn the implications of PSD2 from an end-user standpoint. With a focus on the impact and semantics of PSD2, the event will deliver a practical understanding of PSD2 solutions and how the directive impacts payments and the retail banking industry.">
            <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png">
               
            <meta property="og:title" content="Demystifying PSD2 - Fiorano Software" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/company/event_register/" />
            <meta property="og:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png" />
            <meta property="og:description" content="Join Fiorano, a leading global provider of API Management and enterprise middleware, for the second edition of an exclusive breakfast meet to learn the implications of PSD2 from an end-user standpoint. With a focus on the impact and semantics of PSD2, the event will deliver a practical understanding of PSD2 solutions and how the directive impacts payments and the retail banking industry." />
            <meta property="og:site_name" content="http://www.fiorano.com" />';

        $data['heading'] = "Fiorano Events Registration | Fiorano Software ";
        $data['title'] = " Fiorano Events Registration | Fiorano Software";
        $data['reg']=0;
        $data['rdemo']=1;
        if(!empty($source)){
            $data['source']= $source;
        }else{
            $data['source']= 'Direct Via Website';
        }
        if ($_POST) {

            if(isCorporateID($this->input->post('email'))){
                $dat = array(
                    'eventname' => $this->input->post('eventname'),
                    'eventdate' => $this->input->post('eventdate'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'company' => $this->input->post('company'),
                    'phone' => $this->input->post('phone'),
                    'profile' => $this->input->post('role'),
                    'comments' => $this->input->post('comments'),
                    'ipaddress' => $_SERVER['REMOTE_ADDR'],
                    'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                    'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                    'browser' => $_SERVER['HTTP_USER_AGENT'],
                    'source' => $this->input->post('source')
                );
                /*
                    'pchoice' => $this->input->post('pchoice'),
                    'curentwork' => $this->input->post('curentwork'),
                    'pdate' => $this->input->post('datepicker'),
                    'ptime' => $this->input->post('timepicker'),*/

                $to_main = "events@in.fiorano.com";
                //$to_main = "harikrishnan.v@in.fiorano.com";
                $touser=$this->input->post('email');
                /*events@in.fiorano.com*/
                $eventname=$this->input->post('eventname');
                $eventdate=$this->input->post('eventdate');
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('events@in.fiorano.com', 'Fiorano Events');
                $this->email->to($to_main);
                $this->email->cc('download-notifications@in.fiorano.com');
                $this->email->bcc("harikrishnan.v@in.fiorano.com");
                $this->email->subject("User Event Registration  - " . $this->input->post('eventname'));

                $body = $this->load->view('templates/email/event_register', $dat, TRUE);
                $this->email->message($body);
                /*if ($this->email->send()) //blocked becuse of the service
                    $this->load->library('email');
                    $this->email->set_mailtype("html");
                    $this->email->from('events@in.fiorano.com', 'Fiorano Events');
                    $this->email->to($touser);
                    $this->email->bcc("harikrishnan.v@in.fiorano.com");
                    $this->email->subject("Thank you for registering with us for the Breakfast Meet");
                    $dat1 = array(
                        'uname' => $this->input->post('name'),
                        'eventname' => $this->input->post('eventname'),
                        'eventdate' => $this->input->post('eventdate')
                    );

                    $thanksbody = $this->load->view('templates/email/events_thanks', $dat1, TRUE);

                    $this->email->message($thanksbody);
                    if ($this->email->send()){
                        $this->session->set_flashdata("email_sent", "Email sent successfully.");
                        $data['reg']=1;
                    }else{
                        $this->session->set_flashdata("email_sent", "Error in sending Email.");
                        $data['reg']=2;
                    }

                } else {
                    $this->session->set_flashdata("email_sent", "Error in sending Email.");
                    $data['reg']=2;
                }*/

            }else{
                $data['reg']=3;
            }

        }


       // $this->load->view('common/header', $data);
        $this->load->view('news/event_register_25_10_2017',$data);
        $this->load->view('common/footer');
    }
    function support(){
        $data['heading'] = "Fiorano Technical Support | Fiorano Software ";
        $data['title'] = " Fiorano Technical Support | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/support');
        $this->load->view('common/footer');
    }


    function search(){
        $data['heading'] = "Fiorano Technical Search | Fiorano Software ";
        $data['title'] = " Fiorano Technical Search | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/Search');
        $this->load->view('common/footer');
    }
    function addsearch(){
        $data['heading'] = "Fiorano Technical Search | Fiorano Software ";
        $data['title'] = " Fiorano Technical Search | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('common/adsearch_demo.php');
        $this->load->view('common/footer');
    }
}
?>