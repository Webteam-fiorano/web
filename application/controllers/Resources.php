
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller
{

    /**
     * Created by PhpStorm.
     * User: harikrishnan
     * Date: 12/21/2016
     * Time: 10:14 AM
     *
     */

    function __construct()
    {
        parent::__construct();
        //nocache();
       $this->load->model('auth', '', TRUE);
       $this->load->model('set', '', TRUE);
        if (!empty($this->session->userdata['logged_in'])) {
            $session_array = $this->session->userdata['logged_in'];
            $this->u_id = $session_array['id'];
            $this->user_email = $session_array['email'];
            $this->company = $session_array['company'];
            $this->name = $session_array['name'];
            $this->job_title = $session_array['job_title'];
            $this->country = $session_array['country'];
            $this->phone = $session_array['phone'];
            $this->verified = $session_array['verified'];
            $this->registered = $session_array['registered'];
            $this->website = $session_array['website'];

        }
    }

    public function index()
    {
        $data['qmain']='res';
        $data['qsub']='';
        $data['heading']="Fiorano Microservice Architecture | Fiorano";
        $data['title']="Fiorano Microservice Architecture | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/resources');
        $this->load->view('common/footer');
    }
    public function twominute_explainers()
    {
        $data['qmain']='res';
        $data['qsub']='two';
        $data['heading']="Fiorano Two Minute Explainers| Fiorano";
        $data['title']="Fiorano Two Minute Explainers | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/twominute_explainers');
        $this->load->view('common/footer');
    }
    public function online_tutorials()
    {
        $data['qmain']='res';
        $data['qsub']='onl';
        $data['heading']="Fiorano Demos & Tutorials | Fiorano";
        $data['title']="Fiorano Demos & Tutorials | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/online_tutorials');
        $this->load->view('common/footer');
    }
    public function whitepapers()
    {
        $data['qmain']='res';
        $data['qsub']='white';
        $data['heading']="Fiorano Whitepapers | Fiorano";
        $data['title']="Fiorano Whitepapers | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/whitepapers');
        $this->load->view('common/footer');
    }

    public function datasheets()
    {
        $data['qmain']='res';
        $data['qsub']='data';
        $data['heading']="Fiorano Data Sheets  | Fiorano";
        $data['title']="Fiorano Data Sheets | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/datasheets');
        $this->load->view('common/footer');
    }

    public function demo_temenos_t24()
    {
        $data['qmain']='res';
        $data['qsub']='all';
        $data['heading']="Fiorano Demos & Tutorials | Fiorano";
        $data['title']="Fiorano Demos & Tutorials | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/demo_temenos_t24');
        $this->load->view('common/footer');
    }
    public function demo_interest($type=null,$loc=null)
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
            $loc = $this->input->post('f_loc');
            if ($this->input->post('d_type') == 'dt') {

                $location = base_url() . 'assets/videos/flash_demos/' . $loc;
                header('Location:' . $location);
            } elseif ($this->input->post('d_type') == 'dtf') {

                redirect('resources/' . $loc, 'location');
            } else {
                redirect('home', 'location');
            }
        }
        $data['qmain']='res';
        $data['qsub']='';
        $data['heading']="Request Fiorano Demos & Tutorials | Fiorano";
        $data['title']=" Request Fiorano Demos & Tutorials | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/demo_interest');
        $this->load->view('common/footer');
    }
    function casestudies(){
        $data['qmain']='res';
        $data['qsub']='case';
        $data['heading']=" Fiorano Customer Case Studies | Fiorano";
        $data['title']="Fiorano Customer Case Studies | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/casestudies');
        $this->load->view('common/footer');
    }
    function downloads(){
        $data['qmain']='res';
        $data['qsub']='';
        $data['heading']=" Fiorano Product Downloads | Fiorano";
        $data['title']="Fiorano Product Downloads | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/downloads');
        $this->load->view('common/footer');
    }
    function documentation(){
        $data['qmain']='res';
        $data['qsub']='doc';
        $data['heading']=" Fiorano Product Documentation | Fiorano";
        $data['title']="Fiorano Product Documentation | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/documentation');
        $this->load->view('common/footer');
    }

    function Temenos_T24_Fiorano_ESB_Integration()
    {
        $data['heading']=" Fiorano Product Documentation | Fiorano";
        $data['title']="Fiorano Product Documentation | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/Temenos_T24_Fiorano_ESB_Integration');
        $this->load->view('common/footer');
    }
    function whitepaper_psd2($source=null)
    {

        if(!empty($source)){
            $data['source']= $source;
        }else{
            $data['source']= 'Direct Via Website';
        }

        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="Psd2, Whitpaper, Solution Psd2, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="Fiorano PSD2 | Demystifying PSD2" />
        <meta name="classification" content="PSD2, Business Process Excellence, BPM, SOA, ESB, Web services, XML, Electronic Business, Online Transaction Processing" />';
        $data['fbdata']='

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="Fiorano PSD2 - The payment systems directive of the European Unio">
            <meta name="twitter:description" content="Fiorano Whitepaper PSD2 - The payment systems directive of the European Union">
            <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/resources/Whitepaper-psd2.jpg">
             <meta property="og:title" content="Fiorano PSD2 - The payment systems directive of the European Union" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/resources/whitepaper_psd2" />
            <meta property="og:image" content="http://www.fiorano.com/new/assets/images/resources/Whitepaper-psd2.jpg" />
            <meta property="og:description" content="Fiorano Whitepaper PSD2 - The payment systems directive of the European Union" />
            <meta property="og:site_name" content="http://www.fiorano.com" />
          ';

        $data['reg']=0;
/*<meta property="og:title" content="Fiorano PSD2 - The payment systems directive of the European Union" />
        <meta property="og:type" content="article" />
        <meta property="og:description" content="Fiorano Whitepaper PSD2 - The payment systems directive of the European Union" />
        <meta property="og:image" content="http://www.fiorano.com/new/assets/images/resources/Whitepaper-psd2.jpg" />*/
        if ($_POST) {

            $dat = array(
                'whitepaper' => $this->input->post('whitepaper'),
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'company' => $this->input->post('company'),
                'phone' => $this->input->post('phone'),
                'profile' => $this->input->post('role'),
                'country' => $this->input->post('countrylist'),
                'interest' => $this->input->post('interest'),
                'comments' => $this->input->post('comments'),
                'ipaddress' => get_ip(),
                'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                'browser' => $_SERVER['HTTP_USER_AGENT'],
                'source' => $this->input->post('source')
            );

            if (isCorporateID($this->input->post('email'))) {


                $to_main = "download-notifications@in.fiorano.com";
                //$to_main = "harikrishnan.v@in.fiorano.com";
                $touser = $this->input->post('email');
                /*events@in.fiorano.com*/
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('download-notifications@in.fiorano.com', 'Fiorano Notifications');
                $body = $this->load->view('templates/email/whitepaper_psd2', $dat, TRUE);
                if (strpos($this->input->post('email'), 'fiorano.com') === false) {

                    $this->email->to($to_main);
                    $this->email->bcc("harikrishnan.v@in.fiorano.com");
                    $this->email->subject("Whitepaper Download  - " . 'PSD2 - (' . $this->input->post('countrylist') . ')');
                    $this->email->message($body);
                    if ($this->email->send()) {

                        $this->session->set_flashdata("email_sent", "Email sent successfully.");

                        header("location:".base_url('assets/pdf/PSD2/PSD2-Whitepaper.pdf'));

                    } else {
                        $this->session->set_flashdata("email_sent", "Error in sending Email.");
                        $data['reg'] = 2;
                    }
                } else {

                    $this->email->to("harikrishnan.v@in.fiorano.com");
                    $this->email->subject("Internal Whitepaper Download  - " . 'PSD2 - (' . $this->input->post('countrylist') . ')');
                    $this->email->message($body);
                    if ($this->email->send()) {
                        //$this->logDownload($dat);
                        $this->session->set_flashdata("email_sent", "Email sent successfully.");

                        header("location:".base_url('assets/pdf/whitepaper/Demystifying-PSD2.pdf'));
                       }
                }
            }else{

                $data['error']="Sorry!, please provide Co-operate email id & try again ";
            }
        }
        $data['heading']=" Fiorano Whitepaper PSD2 | The payment systems directive of the European Union";
        $data['title']=" Fiorano Whitepaper PSD2 | The payment systems directive of the European Union";
        $this->load->view('common/header',$data);
        $this->load->view('resources/whitepaper_psd2');
        $this->load->view('common/footer');
    }

    function fsoaDownload(){
        if (empty($this->session->userdata['logged_in'])) {
            $location = site_url('accounts/login/fsoaDownload');
            header('Location:' . $location);
        }else{

            if($_POST){

               $dat = array(
                    'name' =>       $this->name,
                    'company' =>    $this->company,
                    'website' =>    $this->website,
                    'country' =>    $this->country,
                    'phone' =>      $this->phone,
                    'email' =>      $this->user_email,
                    'profile' =>    $this->job_title,
                    'registered' => $this->registered,
                    'leadName'=> getLeadName($this->country),
                    'product'=>$this->input->post('product'),
                    'business_issue'=>str_replace("Other", "Other : " . $this->input->post('otherbusiness'), implode(" | ", $this->input->post('businessIssue'))),
                    'implementation_stages' => str_replace("Other", "Other : " . $this->input->post('Other_Implementation_Stages'), $this->input->post('implementationstages')),
                    'usage'=>$this->input->post('usage'),
                    'desc'=>$this->input->post('desc'),
                    'reffer_url'=>'',
                    'user_click_stream'=>'',
                    'ipaddress' => get_ip_det(),
                    'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                    'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                    'browser' => $_SERVER['HTTP_USER_AGENT'],
                    'source' => $this->input->post('source')
                );


                $dat1['name']=      $this->name;
                $dat1['leadName']=  getLeadName($this->country);
                $dat1['company']=   $this->company;
                $dat1['leademail']= getLeadEmail(getLeadName($this->country));
                $dat1['product']=   $this->input->post('product');

                if ($this->input->post('product') == "Fiorano Platform 11 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fiorano-platform/";
                }elseif ($this->input->post('product') == "Fiorano Platform 10.4.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fiorano-platform/10.4.0";
                }elseif ($this->input->post('product') == "Fiorano Platform 10.3.3 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fiorano-platform/10.3.3";
                }elseif ($this->input->post('product') == "Fiorano Platform 10.3.2 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] =__ROOT__."/downloads/fiorano-platform/10.3.2";
                }elseif ($this->input->post('product') == "Fiorano Platform 10.3.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fiorano-platform/10.3.1";
                }elseif ($this->input->post('product') == "Fiorano Platform 10.3.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fiorano-platform/10.3.0";
                }elseif ($this->input->post('product') == "Fiorano Platform 10.2.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fiorano-platform/10.2.0";
                }elseif ($this->input->post('product') == "Fiorano Platform 10.1.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fiorano-platform/10.1.0";
                }elseif ($this->input->post('product') == "Fiorano Platform 10.0.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fiorano-platform/10.0.0";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.5.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] =  __ROOT__."/downloads/fsoa/951/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.5.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/950/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.4.2 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/942/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.4.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/941/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.4.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/940/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.3.0 for Windows/Unix/Linux/Mac") {
                   $dat1['dlink'] = __ROOT__."/downloads/fsoa/930/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.2.2 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/922/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.2.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/921/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.2.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/920/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.1.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/911/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.1.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/910/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.0.2 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/901/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.0.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/901/";
                }elseif ($this->input->post('product') == "Fiorano SOA Platform 9.0.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fsoa/900/";
                }else {
                    $dat1['dlink'] = __ROOT__."/downloads/fiorano-platform/";
                }
                $dat1['doc_link']=__ROOT__."/documentation/";
                /*Mailing process Starts*/
                $to_main = "download-notifications@in.fiorano.com";
                $touser = $dat['email'];
                $product=$this->input->post('product');
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('download-notifications@in.fiorano.com', 'Fiorano Notifications');
                $body = $this->load->view('templates/email/fsoa_sales', $dat, TRUE);
                if (strpos($touser, 'fiorano.com') === false) {
                    $this->email->to($to_main);
                    $this->email->bcc("harikrishnan.v@in.fiorano.com");
                    $this->email->subject("Product Download - ".$this->company."(".$this->input->post('countrylist').") - ".$product);
                    $this->email->message($body);
                    $this->email->send();
                }else{
                    $this->email->to("harikrishnan.v@in.fiorano.com");
                    $this->email->subject("Internal Download - ".$product."(".$this->input->post('countrylist').")");
                    $this->email->message($body);
                    $this->email->send();
                }
                $this->email->from('sales@fiorano.com', 'Fiorano Software');
                $body1 = $this->load->view('templates/email/fsoa_customers', $dat1, TRUE);
                $this->email->to($touser);
                $this->email->bcc("harikrishnan.v@in.fiorano.com");
                $this->email->subject($product." - Download");
                $this->email->message($body1);
                $this->email->send();
                /*Mailing process close*/
                $dat['download_type']='Product Download';
                $this->logDownload($dat);/*store download details to DB*/

                $enc=base64_encode($product);
                echo site_url('resources/downloadSucess/').$enc;
                exit();
            }
            $data['heading']=" Product Download Fiorano SOA | Fiorano Software";
            $data['title']=" Product Download Fiorano SOA | Fiorano Software";
            $this->load->view('common/header',$data);
            $this->load->view('resources/fsoaDownload');
            $this->load->view('common/footer');
        }

    }
    public function logDownload($data=null){

        if(!empty($data)){

            if(!empty($this->u_id)){
                $userId= $this->u_id;
            }else{
                $userId='';
            }
        $download_details = array(
            "USER_ID" =>        $userId,
            "LEAD_OWNER" =>     $data['leadName'],
            "DOWNLOAD_TYPE" =>  $data['download_type'],
            "PROD_WP_COMP" =>   $data['product'],
            "NAME" =>           $data['name'],
            "USER_EMAIL_ID" =>  $data['email'],
            "TITLE" =>          $data['profile'],
            "COMPANY_NAME" =>   $data['company'],
            "COUNTRY" =>        $data['country'],
            "PHONE" =>          $data['phone'],
            "BUSINESS_ISSUES" =>$data['business_issue'],
            "DESCRIPTION" =>    $data['desc'],
            "IMPLEMENTATION_STAGES" => $data['implementation_stages'],
            "PLANNED_USAGE" =>  $data['usage'],
            "PURCHASE_TIME_FRAME" => "",
            "DOWNLOAD_DATE" => date("Y-m-d H:i:s"),
            "SOURCE" =>         $data['source'],
            "REFERRING_URL" =>  $data['reffer_url'],
            "IP" =>             $data['ipaddress']
        );
            $ins=$this->set->downloadHistory($download_details);
            return $ins;
        }
    }

    public function downloadSucess($product=null){
        $data['heading']=" Thank you for Download Fiorano Product | Fiorano Software";
        $data['title']="Thank you for Download Fiorano Product | Fiorano Software";
        $data['product']= base64_decode($product);

        $this->load->view('common/header',$data);
        $this->load->view('resources/downloadSucess');
        $this->load->view('common/footer');
    }

    function downloadFiorano($ver=null)
    {
        $data['heading']=" Fiorano Platform Download  | Fiorano Product";
        $data['title']=" Fiorano Platform Download | Fiorano Product";
        $this->load->view('common/header',$data);
        $this->load->view('resources/fioranoPlatform/'.$ver.'/index');
        $this->load->view('common/footer');
    }



    function mqDownload(){
        if (empty($this->session->userdata['logged_in'])) {
            $location = site_url('accounts/login/mqDownload');
            header('Location:' . $location);
        }else{

            if($_POST){

                $dat = array(
                    'name' =>       $this->name,
                    'company' =>    $this->company,
                    'website' =>    $this->website,
                    'country' =>    $this->country,
                    'phone' =>      $this->phone,
                    'email' =>      $this->user_email,
                    'profile' =>    $this->job_title,
                    'registered' => $this->registered,
                    'leadName'=> getLeadName($this->country),
                    'product'=>$this->input->post('product'),
                    'business_issue'=>str_replace("Other", "Other : " . $this->input->post('otherbusiness'), implode(" | ", $this->input->post('businessIssue'))),
                    'implementation_stages' => str_replace("Other", "Other : " . $this->input->post('Other_Implementation_Stages'), $this->input->post('implementationstages')),
                    'usage'=>$this->input->post('usage'),
                    'desc'=>$this->input->post('desc'),
                    'reffer_url'=>'',
                    'user_click_stream'=>'',
                    'ipaddress' => get_ip_det(),
                    'hostname' => gethostbyaddr($_SERVER['REMOTE_ADDR']),
                    'locale' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
                    'browser' => $_SERVER['HTTP_USER_AGENT'],
                    'source' => $this->input->post('source')
                );
                $dat1['name']=      $this->name;
                $dat1['leadName']=  getLeadName($this->country);
                $dat1['company']=   $this->company;
                $dat1['leademail']= getLeadEmail(getLeadName($this->country));
                $dat1['product']=   $this->input->post('product');


                if ($this->input->post('product') == "FioranoMQ 10.3.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fmq/";
                    $dat1['doc_link'] = __ROOT__."/documentation/display/MQ1030/FioranoMQ/";
                } elseif ($this->input->post('product') == "FioranoMQ 10.2.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fmq/1020/";
                    $dat1['doc_link'] = __ROOT__."/documentation/display/MQ/FioranoMQ/";
                }elseif ($this->input->post('product') == "FioranoMQ 10.1.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fmq/1010/";
                    $dat1['doc_link'] = __ROOT__."/documentation/display/MQ/FioranoMQ/";
                }elseif ($this->input->post('product') == "FioranoMQ 10.0.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fmq/10/";
                    $dat1['doc_link'] = __ROOT__."/devzone/doc_fmq.php";
                } elseif ($this->input->post('product') == "FioranoMQ 9.5.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/downloads/fmq/951/";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq/951/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.5.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/950/index.php";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/950/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.4.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/941/index.php";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/941/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.4.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/940/index.php";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/940/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.3.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/931/index.php";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/931/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.3.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/930/index.php";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/930/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.2.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/921/index.html";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/921/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.2.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/920/index.html";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/920/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.1.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/911/index.html";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/911/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.1.0 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/910/index.html";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/910/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9.0.1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/901/index.html";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/901/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 9 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/900/index.html";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq9/900/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 2008 SP2 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/fmq2008sp2/index.html";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq/fmq_2008/fmq_2008SP2/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 2008 SP1 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/fmq2008sp1/index.html";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq/fmq_2008/fmq_2008SP1/index.htm";
                } elseif ($this->input->post('product') == "FioranoMQ 2008 for Windows/Unix/Linux/Mac") {
                    $dat1['dlink'] = __ROOT__."/installers/fmq/fmq2008/index.html";
                    $dat1['doc_link'] = __ROOT__."/docs/fmq/fmq_2008/index.htm";
                }

                /*Mailing process Starts*/
                $to_main = "download-notifications@in.fiorano.com";
                $touser = $this->user_email;
                $product=$this->input->post('product');
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('download-notifications@in.fiorano.com', 'Fiorano Notifications');
                $body = $this->load->view('templates/email/fsoa_sales', $dat, TRUE);
                if (strpos($this->email, 'fiorano.com') === false) {
                    $this->email->to($to_main);
                    $this->email->bcc("harikrishnan.v@in.fiorano.com");
                    $this->email->subject("Product Download - ".$this->company."(".$this->input->post('countrylist').") - ".$product);
                    $this->email->message($body);
                    $this->email->send();
                }else{
                    $this->email->to("harikrishnan.v@in.fiorano.com");
                    $this->email->subject("Internal Download - ".$product."(".$this->input->post('countrylist').")");
                    $this->email->message($body);
                    $this->email->send();
                }
                $this->email->from('sales@fiorano.com', 'Fiorano Software');
                $body1 = $this->load->view('templates/email/fsoa_customer', $dat1, TRUE);
                $this->email->to($touser);
                $this->email->bcc("harikrishnan.v@in.fiorano.com");
                $this->email->subject($product." - Download");
                $this->email->message($body1);
                $this->email->send();
                /*Mailing process close*/
                $dat['download_type']='Product Download';
                $this->logDownload($dat);/*store download details to DB*/
                $enc=base64_encode($product);
                echo site_url('resources/downloadSucess/').$enc;
               // site_url('resources/downloadSucess');
                exit();
            }
            $data['heading']=" Product Download Fiorano SOA | Fiorano Software";
            $data['title']=" Product Download Fiorano SOA | Fiorano Software";
            $this->load->view('common/header',$data);
            $this->load->view('resources/mqDownload');
            $this->load->view('common/footer');
        }

    }



}