<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller
{

    public function index()
    {
        $data['qmain']='par';
        $data['qsub']='';
        $data['heading'] = "Fiorano Partners Program | Fiorano Software ";
        $data['title'] = "Fiorano Partners Program | Fiorano Software";
        $this->load->view('common/header', $data);
        $this->load->view('partners/partners');
        $this->load->view('common/footer');

    }
}
?>