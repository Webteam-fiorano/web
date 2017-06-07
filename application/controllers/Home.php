<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{
        $data['qmain']='oth';
        $data['qsub']='';
        $data['heading']="JMS, Java Message Service, SOA, ESB, SAP Solutions, Enterprise Messaging";
        $data['title']="JMS, Java Message Service, SOA, ESB, SAP Solutions, Enterprise Messaging";
        $this->load->view('common/header',$data);
        $this->load->view('common/home');
        $this->load->view('common/footer');

    }
    public function viewDet()
    {
        //$this->load->view('welcome_message');
        echo"grt trhygtrointjrtn btihjt ghiotr higtrit jgitrhgig ioth ";
    }
}
