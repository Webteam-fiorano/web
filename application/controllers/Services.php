
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller
{

    public function index()
    {
        $data['qmain']='ser';
        $data['qsub']='';
        $data['heading']="Fiorano Services | Fiorano";
        $data['title']="Fiorano Services | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('services/services');
        $this->load->view('common/footer');
    }
    public function architecture_assessment_design(){
        $data['qmain']='ser';
        $data['qsub']='ardes';
        $data['heading']=" Fiorano Architecture Assessment Design  | Fiorano Services";
        $data['title']=" Fiorano Architecture Assessment Design  | Fiorano Services";
        $this->load->view('common/header',$data);
        $this->load->view('services/architecture_assessment_design');
        $this->load->view('common/footer');
    }
    public function implementation(){
        $data['qmain']='ser';
        $data['qsub']='impl';
        $data['heading']=" Fiorano Implementation  | Fiorano Services";
        $data['title']=" Fiorano Implementation  | Fiorano Services";
        $this->load->view('common/header',$data);
        $this->load->view('services/implementation');
        $this->load->view('common/footer');
    }
    public function performance_tuning(){
        $data['qmain']='ser';
        $data['qsub']='ptun';
        $data['heading']=" Fiorano Performance Tuning  | Fiorano Services";
        $data['title']=" Fiorano Performance Tuning  | Fiorano Services";
        $this->load->view('common/header',$data);
        $this->load->view('services/performance_tuning');
        $this->load->view('common/footer');
    }
    public function training(){
        $data['qmain']='ser';
        $data['qsub']='training';
        $data['heading']=" Fiorano Training | Fiorano Services";
        $data['title']=" Fiorano Training  | Fiorano Services";
        $this->load->view('common/header',$data);
        $this->load->view('services/training');
        $this->load->view('common/footer');
    }
    public function premium_support(){
        $data['qmain']='ser';
        $data['qsub']='psup';
        $data['heading']=" Fiorano Premium Support  | Fiorano Services";
        $data['title']=" Fiorano Premium Support  | Fiorano Services";
        $this->load->view('common/header',$data);
        $this->load->view('services/premium_support');
        $this->load->view('common/footer');
    }
}