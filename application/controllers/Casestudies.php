<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/16/2017
 * Time: 11:25 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Casestudies extends CI_Controller
{
    public function zunyi_district(){
        $data['heading']="Zunyi District drives through efficiency gain with Fiorano | Fiorano";
        $data['title']="Zunyi District drives through efficiency gain with Fiorano | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/zunyi_district');
        $this->load->view('common/footer');
    }
    public function sjs_district(){
        $data['heading']="Fiorano remedies Business Integration challenges at SJS District | Fiorano";
        $data['title']="Fiorano remedies Business Integration challenges at SJS District | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/sjs_district');
        $this->load->view('common/footer');
    }

}