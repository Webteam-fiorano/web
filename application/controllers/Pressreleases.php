<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/14/2017
 * Time: 12:55 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pressreleases extends CI_Controller
{
 public function index(){

 }

 public function cpb_fiorano_for_temenos_t24_integration(){
     $data['fbdata']='<meta property="fb:app_id" content="728682737333595"/>
                        <meta property="og:site_name" content="Fiorano"/>
                        <meta property="og:title" content="Cambodia Post Bank (CPB) selects Fiorano for Temenos T24 integration" />
                        <meta property="og:description" content="Cambodia Post Bank (CPB) selects Fiorano for Temenos T24 integration with NBC\'s FAST System" />
                        <meta property="og:type"          content="Website " />
                        <meta property="og:url" content="http://www.fiorano.com/new/index.php/pressreleases/cpb_fiorano_for_temenos_t24_integration"/>
                        <meta property="og:image" content="http://www.fiorano.com/new/assets/images/pressreleases/Cambodia-Post-Bank.jpg"/>';
     $data['heading']="Cambodia Post Bank (CPB) selects Fiorano for Temenos T24 integration with NBC's FAST System | Fiorano";
     $data['title']="Cambodia Post Bank (CPB) selects Fiorano for Temenos T24 integration with NBC's FAST System | Fiorano";
     $this->load->view('common/header',$data);
     $this->load->view('pressrelease/cpb_fiorano_for_temenos_t24_integration');
     $this->load->view('common/footer');
}
    public function eBank_Namibia_with_Fiorano(){
        $data['fbdata']='<meta property="fb:app_id" content="728682737333595"/>
                        <meta property="og:site_name" content="Fiorano"/>
                        <meta property="og:title" content="EBank Namibia facilitates digital banking with Fiorano" />
                        <meta property="og:description" content="Fiorano Enterprise Service Bus seamlessly integrates EBank’s Temenos T24 core banking system with 3rd party suppliers and channels" />
                        <meta property="og:type"          content="Website " />
                        <meta property="og:url" content="http://www.fiorano.com/new/index.php/pressreleases/eBank_Namibia_with_Fiorano"/>
                        <meta property="og:image" content="http://www.fiorano.com/new/assets/images/pressreleases/eBank.jpg"/>';

        $data['heading']="Fiorano Enterprise Service Bus seamlessly integrates EBank’s Temenos T24 core banking system with 3rd party suppliers and channels | Fiorano";
        $data['title']="Fiorano Enterprise Service Bus seamlessly integrates EBank’s Temenos T24 core banking system with 3rd party suppliers and channels | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('pressrelease/eBank_Namibia_with_Fiorano');
        $this->load->view('common/footer');
    }
    public function fiorano_announces_general_availability_mqtt(){


        $data['heading']="Fiorano announces general availability of Fiorano MQTT: the preferred messaging protocol for the IoT revolution | Fiorano";
        $data['title']="Fiorano announces general availability of Fiorano MQTT: the preferred messaging protocol for the IoT revolution | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('pressrelease/fiorano_announces_general_availability_mqtt');
        $this->load->view('common/footer');
    }

    public function psd2_pressrelease(){


        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="Pressreleases, financial leaders, Psd2, Solution Psd2, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="Fiorano Launches PSD2 Solution for Banks for Seamless Regulatory Compliance - Fiorano Software " />
        <meta name="classification" content="PSD2,Pressreleases, Business Process Excellence, BPM, SOA, ESB, Web services, XML, Electronic Business, Online Transaction Processing" />';
        $data['fbdata']='

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="Fiorano Launches PSD2 Solution for Banks for Seamless Regulatory Compliance - Fiorano Software">
            <meta name="twitter:description" content="Proven Middleware leader brings PSD2 Solution to Market to help European Banks Accelerate compliance to Revised Payment Service Directive">
            <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png">
               
            <meta property="og:title" content="Fiorano Launches PSD2 Solution for Banks for Seamless Regulatory Compliance - Fiorano Software" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/pressreleases/psd2_pressrelease/" />
            <meta property="og:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png" />
            <meta property="og:description" content="Proven Middleware leader brings PSD2 Solution to Market to help European Banks Accelerate compliance to Revised Payment Service Directive" />
            <meta property="og:site_name" content="http://www.fiorano.com" />';

        $data['heading']="Fiorano Launches PSD2 Solution for Banks for Seamless Regulatory Compliance | Fiorano ";
        $data['title']="Fiorano Launches PSD2 Solution for Banks for Seamless Regulatory Compliance | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('pressrelease/psd2_pressrelease');
        $this->load->view('common/footer');
    }

    public function bank_of_kigali(){


        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="Pressreleases, financial leaders, Psd2, Solution Psd2, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="Fiorano Drives Digital Transformation at Rwanda’s largest Bank, Bank of Kigali - Fiorano Software " />
        <meta name="classification" content="PSD2,Pressreleases, Business Process Excellence, BPM, SOA, ESB, Web services, XML, Electronic Business, Online Transaction Processing" />';
        $data['fbdata']='

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="Fiorano Drives Digital Transformation at Rwanda’s largest Bank, Bank of Kigali - Fiorano Software">
            <meta name="twitter:description" content="Fiorano Software today announced that Bank of Kigali, Rwanda’s largest commercial bank, has chosen the Fiorano platform for its digital transformation.">
            <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png">
               
            <meta property="og:title" content="Fiorano Drives Digital Transformation at Rwanda’s largest Bank, Bank of Kigali - Fiorano Software" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/pressreleases/bank_of_kigali/" />
            <meta property="og:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png" />
            <meta property="og:description" content="Fiorano Software today announced that Bank of Kigali, Rwanda’s largest commercial bank, has chosen the Fiorano platform for its digital transformation." />
            <meta property="og:site_name" content="http://www.fiorano.com" />';

        $data['heading']="Fiorano Drives Digital Transformation at Rwanda’s largest Bank, Bank of Kigali | Fiorano ";
        $data['title']="Fiorano Drives Digital Transformation at Rwanda’s largest Bank, Bank of Kigali | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('pressrelease/bank_of_kigali');
        $this->load->view('common/footer');
    }

    public function yusen_logistics(){


        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="Pressreleases, financial leaders, Psd2, Solution Psd2, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="Fiorano Delivers Digital Transformation at Yusen Logistics  - Fiorano Software " />
        <meta name="classification" content="PSD2,Pressreleases, Business Process Excellence, BPM, SOA, ESB, Web services, XML, Electronic Business, Online Transaction Processing" />';
        $data['fbdata']='

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="Fiorano Delivers Digital Transformation at Yusen Logistics  - Fiorano Software">
            <meta name="twitter:description" content="Fiorano Software, a leader in enterprise integration, today announced that Yusen Logistics, Singapore, a global logistics provider, has successfully implemented the Fiorano platform as the integration backbone for all inbound and outbound client traffic with their warehouse management system, among other applications.">
            <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png">
               
            <meta property="og:title" content="Fiorano Delivers Digital Transformation at Yusen Logistics  - Fiorano Software" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/pressreleases/yusen_logistics/" />
            <meta property="og:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png" />
            <meta property="og:description" content="Fiorano Software, a leader in enterprise integration, today announced that Yusen Logistics, Singapore, a global logistics provider, has successfully implemented the Fiorano platform as the integration backbone for all inbound and outbound client traffic with their warehouse management system, among other applications." />
            <meta property="og:site_name" content="http://www.fiorano.com" />';

        $data['heading']="Fiorano Delivers Digital Transformation at Yusen Logistics | Fiorano ";
        $data['title']="Fiorano Delivers Digital Transformation at Yusen Logistics  | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('pressrelease/yusen_logistics');
        $this->load->view('common/footer');
    }

    public function banco_postal(){
        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="Pressreleases, financial leaders, Psd2, Solution Psd2, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="Fiorano Powers Banco Postal’s Commitment Towards Financial Inclusion and Digitalization of Angolan Economy  - Fiorano Software " />
        <meta name="classification" content="PSD2,Pressreleases, Business Process Excellence, BPM, SOA, ESB, Web services, XML, Electronic Business, Online Transaction Processing" />';
        $data['fbdata']='

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="Fiorano Powers Banco Postal’s Commitment Towards Financial Inclusion and Digitalization of Angolan Economy  - Fiorano Software">
            <meta name="twitter:description" content="Fiorano Software, a leader in enterprise integration, today announced that Yusen Logistics, Singapore, a global logistics provider, has successfully implemented the Fiorano platform as the integration backbone for all inbound and outbound client traffic with their warehouse management system, among other applications.">
            <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png">
               
            <meta property="og:title" content="Fiorano Powers Banco Postal’s Commitment Towards Financial Inclusion and Digitalization of Angolan Economy  - Fiorano Software" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/pressreleases/banco_postal/" />
            <meta property="og:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png" />
            <meta property="og:description" content="Fiorano Software, a leader in enterprise integration, today announced that Yusen Logistics, Singapore, a global logistics provider, has successfully implemented the Fiorano platform as the integration backbone for all inbound and outbound client traffic with their warehouse management system, among other applications." />
            <meta property="og:site_name" content="http://www.fiorano.com" />';

        $data['heading']="Fiorano Powers Banco Postal’s Commitment Towards Financial Inclusion and Digitalization of Angolan Economy | Fiorano Press release";
        $data['title']="Fiorano Powers Banco Postal’s Commitment Towards Financial Inclusion and Digitalization of Angolan Economy  | Fiorano Press release";
        $this->load->view('common/header',$data);
        $this->load->view('pressrelease/banco_postal');
        $this->load->view('common/footer');

    }
    public function I_M_Bank(){
        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="Pressreleases, I&M bank, kenya banking,  financial leaders, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="Fiorano Contributes to Kenya’s Digital Leap with I&M Bank  - Fiorano Software " />
        <meta name="classification" content="PSD2,Pressreleases, Business Process Excellence, BPM, SOA, ESB, Web services, XML, Electronic Business, Online Transaction Processing" />';
        $data['fbdata']='

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="Fiorano Contributes to Kenya’s Digital Leap with I&M Bank  - Fiorano Software">
            <meta name="twitter:description" content="Fiorano Software announced today that I&M Bank, Kenya has chosen the Fiorano platform to achieve digital transformation to reduce time-to-market while integrating its Finacle,
             Core Banking System. I&M Bank’s need for digital transformation arose from its new strategy aimed at giving each market segment a customized proposition to complement their lifestyle and financial requirements. The use of multiple point-to-point connections was impeding this goal due to its rigidity, high maintenance and management costs. ">
            <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png">
               
            <meta property="og:title" content="Fiorano Contributes to Kenya’s Digital Leap with I&M Bank  - Fiorano Software" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/pressreleases/I_M_Bank/" />
            <meta property="og:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png" />
            <meta property="og:description" content="Fiorano Software announced today that I&M Bank, Kenya has chosen the Fiorano platform to achieve digital transformation to reduce time-to-market while integrating its Finacle, Core Banking System. I&M Bank’s need for digital transformation arose 
            from its new strategy aimed at giving each market segment a customized proposition to complement their lifestyle and financial requirements. The use of multiple point-to-point connections was impeding this goal due to its rigidity, high maintenance and management costs." />
            <meta property="og:site_name" content="http://www.fiorano.com" />';

        $data['heading']="Fiorano Contributes to Kenya’s Digital Leap with I&M Bank | Fiorano Press release";
        $data['title']="Fiorano Contributes to Kenya’s Digital Leap with I&M Bank | Fiorano Press release";
        $this->load->view('common/header',$data);
        $this->load->view('pressrelease/I_M_Bank');
        $this->load->view('common/footer');

    }
    function lakshya_internet(){
        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="Pressreleases, lakshya internet, Online marketing,  financial leaders, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="Fiorano Contributes to Kenya’s Digital Leap with I&M Bank  - Fiorano Software " />
        <meta name="classification" content="PSD2,Pressreleases, Business Process Excellence, BPM, SOA, ESB, Web services, XML, Electronic Business, Online Transaction Processing" />';
        $data['fbdata']='

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="Lakshya Internet transforms its B2B retail with Fiorano iPaaS - Fiorano Software">
            <meta name="twitter:description" content="Fiorano Software announced today that Lakshya Internet has implemented the Fiorano Cloud Platform (iPaaS) to scale its emerging B2B eCommerce business transforming traditional distribution methods in India.">
            <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png">
               
            <meta property="og:title" content="Lakshya Internet transforms its B2B retail with Fiorano iPaaS  - Fiorano Software" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/pressreleases/lakshya_internet/" />
            <meta property="og:image" content="http://www.fiorano.com/new/assets/images/fiorano_logo.png" />
            <meta property="og:description" content="Fiorano Software announced today that Lakshya Internet has implemented the Fiorano Cloud Platform (iPaaS) to scale its emerging B2B eCommerce business transforming traditional distribution methods in India." />
            <meta property="og:site_name" content="http://www.fiorano.com" />';

        $data['heading']="Lakshya Internet transforms its B2B retail with Fiorano iPaaS | Fiorano Press release";
        $data['title']="Lakshya Internet transforms its B2B retail with Fiorano iPaaS | Fiorano Press release";
        $this->load->view('common/header',$data);
        $this->load->view('pressrelease/lakshya_internet');
        $this->load->view('common/footer');


    }
}