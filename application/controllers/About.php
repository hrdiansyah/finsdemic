<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

 function __construct()
 {
   parent::__construct();
        $this->load->helper('form','url');
        $this->load->library('pagination');
 }


//Start Index
 function index()
 {
        $this->load->view('vabout');
}
 //End Index
 
 function logout()
 {
   $this->session->unset_Userdata('logged_in');
   session_destroy();
   redirect('Mcore', 'refresh');
 }






}

?>