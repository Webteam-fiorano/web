<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/14/2017
 * Time: 12:55 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pressreleases extends CI_Controller
{
 public function index(){

 }

 public function cpb_fiorano_for_temenos_t24_integration(){
     $data['heading']="Cambodia Post Bank (CPB) selects Fiorano for Temenos T24 integration with NBC's FAST System | Fiorano";
     $data['title']="Cambodia Post Bank (CPB) selects Fiorano for Temenos T24 integration with NBC's FAST System | Fiorano";
     $this->load->view('common/header',$data);
     $this->load->view('pressrelease/cpb_fiorano_for_temenos_t24_integration');
     $this->load->view('common/footer');
}

}