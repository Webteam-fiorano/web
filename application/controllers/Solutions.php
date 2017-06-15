
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
        $data['heading']= "Fiorano Temenos T24 Core Banking Integration | Fiorano Solutions";
        $data['title']="Fiorano Temenos T24 Core Banking Integration | Fiorano Solutions";
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
        $data['qmain']='sol';
        $data['qsub']='psd2';
        $data['heading']= "Fiorano PSD2 | Fiorano Solutions";
        $data['title']="Fiorano PSD2  | Fiorano Solutions";
        $this->load->view('common/header',$data);
        $this->load->view('solutions/psd2');
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
}