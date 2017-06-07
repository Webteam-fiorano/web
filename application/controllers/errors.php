<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 1/18/2017
 * Time: 11:03 AM
 */
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller
{
    public function index()
    {
        //$this->load->view('welcome_message');
        echo"Products Home page it will do later.";
    }
    public function page_missing()
    {
        $data['heading']="Cannot find th epage in the server";
        $data['message']="Cannot find th epage in the server";
        $this->load->view('common/header',$data);
        $this->load->view('errors/html/error_404');
        $this->load->view('common/footer');

    }

}
