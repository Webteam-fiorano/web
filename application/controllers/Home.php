<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        //nocache();
        $this->load->model('auth', '', TRUE);

    }



    public function index()
	{
        $data['qmain']='oth';
        $data['qsub']='';
        $data['qmenu']= '1';
        $data['heading']="Fiorano Software | Fiorano is a leading provider of JMS, including Service-Oriented Architecture (SOA), Enterprise Messaging, Java Messaging Service,  JMS Server, SAP integration,Messaging Queue,SAP Solutions,Enterprise Service Bus, ESB, PSD2, enterprise middleware and peer-to-peer distributed systems";
        $data['title']="Fiorano Software | Fiorano is a leading provider of JMS, including Service-Oriented Architecture (SOA), Enterprise Messaging, Java Messaging Service,  JMS Server, SAP integration,Messaging Queue,SAP Solutions,Enterprise Service Bus, ESB, PSD2, enterprise middleware and peer-to-peer distributed systems";
        //$data['userdet']=$this->auth->showdet();
        $this->load->view('common/header',$data);
        $this->load->view('common/home');
        $this->load->view('common/footer');

    }
    public function viewDet()
    {
        $data['qmain']='oth';
        $data['qsub']='';
        $data['qmenu']= '1';
        $data['heading']="Fiorano Software | Fiorano is a leading provider of JMS, including Service-Oriented Architecture (SOA), Enterprise Messaging, Java Messaging Service,  JMS Server, SAP integration,Messaging Queue,SAP Solutions,Enterprise Service Bus, ESB, PSD2, enterprise middleware and peer-to-peer distributed systems";
        $data['title']="Fiorano Software | Fiorano is a leading provider of JMS, including Service-Oriented Architecture (SOA), Enterprise Messaging, Java Messaging Service,  JMS Server, SAP integration,Messaging Queue,SAP Solutions,Enterprise Service Bus, ESB, PSD2, enterprise middleware and peer-to-peer distributed systems";
        //$data['userdet']=$this->auth->showdet();
        $this->load->view('common/header_fixed',$data);
        $this->load->view('common/home');
        $this->load->view('common/footer_fixed');
    }
}
