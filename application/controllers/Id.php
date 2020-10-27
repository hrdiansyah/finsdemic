<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Id extends CI_Controller {

 function __construct()
 {
   parent::__construct();
        //$this->load->model('User','',TRUE);
        $this->load->helper('form','url');
        $this->load->library('pagination');
 }


//Start Index
 function index()
 {
        $this->load->view('vhome');
}
 //End Index

 function logout()
 {
   $this->session->unset_Userdata('logged_in');
   session_destroy();
   redirect('MLcore', 'refresh');
 }



function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $Coruser = $this->input->post('Coruser');

   //query the database
   $result = $this->User->Login($Coruser, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'Coruser' => $row->Coruser
       );
       $this->session->set_Userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid Coruser or password');
     return false;
   }
 }



    public function aboutprl(){ //fungsi detail barang
        $this->load->view('about'); //meload views detail barang
    }






}

?>