
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller
{


    public function index()
    {
        $data['qmain']='cus';
        $data['qsub']='';

        $data['heading']="Fiorano Customers | Fiorano";
        $data['title']="Fiorano Customers | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('customers/customers');
        $this->load->view('common/footer');
    }
    public function customer_by_company()
    {
        $data['qmain']='cus';
        $data['qsub']='';
        $data['heading']="Fiorano  Customers By Company | Fiorano";
        $data['title']="Fiorano Customers | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('customers/customer_by_company');
        $this->load->view('common/footer');
    }
    public function customers_by_industry()
    {
        $data['qmain']='cus';
        $data['qsub']='ind';
        $data['heading']="Fiorano Customers By Industry | Fiorano";
        $data['title']="Fiorano  Customers By Industry | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('customers/customers_by_industry');
        $this->load->view('common/footer');
    }
    public function customer_testimonials()
    {
        $data['qmain']='cus';
        $data['qsub']='test';
        $data['heading']="Fiorano Customers Testimonials | Fiorano";
        $data['title']="Fiorano  Customers Testimonials | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('customers/customer_testimonials');
        $this->load->view('common/footer');
    }


}