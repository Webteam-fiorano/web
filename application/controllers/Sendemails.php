<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sendemails extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        //nocache();

       /* $config = Array(
            'protocol' => 'sendmail',
            'smtp_host' => 'your domain SMTP host',
            'smtp_port' => 25,
            'smtp_user' => 'SMTP Username',
            'smtp_pass' => 'SMTP Password',
            'smtp_timeout' => '4',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );*/
        $this->load->library('email');
        $this->load->model('auth', '', TRUE);

        if (!empty($this->session->userdata['logged_in'])) {
            $session_array = $this->session->userdata['logged_in'];
            $data['u_id'] = $session_array['id'];
            $data['email'] = $session_array['email'];
            $data['name'] = $session_array['name'];
            $data['job_title'] = $session_array['job_title'];
            $data['country'] = $session_array['country'];
            $data['phone'] = $session_array['phone'];
            $data['verified'] = $session_array['verified'];
            $data['company'] = $session_array['company'];
            $data['ip_addr']= $session_array['ip_adrs'];
            $data['browser']=  $session_array['browser'];
            $data['locale']=  $session_array['locale'];
        }
    }
    public function htmlmail(){

        $data['name'] = "Mike";
        $this->email->from('hkv1990@gmail.com', 'Anil Labs');
        $this->email->to('krishvhari007@gmail.com');  // replace it with receiver mail id
        $subject = "mail -testing";
        $this->email->subject($subject); // replace it with relevant subject
        $body = $this->load->view('emails/integration_pattern_demos','$data',true);
        $this->email->message($body);

        if ( ! $this->email->send())
        {
            echo "<pre>".$this->email->print_debugger() ."</pre>";
            print_r($body);
        }
        else{
            return TRUE;
        }
    }

}

?>