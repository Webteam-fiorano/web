<?php
class Email extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
    }


    public function send_mail()
    {


        if ($_POST) {

            //$this->email->message('Testing the email class.');

            //Send mail
            $data = array(
                'salutation' => $this->input->post('salutation'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
                'country' => $this->input->post('country'),
                'profile' => $this->input->post('profile'),
                'category' => $this->input->post('category'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'ipaddress' => $_SERVER['REMOTE_ADDR'],
                'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                'browser' => $_SERVER['HTTP_USER_AGENT'],

            );
            switch ($_POST['category']){
                case "Product technical information"  : $to_main = 'sales@fiorano.com'; $cc='presales@fiorano.com'; break; //if the link is directly accessed - pls set same mail id to DEFAULT also for safe side
                case "Product purchase information"  : $to_main = 'sales@fiorano.com'; break;
                case "Licensing"  : $to_main = 'licensing@fiorano.com'; $cc='sales@fiorano.com'; break;
                case "Accounting Finance"  : $to_main = 'accounting@fiorano.com'; break;
                case "Marketing Media PR"  : $to_main = 'marketing@fiorano.com'; break;
                case "Feedback"  : $to_main = 'info@fiorano.com'; break;
                case "Legal"  : $to_main = 'legal@fiorano.com'; break;
                case "Careers at Fiorano"  : $to_main = 'careers@fiorano.com'; break;
                case "Other"  : $to_main = 'info@fiorano.com';break;
                default : $to_main = 'info@fiorano.com'; //safe side
            }
            $to_email = "harikrishnan.v@in.fiorano.com";

            //Load email library
            $this->load->library('email');
            $this->email->set_mailtype("html");
            $this->email->from('download-notifications@fiorano.com', 'Fiorano Notifications');
            $this->email->to($to_main);
            $this->email->subject("Fiorano Info - " . $this->input->post('subject'));

            $body = $this->load->view('templates/email/contact', $data, TRUE);
            $this->email->message($body);
            if ($this->email->send()) {
                $this->session->set_flashdata("email_sent", "Email sent successfully.");
                echo "1";
            } else {
                $this->session->set_flashdata("email_sent", "Error in sending Email.");
                echo "2";
            }
        }
    }
}
?>