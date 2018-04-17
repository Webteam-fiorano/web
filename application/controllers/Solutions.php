
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solutions extends CI_Controller
{
    public function index()
    {
        $data['qmain']='sol';
        $data['qsub']='';
        $data['heading']="Fiorano Solutions | Fiorano";
        $data['title']="Fiorano Solutions | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/solutions');
        $this->load->view('common/footer');
    }

    public function financial_service(){

        $data['heading']=" Financial Services| Fiorano Solutions";
        $data['title']="Financial Services | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/financial_service');
        $this->load->view('common/footer');
    }
    Public function swift_integration(){
        $data['qmain']='sol';
        $data['qsub']='swt';
        $data['heading']= "Swift Integration| Fiorano Solutions";
        $data['title']="Swift Integration | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/swift_integration');
        $this->load->view('common/footer');
    }
    Public function banking(){
        $data['qmain']='sol';
        $data['qsub']='';
    $data['heading']= "Fiorano Banking Solutions | Fiorano Solutions";
    $data['title']="Fiorano Banking Solutions | Fiorano Solutions";
    $this->load->view('common/header',$data);
    $this->load->view('solutions/banking');
    $this->load->view('common/footer');
}
    Public function temenos_t24_core_banking_integration(){
        $data['qmain']='sol';
        $data['qsub']='core';
        $data['heading']= "Fiorano  Core Banking Integration | Fiorano Solutions";
        $data['title']="Fiorano Core Banking Integration | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/temenos_t24_core_banking_integration');
        $this->load->view('common/footer');
    }
    Public function health(){
        $data['qmain']='sol';
        $data['qsub']='health';
        $data['heading']= "Fiorano Healthcare | Fiorano Solutions";
        $data['title']="Fiorano Healthcare | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/health');
        $this->load->view('common/footer');
    }
    public function salesforce_integration()
    {
        $data['qmain']='sol';
        $data['qsub']='sales';
        $data['heading']= "Fiorano Salesforce Integration | Fiorano Solutions";
        $data['title']="Fiorano Salesforce Integration | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/salesforce_integration');
        $this->load->view('common/footer');
    }

    public function government_defense()
    {
        $data['qmain']='sol';
        $data['qsub']='govern';
        $data['heading']= "Fiorano Government & Defense  | Fiorano Solutions";
        $data['title']="Fiorano Government & Defense | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/government_defense');
        $this->load->view('common/footer');
    }

    public function sap_solution()
    {
        $data['qmain']='sol';
        $data['qsub']='sap';
        $data['heading']= "Fiorano Sap Solution | Fiorano Solutions";
        $data['title']="Fiorano Sap Solution  | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/sap_solution');
        $this->load->view('common/footer');
    }

    public function psd2()
    {


        $data['meta']='
        <meta name="viewport" content="width=device-width">
        <meta name="keywords" content="PSD2, PISP, Payment Services Directive, AISP, Fiorano PSD2, Psd2,Solution Psd2, Digital Banking, business integration,Banking, real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />
        <meta name="description" content="The Second Payment Services Directive  - PSD2 | Fiorano Software" />
        <meta name="classification" content="PSD2, PISP, Payment Services Directive, AISP, Fiorano PSD2, Psd2,Solution Psd2, Digital Banking, business integration,Banking, real-time analytics, real-time big data, Platform-as-a-service, digital Transformation" />';
        $data['fbdata']='

            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="The Second Payment Services Directive - PSD  | Fiorano Software">
            <meta name="twitter:description" content="Fiorano PSD2, an out-of-the box PSD2 solution, built on the industry\'s leading banking Integration and API Management infrastructure, provides a comprehensive solution for banks to become PSD2 compliant. Fiorano PSD2 masks complex technical details to provide a seamless solution that integrates with all leading corebanking platforms and can be implemented in weeks.">
            <meta name="twitter:image" content="http://www.fiorano.com/new/assets/images/solutions/psd2/PSD2-solution.png">
               
            <meta property="og:title" content="The Second Payment Services Directive  - PSD | Fiorano Software" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/solutions/psd2" />
            <meta property="og:image" content="http://www.fiorano.com/new/assets/images/solutions/psd2/PSD2-solution.png" />
            <meta property="og:description" content="
                        PSD2 mandates are implemented via the European Banking Authorities Regulatory Technical Standards (RTS). The RTS forms the basis of defining technology related steps mandated by PSD2, which need to be implemented by Banks in order to meet compliance.
                        Components of the PSD2 RTS’ standards, such as enhanced security, are designed not only as an impetus to change Banking practices, but are aimed at making the Banking experience more ‘customer-centric’. For example, an additional function of these standards is
                         to secure additional Rights for Banking consumers which would offer a Right to Recourse as well as lower customer liability in case of breaches." />
            <meta property="og:site_name" content="http://www.fiorano.com" />';

        $data['qmain']='sol';
        $data['qsub']='psd2';
        $data['heading']= "The Second Payment Services Directive  | Fiorano Solutions";
        $data['title']="The Second Payment Services Directive  | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/psd2_v2');
        $this->load->view('common/footer');
    }
    public function e_GIF()
    {
        $data['heading']= "Fiorano PSD2 | Fiorano Solutions";
        $data['title']="Fiorano PSD2  | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/e_GIF');
        $this->load->view('common/footer');
    }
    public function psd2_V1()
    {
        $data['qmain']='sol';
        $data['qsub']='psd2';
        $data['heading']= "Fiorano PSD2 | Fiorano Solutions";
        $data['title']="Fiorano PSD2  | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/psd2_v1');
        $this->load->view('common/footer');
    }
    Public function core_banking_integration(){
        $data['qmain']='sol';
        $data['qsub']='core';
        $data['heading']= "Fiorano Digital Bank Transformation | Fiorano Solutions";
        $data['title']="Fiorano Digital Bank Transformation | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/core_banking_integration');
        $this->load->view('common/footer');
    }
}