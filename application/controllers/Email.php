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
            if(!empty($this->input->post('email'))){
                $data = array(

                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'company' => $this->input->post('company'),
                    'phone' => $this->input->post('phone'),
                    'country' => $this->input->post('country'),
                    'profile' => $this->input->post('profile'),
                    'category' => $this->input->post('category'),
                    'lic_cat' => $this->input->post('lic_cat'),
                    'message' => $this->input->post('message'),
                    'ipaddress' => get_ip(),
                    'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                    'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                    'browser' => $_SERVER['HTTP_USER_AGENT'],

                );
            }else{
                $data['response']="error";
                exit();
            }


         /*   if($data['lic_cat']=='Evaluation'){
                $data['lic_cat']="Evaluation Support";
          'salutation' => $this->input->post('salutation'),
          'subject' => $this->input->post('subject'),
            }*/
            switch ($_POST['category']){
                case "Product technical information"  : $to_main = 'sales@fiorano.com'; $cc='presales@fiorano.com'; break; //if the link is directly accessed - pls set same mail id to DEFAULT also for safe side
                case "Product purchase information"  : $to_main = 'sales@fiorano.com'; break;
                case "Licensing"  : $to_main = 'licensing@fiorano.com'; $cc='sales@fiorano.com'; break;
                case "Accounting Finance"  : $to_main = 'accounting@fiorano.com'; break;
                case "Marketing Media PR"  : $to_main = 'marketing@fiorano.com'; break;
                case "Feedback"  : $to_main = 'info@fiorano.com'; break;
                case "Legal"  : $to_main = 'legal@fiorano.com'; break;
                case "Careers at Fiorano"  : $to_main = 'careers@fiorano.com'; break;
                case "Evaluation"  : $to_main = 'se@fiorano.com'; break;
                case "Other"  : $to_main = 'info@fiorano.com';break;
                default : $to_main = 'info@fiorano.com'; //safe side
            }
            $to_email = "harikrishnan.v@in.fiorano.com";
            //Load email library
            $this->load->library('email');
            $this->email->set_mailtype("html");
            $this->email->from('download-notifications@fiorano.com', 'Fiorano Notifications');

            if(!empty($cc)){
                $this->email->cc($cc);
            }
            if (strpos($this->input->post('email'), 'fiorano.com') === false) {
                $this->email->subject("Contact Request  " . $this->input->post('name')."-".$this->input->post('company')."(".$this->input->post('country').")");
            }else{
                $to_main="harikrishnan.v@in.fiorano.com";
                $this->email->subject("Internal Mail - " . $this->input->post('name')."-".$this->input->post('company')."(".$this->input->post('country').")");
            }
            $this->email->to($to_main);
            $this->email->bcc('harikrishnan.v@in.fiorano.com');

            $body = $this->load->view('templates/email/contact', $data, TRUE);
            $this->email->message($body);

            if ($this->email->send()) {
                $this->session->set_flashdata("email_sent", "Email sent successfully.");
                $data['response']="sucess";
                echo "1";
            } else {
                $this->session->set_flashdata("email_sent", "Error in sending Email.");
               $data['response']="error";
            }




        }
    }
}
?>