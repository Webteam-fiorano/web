
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller
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
        $data['qmain']='res';
        $data['qsub']='';
        $data['heading']="Fiorano Microservice Architecture | Fiorano";
        $data['title']="Fiorano Microservice Architecture | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/resources');
        $this->load->view('common/footer');
    }
    public function twominute_explainers()
    {
        $data['qmain']='res';
        $data['qsub']='two';
        $data['heading']="Fiorano Two Minute Explainers| Fiorano";
        $data['title']="Fiorano Two Minute Explainers | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/twominute_explainers');
        $this->load->view('common/footer');
    }
    public function online_tutorials()
    {
        $data['qmain']='res';
        $data['qsub']='onl';
        $data['heading']="Fiorano Demos & Tutorials | Fiorano";
        $data['title']="Fiorano Demos & Tutorials | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/online_tutorials');
        $this->load->view('common/footer');
    }
    public function whitepapers()
    {
        $data['qmain']='res';
        $data['qsub']='white';
        $data['heading']="Fiorano Whitepapers | Fiorano";
        $data['title']="Fiorano Whitepapers | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/whitepapers');
        $this->load->view('common/footer');
    }

    public function datasheets()
    {
        $data['qmain']='res';
        $data['qsub']='data';
        $data['heading']="Fiorano Data Sheets  | Fiorano";
        $data['title']="Fiorano Data Sheets | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/datasheets');
        $this->load->view('common/footer');
    }

    public function demo_temenos_t24()
    {
        $data['qmain']='res';
        $data['qsub']='all';
        $data['heading']="Fiorano Demos & Tutorials | Fiorano";
        $data['title']="Fiorano Demos & Tutorials | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/demo_temenos_t24');
        $this->load->view('common/footer');
    }
    public function demo_interest($type=null,$loc=null)
    {

        if (!empty($type)) {
            $data['d_type'] = $this->uri->segment(3);;
        } else {
            $data['d_type'] = '';
        }
        if (!empty($loc)) {
            $data['f_loc'] = $this->uri->segment(4);
        } else {
            $data['f_loc'] = '';
        }
        if ($_POST) {
            $loc = $this->input->post('f_loc');
            if ($this->input->post('d_type') == 'dt') {

                $location = base_url() . 'assets/videos/flash_demos/' . $loc;
                header('Location:' . $location);
            } elseif ($this->input->post('d_type') == 'dtf') {

                redirect('resources/' . $loc, 'location');
            } else {
                redirect('home', 'location');
            }
        }
        $data['qmain']='res';
        $data['qsub']='';
        $data['heading']="Request Fiorano Demos & Tutorials | Fiorano";
        $data['title']=" Request Fiorano Demos & Tutorials | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/demo_interest');
        $this->load->view('common/footer');
    }
    function casestudies(){
        $data['qmain']='res';
        $data['qsub']='case';
        $data['heading']=" Fiorano Customer Case Studies | Fiorano";
        $data['title']="Fiorano Customer Case Studies | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/casestudies');
        $this->load->view('common/footer');
    }
    function downloads(){
        $data['qmain']='res';
        $data['qsub']='';
        $data['heading']=" Fiorano Product Downloads | Fiorano";
        $data['title']="Fiorano Product Downloads | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/downloads');
        $this->load->view('common/footer');
    }
    function documentation(){
        $data['qmain']='res';
        $data['qsub']='doc';
        $data['heading']=" Fiorano Product Documentation | Fiorano";
        $data['title']="Fiorano Product Documentation | Fiorano";
        $this->load->view('common/header',$data);
        $this->load->view('resources/documentation');
        $this->load->view('common/footer');
    }
}