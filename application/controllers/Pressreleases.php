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
}