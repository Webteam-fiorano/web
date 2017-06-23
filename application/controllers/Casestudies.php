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
    public function aboitiz_power(){
        $data['heading']="Aboitiz Power chooses Fiorano ESB | Fiorano";
        $data['title']="Aboitiz Power chooses Fiorano ESB | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/aboitiz_power');
        $this->load->view('common/footer');
    }
    public function bajaj_finserv(){
        $data['heading']="Bajaj Finserv streamlines loan approvals with Fiorano | Fiorano";
        $data['title']="Bajaj Finserv streamlines loan approvals with Fiorano | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/bajaj_finserv');
        $this->load->view('common/footer');
    }
    public function beijing_bureau(){
        $data['heading']="Beijing Water Management Bureau improves water plant management with Fiorano Integration  | Fiorano";
        $data['title']="Beijing Water Management Bureau improves water plant management with Fiorano Integration  | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/beijing_bureau');
        $this->load->view('common/footer');
    }
    public function cambodia_post_bank(){
        $data['heading']="Fiorano enables Mobile Banking Services for Cambodia Post Bank | Fiorano";
        $data['title']="Fiorano enables Mobile Banking Services for Cambodia Post Bank | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/cambodia_post_bank');
        $this->load->view('common/footer');
    }
    public function canadia_bank(){
        $data['heading']="Fiorano enables Mobile Banking Services for Cambodia Post Bank | Fiorano";
        $data['title']="Fiorano enables Mobile Banking Services for Cambodia Post Bank | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/canadia_bank');
        $this->load->view('common/footer');
    }
    public function commercial_bank_africa(){
        $data['heading']="Powered by Fiorano ESB, Commercial Bank of Africa revolutionizes mobile-banking | Fiorano";
        $data['title']="Powered by Fiorano ESB, Commercial Bank of Africa revolutionizes mobile-banking | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/commercial_bank_africa');
        $this->load->view('common/footer');
    }
    public function commission_junction(){
        $data['heading']="Fiorano meets Commission Junction's need for a Reliable Messaging Infrastructure | Fiorano";
        $data['title']="Fiorano meets Commission Junction's need for a Reliable Messaging Infrastructure | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/commission_junction');
        $this->load->view('common/footer');
    }
    public function jnet_justice_network(){
        $data['heading']="Fiorano meets Commission Junction's need for a Reliable Messaging Infrastructure | Fiorano";
        $data['title']="Fiorano meets Commission Junction's need for a Reliable Messaging Infrastructure | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('casestudies/jnet_justice_network');
        $this->load->view('common/footer');
    }

}