
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Architecture extends CI_Controller
{

    /**
     * Created by PhpStorm.
     * User: harikrishnan
     * Date: 12/21/2016
     * Time: 10:14 AM
     *
     */
    public function index()
    {
        //$this->load->view('welcome_message');
        echo "Architecture Home page it will do later.";
    }
    public function fiorano_microservices(){
        $data['qmain']='pro';
        $data['qsub']='mic';
        $data['heading']="Fiorano Microservice Architecture | Fiorano";
        $data['title']="Fiorano Microservice Architecture | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('architecture/fiorano_microservices');
        $this->load->view('common/footer');
    }
    public function fiorano_microservices_keybenefits(){
        $data['qmain']='pro';
        $data['qsub']='mic';
        $data['heading']="Fiorano Microservice Key Benefits | Fiorano";
        $data['title']="Fiorano Microservice Key Benefits | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('architecture/fiorano_microservices_keybenefits');
        $this->load->view('common/footer');
    }
}