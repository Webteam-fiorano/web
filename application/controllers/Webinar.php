<?php
/**
 * Created by PhpStorm.
 * User: Hari
 * Date: 30-10-2017
 * Time: 10:56
 */
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webinar extends CI_Controller
{


    public function psd2_compliance_stressing_you_out_old($source=null)
    {


        $data['reg']=0;
        $data['qmain'] = 'cus';
        $data['qsub'] = '';
        if(!empty($source)){
            $data['source']= $source;
        }else{
            $data['source']= 'Direct Via Website';
        }
        if ($_POST) {

            if (isCorporateID($this->input->post('email'))) {
                $dat = array(
                    'eventname' => $this->input->post('eventname'),
                    'eventdate' => $this->input->post('eventdate'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'company' => $this->input->post('company'),
                    'phone' => $this->input->post('phone'),
                    'profile' => $this->input->post('role'),
                    'interest' => $this->input->post('interest'),
                    'comments' => $this->input->post('comments'),
                    'ipaddress' => $_SERVER['REMOTE_ADDR'],
                    'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                    'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                    'browser' => $_SERVER['HTTP_USER_AGENT'],
                    'source' => $this->input->post('source'),
                    'country'=> $this->input->post('countrylist')

                );
                /*

                    'pchoice' => $this->input->post('pchoice'),
                    'curentwork' => $this->input->post('curentwork'),
                    'pdate' => $this->input->post('datepicker'),
                    'ptime' => $this->input->post('timepicker'),
                'zoho_status'=>getZohoStatus($this->input->post('email'))
                */


                //$to_main = "harikrishnan.v@in.fiorano.com";
                $touser = $this->input->post('email');
                /*events@in.fiorano.com*/
                $eventname = $this->input->post('eventname');
                $eventdate = $this->input->post('eventdate');
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('events@in.fiorano.com', 'Fiorano Events');

                if (strpos($this->input->post('email'), 'fiorano.com') === false) {
                    $to_main = "events@in.fiorano.com";
                    $this->email->subject("User Webinar Registration  - " ."PSD2 Compliance"." - ".$this->input->post('countrylist'));
                    $this->email->cc('download-notifications@in.fiorano.com');
                    $this->email->bcc("harikrishnan.v@in.fiorano.com");
                } else {
                    $to_main = "harikrishnan.v@in.fiorano.com";
                    $this->email->subject("Internal Webinar Registration  - " . $this->input->post('eventname'));
                }
                $this->email->to($to_main);


                $body = $this->load->view('templates/email/event_register', $dat, TRUE);
                $this->email->message($body);
                if ($this->email->send()) { //blocked becuse of the service
                    $this->load->library('email');
                    $this->email->set_mailtype("html");
                    $this->email->from('events@in.fiorano.com', 'Fiorano Events');
                    $this->email->to($touser);
                    $this->email->bcc("harikrishnan.v@in.fiorano.com");
                    $this->email->subject("Thank you for registering with us for the PSD2 Webinar");
                    $dat1 = array(
                        'uname' => $this->input->post('name'),
                        'eventname' => $this->input->post('eventname'),
                        'eventdate' => $this->input->post('eventdate')
                    );
                    $thanksbody = $this->load->view('templates/email/webinar_thanks', $dat1, TRUE);

                    $this->email->message($thanksbody);
                    if ($this->email->send()) {
                        $this->session->set_flashdata("email_sent", "Email sent successfully.");
                        $data['reg'] = 1;
                    } else {
                        $this->session->set_flashdata("email_sent", "Error in sending Email.");
                        $data['reg'] = 2;
                    }

                } else {
                    $this->session->set_flashdata("email_sent", "Error in sending Email.");
                    $data['reg'] = 2;
                }

            } else {
                $data['reg'] = 3;
            }
        }
        $data['heading'] = "PSD2 Compliance Stressing You Out? Relax, It Shouldn't Be That Difficult | Fiorano Software ";
        $data['title'] = "PSD2 Compliance Stressing You Out? Relax, It Shouldn't Be That Difficult | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('webinar/psd2_compliance_stressing_you_out');
        $this->load->view('common/footer');
    }
    public function recordings(){

        $data['heading'] = "Watch webinar Recordings | Fiorano Software ";
        $data['title'] = "Watch webinar Recordings | Fiorano Software ";
        $this->load->view('common/header', $data);
        $this->load->view('webinar/recordings');
        $this->load->view('common/footer');
    }

    public function watchRecording($webinar=null, $source=null){/*all webinbar recording starts here*/

        if($webinar=="rise-of-open-source-esb"){
            $title= "The Rise of the Open Source Enterprise Service Bus";
        }
        if($webinar=="psd2-open-banking-with-api"){
            $title= "PSD2 Open Banking with API";
        }
        if($webinar=="psd2-compliance-stressing-you-out"){
            $title= "PSD2 Compliance Stressing You Out? Relax, It Shouldn't Be That Difficult";
        }
        if($webinar=="hybrid-cloud-strategies-for-financial-services"){
            $title= "Hybrid Cloud Strategies for Financial Services";
        }
        if($webinar=="open-source-containers-interactions"){
            $title= "Open Source Containers Built for Real-Time Interactions";
        }
        if($webinar=="integrating-microservices-cloud"){
            $title= "Integrating Microservices in the Cloud";
        }
        if($webinar=="avoiding-perils-pitfalls-cloud-integration"){
            $title= "Avoiding the Perils and Pitfalls of Cloud-Based Integration";
        }
        if($webinar=="T24-integration"){
            $title= "Core Banking Integration enables Quick Launch of Mobile-Banking Product and much more...";
        }


        $data['reg']=0;
            if(!empty($source)){
            $data['source']= $source;
        }else{
            $data['source']= 'Direct Via Website';
        }
        $data['webinar_url']=$webinar;
        if ($_POST) {

            if (isCorporateID($this->input->post('email'))) {
                $dat = array(
                    'webinar' => $this->input->post('webinar'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'company' => $this->input->post('company'),
                    'phone' => $this->input->post('phone'),
                    'profile' => $this->input->post('role'),
                    'interest' => $this->input->post('interest'),
                    'comments' => $this->input->post('comments'),
                    'interest' => $this->input->post('interest'),
                    'progress' => $this->input->post('progress'),
                    'dchoice' => $this->input->post('dchoice'),
                    'ipaddress' => $_SERVER['REMOTE_ADDR'],
                    'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                    'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                    'browser' => $_SERVER['HTTP_USER_AGENT'],
                    'source' => $this->input->post('source'),
                    'country'=> $this->input->post('countrylist'),
                    'zoho_status'=>getZohoStatus($this->input->post('email'))
                );
               /* print_r($dat);*/
                $webinar=$this->input->post('webinar_url');
                $title=$this->input->post('webinar');
                if($webinar=="rise-of-open-source-esb"){
                    $data['video'] = "https://www.youtube.com/embed/N3tbMRRgx_8?rel=0";
                }
                if($webinar=="psd2-open-banking-with-api"){
                    $data['video'] = "https://www.youtube.com/embed/dv3PEffVvoc?rel=0";
                }
                if($webinar=="psd2-compliance-stressing-you-out"){
                    $data['video'] = "https://www.youtube.com/embed/kMEk93_zEi4?rel=0";
                }
                if($webinar=="hybrid-cloud-strategies-for-financial-services"){
                    $data['video'] = "https://www.youtube.com/embed/Wz45k1x-pHE?rel=0";
                }
                if($webinar=="open-source-containers-interactions"){
                    $data['video'] = "https://www.youtube.com/embed/XfoD1bFE0us?rel=0";
                }
                if($webinar=="integrating-microservices-cloud"){
                    $data['video'] = "https://www.youtube.com/embed/r-OTx6P2XsY?rel=0";
                }
                if($webinar=="avoiding-perils-pitfalls-cloud-integration"){
                    $data['video'] = "https://www.youtube.com/embed/qGXllo0wa_8?rel=0";
                }
                if($webinar=="T24-integration"){
                    $data['video'] = "https://www.youtube.com/embed/ztzt6tBgOYg?rel=0";
                }



                $data['reg']=$this->sendWebinardetails($dat,$this->input->post('email'));

            } else {
                $data['reg'] = 3;
            }
         }

        $data['heading'] = "Watch webinar Recordings - ".$title." | Fiorano Software ";
        $data['title'] = "Watch webinar Recordings - ".$title." | Fiorano Software ";
        $this->load->view('common/header', $data);
        $this->load->view('webinar/recordings/'.$webinar);
        $this->load->view('common/footer');
    }

    function sendWebinardetails($data=null,$reqId=null){

       // $this =& get_instance();
        $this ->load->library('email');
        $this ->email->set_mailtype("html");
        $this ->email->from('events@in.fiorano.com', 'Fiorano Events');
        $data['leadname']= getLeadName($data['country']);

        if (strpos($reqId, 'fiorano.com') === false) {
            $to_main = "download-notifications@in.fiorano.com";
            $this ->email->subject("Webinar Recording View  - " .$data['name']."(".$data['company'].") - ".$data['country']);
            $this ->email->bcc("harikrishnan.v@in.fiorano.com");
        } else {
            $to_main = "harikrishnan.v@in.fiorano.com";
            $this ->email->cc('pooja.sharma@in.fiorano.com');
            $this ->email->subject("Webinar Recording View Internal  - " .$data['name']."(".$data['company'].") - ".$data['country']);
        }
        $this ->email->to($to_main);
        $body = $this ->load->view('templates/email/webinar_register', $data, TRUE);
        $this ->email->message($body);

        if ($this->email->send()){
            return 1;
        }else{
            return 2;
        }

    }
}
?>
