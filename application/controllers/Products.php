<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

 function __construct()
 {
   parent::__construct();
        $this->load->helper('form','url');
        $this->load->library('pagination');
		$this->load->model('RLcore');
 }


//Start Index
 function index()
 {
        $this->load->view('vproducts');
}


public function detail($id){ //fungsi detail barang
        
        $data['qprod'] = $this->RLcore->get_prod($id); //query model barang sesuai id
        $this->load->view('vprodet',$data); //meload views detail barang
    }
	
	
 
 function logout()
 {
   $this->session->unset_Userdata('logged_in');
   session_destroy();
   redirect('Mcore', 'refresh');
 }






}

?>