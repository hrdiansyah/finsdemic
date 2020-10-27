<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('User','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('Username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('Password', 'password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('Login_view');
   }
   else
   {
     //Go to private area
     redirect('Rcore', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $Username = $this->input->post('Username');

   //query the database
   $result = $this->User->Login($Username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'Coruser' => $row->Cusername,
         'CfullName' => $row->CfullName,
         'CdateReg' => $row->CdateReg,
         'Cstatus' => $row->Cstatus,
         'cID' => $row->id
       );
       $this->session->set_Userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid Username or password');
     return false;
   }
 }
}
?>