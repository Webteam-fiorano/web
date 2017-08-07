
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    /**
     * Created by PhpStorm.
     * User: harikrishnan
     * Date: 12/21/2016
     * Time: 10:14 AM
     *
     */
    public function index()
    {
        $data['qmain']='pro';
        $data['qsub']='';
        $data['heading']="Fiorano Products| Fiorano";
        $data['title']="Fiorano Products | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('products/products');
        $this->load->view('common/footer');
    }
    public function fiorano_integration()
    {
        $data['qmain']='pro';
        $data['qsub']='ip';

        $data['heading']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Integration Platform";
        $data['title']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Integration Platform";
        $this->load->view('common/header',$data);
        $this->load->view('products/fiorano_integration_platform');
        $this->load->view('common/footer');

    }
        public function open_source_fiorano_esb()
    {
        $data['qmain']='pro';
        $data['qsub']='oesb';
        $data['heading']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Opensource ESB";
        $data['title']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Opensource ESB";
        $this->load->view('common/header',$data);
        $this->load->view('products/fiorano_esb');
        $this->load->view('common/footer');

    }

    public function fiorano_esb()
    {
        $data['qmain']='pro';
        $data['qsub']='esb';
        $data['heading']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano ESB";
        $data['title']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano ESB";
        $this->load->view('common/header',$data);
        $this->load->view('products/esb_enterprice_service_bus');
        $this->load->view('common/footer');

    }
    public function fiorano_api()
    {
        $data['qmain']='pro';
        $data['qsub']='api';
        $data['heading']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Api Management";
        $data['title']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Api Management";
        $this->load->view('common/header',$data);
        $this->load->view('products/fiorano_api_management');
        $this->load->view('common/footer');

    }
    public function fiorano_b2b()
    {
        $data['qmain']='pro';
        $data['qsub']='';
        $data['heading']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano ESB";
        $data['title']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano ESB";
        $this->load->view('common/header',$data);;
        $this->load->view('products/fiorano_b2b_gateway');
        $this->load->view('common/footer');

    }
    public function fiorano_mq()
    {
        $data['qmain']='pro';
        $data['qsub']='mq';
        $data['heading']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano MQ";
        $data['title']="Fiorano MQ | JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks ";
        $this->load->view('common/header',$data);
        $this->load->view('products/fiorano_mq');
        $this->load->view('common/footer');

    }
    public function fiorano_mqtt()
    {
        $data['qmain']='pro';
        $data['qsub']='mqtt';
        $data['heading']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano ESB";
        $data['title']="Fiorano MQTT | JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks ";
        $this->load->view('common/header',$data);
        $this->load->view('products/fiorano_mqtt');
        $this->load->view('common/footer');

    }
    Public function fiorano_studio(){
        $data['qmain']='pro';
        $data['qsub']='estud';
        $data['heading']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Studio Tools";
        $data['title']="Fiorano Studio Tools | JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Studio Tools";
        $this->load->view('common/header',$data);
        $this->load->view('products/fiorano_studio_tool');
        $this->load->view('common/footer');

    }
    Public function fiorano_microservices(){
        $data['qmain']='pro';
        $data['qsub']='mic';
        $data['heading']="JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Microservices ";
        $data['title']="Fiorano Microservices  | JMS messaging-based ESB with linear, build-as-you-grow scalability with no performance bottlenecks | Fiorano Microservices";
        $this->load->view('common/header',$data);
        $this->load->view('products/fiorano_microservices');
        $this->load->view('common/footer');
    }
    Public function fiorano_esb_license(){
        $data['qmain']='oth';
        $data['qsub']='';
        $data['heading']="Fiorano ESB License | Fiorano ESB ";
        $data['title']="Fiorano ESB License | Fiorano ESB ";
        $this->load->view('common/header',$data);
        $this->load->view('products/fiorano_esb_license');
        $this->load->view('common/footer');
    }


    /*Prateek Updates 07-06-2017*/

    Public function demo(){
        $data['heading']="Fiorano ESB License | Demo ";
        $data['title']="Fiorano ESB License | Demo ";
        $this->load->view('common/header',$data);
        $this->load->view('products/demo');
        $this->load->view('common/footer');
    }
    Public function what_we_do(){
        $data['heading']="Fiorano What We Do | Fiorano ";
        $data['title']="Fiorano What We Do | Fiorano ";
        $this->load->view('common/header',$data);
        $this->load->view('products/what_we_do');
        $this->load->view('common/footer');
    }
    Public function streamlining_integration_strategy(){
        $data['heading']="Fiorano ESB License | Fiorano ";
        $data['title']="Fiorano ESB License | Fiorano ";
        $this->load->view('common/header',$data);
        $this->load->view('products/streamlining_integration_strategy');
        $this->load->view('common/footer');
    }
    Public function application_integration(){
        $data['heading']="Fiorano ESB License | Fiorano ";
        $data['title']="Fiorano ESB License | Fiorano ";
        $this->load->view('common/header',$data);
        $this->load->view('products/application_integration');
        $this->load->view('common/footer');
    }
    Public function service_components(){
        $data['heading']="Fiorano ESB License | Fiorano ";
        $data['title']="Fiorano ESB License | Fiorano ";
        $this->load->view('common/header',$data);
        $this->load->view('products/service_components');
        $this->load->view('common/footer');
    }
    Public function service_components_characteristics(){
        $data['heading']="Fiorano ESB License | Fiorano ";
        $data['title']="Fiorano ESB License | Fiorano ";
        $this->load->view('common/header',$data);
        $this->load->view('products/service_components_characteristics');
        $this->load->view('common/footer');
    }
    Public function service_component_architecture_benefits(){
        $data['heading']="Fiorano ESB License | Fiorano ";
        $data['title']="Fiorano ESB License | Fiorano ";
        $this->load->view('common/header',$data);
        $this->load->view('products/service_component_architecture_benefits');
        $this->load->view('common/footer');
    }
    Public function standards(){
        $data['heading']="Fiorano ESB License | Fiorano ";
        $data['title']="Fiorano ESB License | Fiorano ";
        $this->load->view('common/header',$data);
        $this->load->view('products/standards');
        $this->load->view('common/footer');
    }
    Public function esb_enterprise_service_bus($page){
        $data['heading']="Fiorano ESB License | Fiorano ";
        $data['title']="Fiorano ESB License | Fiorano ";
        $this->load->view('common/header',$data);
        $this->load->view('products/esb_enterprise_service_bus');
        $this->load->view('common/footer');
    }


    Public function digital_transformation ($page=null){
        $data['qmain']='pro';
        $data['qsub']='dig';
        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="business architecture, BPM, operational intelligence, Application Architecture, business integration, IT Governance, real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="The Fiorano Digital Business Platform allows companies to integrate digital and physical elements to successfully transform their business models. Fiorano’s adaptable platform fits into existing enterprise IT landscapes,  enabling the rapid adoption of future technologies in an evolving digital landscape. Fiorano Digital Business Platform translates business innovations into strategic roadmaps so that organizations can integrate business strategies with operational and informational perspectives to provide better customer experiences." />
        <meta name="classification" content="Business Process Excellence, BPM, SOA, ESB, Web services, XML, Electronic Business, Online Transaction Processing" />';
        $data['fbdata']='
        <meta property="og:title" content="Digital Business Platform " />
        <meta property="og:type" content="article" />
        <meta property="og:description" content="Our Digital Business Platform helps enterprises achieve digital transformation." />';


        $data['heading']="Fiorano Digital Business Platform | Fiorano ";
        $data['title']="Fiorano Digital Business Platform | Fiorano ";
        $this->load->view('common/header',$data);
        $this->load->view('products/digital_transformation');
        $this->load->view('common/footer');
    }
    /*Closed*/
}
