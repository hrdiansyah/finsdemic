<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rcore extends CI_Controller {

 function __construct()
 {
   parent::__construct();
        $this->load->model('User','',TRUE);
        $this->load->model('RLcore');
        $this->load->helper('form','url');
        $this->load->library('pagination');
 }


//Start Index
 function index()
 {
   
 if($this->session->Userdata('logged_in'))
   {
     $session_data = $this->session->Userdata('logged_in');
     $data['Coruser'] = $session_data['Coruser'];
     $data['CfullName'] = $session_data['CfullName'];
     $data['CdateReg'] = $session_data['CdateReg'];
     $data['cID'] = $session_data['id'];
     $data['Cstatus'] = $session_data['Cstatus'];
	  
     
     //$this->load->view('Rvcore', $data);
   }
   else
   {
     //If no session, redirect to Login page
     redirect('Login', 'refresh');
   }

$cID = $session_data['id'];
$Cstatus = $session_data['Cstatus'];
$data['total_rows'] = $this->RLcore->count_barang($cID); 

   $jpage=$this->input->get('per_page');
        $batas=50; //jlh data yang ditampilkan per halaman
        if(!$jpage):     //jika page bernilai kosong maka batas akhirna akan di set 0
           $offset = 0;
        else:
           $offset = $jpage; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;
 
        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url().'index.php/Rcore?';   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->RLcore->count_barang($cID); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
 
        $config['uri_segment'] = $jpage; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page
 
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
 
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
 
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
 
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
 
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
 
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging']=$this->pagination->create_links();
        $data['jlhpage']=$jpage;
 
        $data['title'] = 'iCAMPOREE 2020'; //judul title
		$data['etag'] = 'All User';
        $data['qbarang'] = $this->RLcore->get_allbarang($cID,$batas,$offset); //query model semua barang

 		

 		$session_data = $this->session->Userdata('logged_in');
		$Cstatus = $session_data['Cstatus'];
        $data['Coruser'] = $session_data['Coruser'];
        $this->load->view('Rvcore',$data);



 }
 
 //End Index

		
public function book_add()
        {
			if($this->session->Userdata('logged_in'))
   {
     $session_data = $this->session->Userdata('logged_in');
     $data['Coruser'] = $session_data['Coruser'];
     $data['CfullName'] = $session_data['CfullName'];
     $data['CdateReg'] = $session_data['CdateReg'];
     $data['cID'] = $session_data['id'];
     $data['Cstatus'] = $session_data['Cstatus'];
	  
     
     //$this->load->view('Rvcore', $data);
   }
   else
   {
     //If no session, redirect to Login page
     redirect('Login', 'refresh');
   }

$cID = $session_data['id'];
$Cstatus = $session_data['Cstatus'];

        date_default_timezone_set("Asia/jakarta"); 
		$vtoday = date('Y-m-d H:i:s');
         //$vtoday = 'G'.$cID.$vvtoday;
            $data = array(
                    'tgl_update' => $vtoday,		
					'id_ku' => $this->input->post('id_ku'),					
                    'id_games' => $this->input->post('id_games'),
                    'media' => $this->input->post('media'),
                    'upload_link' => $this->input->post('upload_link'),
                    'jemaat' => $this->input->post('jemaat'),
					
                );
            $insert = $this->Michale->book_add($data);
            echo json_encode(array("status" => TRUE));
        }

public function ajax_edit($id)
        {
			if($this->session->Userdata('logged_in'))
   {
     $session_data = $this->session->Userdata('logged_in');
     $data['Coruser'] = $session_data['Coruser'];
     $data['CfullName'] = $session_data['CfullName'];
     $data['CdateReg'] = $session_data['CdateReg'];
     $data['cID'] = $session_data['id'];
     $data['Cstatus'] = $session_data['Cstatus'];
	  
     
     //$this->load->view('Rvcore', $data);
   }
   else
   {
     //If no session, redirect to Login page
     redirect('Login', 'refresh');
   }

$cID = $session_data['id'];
$Cstatus = $session_data['Cstatus'];

            $data = $this->Michale->get_by_id($id); 
            echo json_encode($data);
        }

public function book_update()
    {
		if($this->session->Userdata('logged_in'))
   {
     $session_data = $this->session->Userdata('logged_in');
     $data['Coruser'] = $session_data['Coruser'];
     $data['CfullName'] = $session_data['CfullName'];
     $data['CdateReg'] = $session_data['CdateReg'];
     $data['cID'] = $session_data['id'];
     $data['Cstatus'] = $session_data['Cstatus'];
	  
     
     //$this->load->view('Rvcore', $data);
   }
   else
   {
     //If no session, redirect to Login page
     redirect('Login', 'refresh');
   }

$cID = $session_data['id'];
$Cstatus = $session_data['Cstatus'];

		  date_default_timezone_set("Asia/jakarta"); 
		$vtoday = date('Y-m-d H:i:s');
         //$vtoday = 'G'.$cID.$vvtoday;
            $data = array(
                    'tgl_update' => $vtoday,		
					'id_ku' => $this->input->post('id_ku'),					
                    'id_games' => $this->input->post('id_games'),
                    'media' => $this->input->post('media'),
                    'upload_link' => $this->input->post('upload_link'),
                    'jemaat' => $this->input->post('jemaat'),
            );
        $this->Michale->book_update(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
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

function expr()
 {
   
 if($this->session->Userdata('logged_in'))
   {
     $session_data = $this->session->Userdata('logged_in');
     $data['Coruser'] = $session_data['Coruser'];
     $data['CfullName'] = $session_data['CfullName'];
     $data['CdateReg'] = $session_data['CdateReg'];
     $data['cID'] = $session_data['id'];
     $data['Cstatus'] = $session_data['Cstatus'];
	 $data['Ccode'] = $session_data['Ccode'];
     
     //$this->load->view('Rvcore', $data);
   }
   else
   {
     //If no session, redirect to Login page
     redirect('Login', 'refresh');
   }

$cID = $data['id'];
$this->load->view('exp', $data);
 }

function exprorder()
 {
   
 if($this->session->Userdata('logged_in'))
   {
     $session_data = $this->session->Userdata('logged_in');
     $data['Coruser'] = $session_data['Coruser'];
     $data['CfullName'] = $session_data['CfullName'];
     $data['CdateReg'] = $session_data['CdateReg'];
     $data['cID'] = $session_data['id'];
     $data['Cstatus'] = $session_data['Cstatus'];
	 $data['Ccode'] = $session_data['Ccode'];
     
     //$this->load->view('Rvcore', $data);
   }
   else
   {
     //If no session, redirect to Login page
     redirect('Login', 'refresh');
   }

$cID = $data['Ccode'];
$this->load->view('vexprorder', $data);
 }
 

 public function cari()
    {
$session_data = $this->session->Userdata('logged_in');
$cID = $session_data['cID'];
$Cstatus = $session_data['Cstatus'];
$data['Coruser'] = $session_data['Coruser'];
$data['CfullName'] = $session_data['CfullName'];
$data['CdateReg'] = $session_data['CdateReg'];
$data['cID'] = $session_data['id'];
$data['Cstatus'] = $session_data['Cstatus'];
	 
$data['total_rows'] = $this->RLcore->count_barang(); 
$data['f_daftar'] = $this->RLcore->f_daftar($Cstatus); 
$data['f_testIST1'] = $this->RLcore->f_testIST1($Cstatus); 
$data['f_testIST2'] = $this->RLcore->f_testIST2($Cstatus);
$data['f_testIST3'] = $this->RLcore->f_testIST3($Cstatus);  
$data['f_testIST4'] = $this->RLcore->f_testIST4($Cstatus); 
$data['f_testIST5'] = $this->RLcore->f_testIST5($Cstatus);
$data['f_testIST6'] = $this->RLcore->f_testIST6($Cstatus); 
$data['f_testIST7'] = $this->RLcore->f_testIST7($Cstatus); 
$data['f_testIST8'] = $this->RLcore->f_testIST8($Cstatus);
$data['f_testIST9'] = $this->RLcore->f_testIST9($Cstatus);
$data['f_testPauli'] = $this->RLcore->f_testPauli($Cstatus); 
$data['f_notest'] = $this->RLcore->f_notest($Cstatus); 

$data['c_jobs'] = $this->Mjob->c_jobs(); 
$data['s_teman'] = $this->RLcore->s_teman($Cstatus);
$data['s_glints'] = $this->RLcore->s_glints($Cstatus);
$data['s_linkedin'] = $this->RLcore->s_linkedin($Cstatus);
$data['s_jobstreet'] = $this->RLcore->s_jobstreet($Cstatus);

$s_teman = $data['s_teman'];
$s_glints = $data['s_glints'];
$s_linkedin = $data['s_linkedin'];
$s_jobstreet = $data['s_jobstreet'];

$data['jdraft'] = $this->Mjob->jdraft(); 
$data['jpublished'] = $this->Mjob->jpublished(); 
$data['jclosed'] = $this->Mjob->jclosed(); 
$data['jarchived'] = $this->Mjob->jarchived(); 


        $key= $this->input->get('key'); //method get key
        $page=$this->input->get('per_page');  //method get per_page
 
        $search=array(
            'nama_lengkap'=> $key,
            'pendidikan'=> $key
        ); //array pencarian yang akan dibawa ke model
 
        $batas=10; //jlh data yang ditampilkan per halaman
        if(!$page):     //jika page bernilai kosong maka batas akhirna akan di set 0
           $offset = 0;
        else:
           $offset = $page; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;
 
        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url().'index.php/Rcore?key='.$key;   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->RLcore->count_barang_search($search); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
 
        $config['uri_segment'] = $page; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page
 
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
 
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
 
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
 
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
 
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
 
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging']=$this->pagination->create_links();
        $data['jlhpage']=$page;
 
        $data['title'] = 'CAMPOREE CORE SYSTEM'; //judul title
		$data['etag'] = 'RESULT'; 
        $data['qbarang'] = $this->RLcore->get_allbarang($batas,$offset,$search); //query model semua barang

        
 
        $this->load->view('Rvcore',$data);

 
    }


    public function form(){

    	$session_data = $this->session->Userdata('logged_in');
        $data['Coruser'] = $session_data['Coruser'];
        //ambil variabel URL
        $mau_ke                 = $this->uri->segment(3);
        $idu                    = $this->uri->segment(4);
         


        //ambil variabel dari form
        $id                     = addslashes($this->input->post('id'));
        $usid                   = addslashes($this->input->post('usid'));
        $nama_lengkap           = addslashes($this->input->post('nama_lengkap'));
        $jenis_kelamin          = addslashes($this->input->post('jenis_kelamin'));
        $pendidikan             = addslashes($this->input->post('pendidikan'));
        $alamat                 = addslashes($this->input->post('alamat'));
        $email                  = addslashes($this->input->post('email'));
        $hp                   = addslashes($this->input->post('hp'));
 
//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "add") {//jika uri segmentnya add
            $data['title'] = 'Add New Member';
            $data['aksi'] = 'aksi_add';
            $this->load->view('Vcore',$data);
        } else if ($mau_ke == "edit") {//jika uri segmentnya edit
            $data['qdata']  = $this->RLcore->get_barang_byid($idu);
            $data['title'] = 'Edit Member';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('Vcore',$data);
        } else if ($mau_ke == "aksi_add") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'usid'   => $usid,
                'nama_lengkap'  => $nama_lengkap,
                'jenis_kelamin' => $jenis_kelamin,
                'pendidikan'=> $pendidikan,
                'alamat'    => $alamat,
                'email'     => $email,
                'hp'  => $hp
            );
            $this->RLcore->get_insert($data); //model insert data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('Rcore');
        } else if ($mau_ke == "aksi_edit") { //jika uri segmentnya aksi_edit sebagai fungsi untuk update
          $data = array(
                'id'   => $id,
                'usid'   => $usid,
                'nama_lengkap'  => $nama_lengkap,
                'jenis_kelamin' => $jenis_kelamin,
                'pendidikan'=> $pendidikan,
                'alamat'    => $alamat,
                'email'     => $email,
                'hp'  => $hp
            );
            $this->RLcore->get_update($id,$data); //modal update data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
            redirect('Rcore');
        }
 
    }
    public function detail($id){ //fungsi detail barang
        $session_data = $this->session->Userdata('logged_in');
        $data['Coruser'] = $session_data['Coruser'];

        $data['title'] = 'Detail Member'; //judul title
        $data['qbarang'] = $this->RLcore->get_barang_byid($id); //query model barang sesuai id
 
        $this->load->view('Rvdcore',$data); //meload views detail barang
    }
    public function hapus($gid){ //fungsi hapus barang sesuai dengan id
        $session_data = $this->session->Userdata('logged_in');
        $data['Coruser'] = $session_data['Coruser'];

        $this->RLcore->del_barang($gid);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data Member berhasil dihapus</div>");
        redirect('Rcore');
    }


 public function jcari()
    {
       $session_data = $this->session->Userdata('logged_in');
$cID = $session_data['cID'];
$Cstatus = $session_data['Cstatus'];
$data['Coruser'] = $session_data['Coruser'];
$data['CfullName'] = $session_data['CfullName'];
$data['Cdescription'] = $session_data['Cdescription'];
$data['CdateReg'] = $session_data['CdateReg'];
$data['cID'] = $session_data['id'];
$data['Cstatus'] = $session_data['Cstatus'];
	 
$data['total_rows'] = $this->RLcore->count_barang(); 
$data['f_daftar'] = $this->RLcore->f_daftar($Cstatus); 
$data['f_testIST1'] = $this->RLcore->f_testIST1($Cstatus); 
$data['f_testIST2'] = $this->RLcore->f_testIST2($Cstatus);
$data['f_testIST3'] = $this->RLcore->f_testIST3($Cstatus);  
$data['f_testIST4'] = $this->RLcore->f_testIST4($Cstatus); 
$data['f_testIST5'] = $this->RLcore->f_testIST5($Cstatus);
$data['f_testIST6'] = $this->RLcore->f_testIST6($Cstatus); 
$data['f_testIST7'] = $this->RLcore->f_testIST7($Cstatus); 
$data['f_testIST8'] = $this->RLcore->f_testIST8($Cstatus);
$data['f_testIST9'] = $this->RLcore->f_testIST9($Cstatus);
$data['f_testPauli'] = $this->RLcore->f_testPauli($Cstatus); 
$data['f_notest'] = $this->RLcore->f_notest($Cstatus); 

$data['c_jobs'] = $this->Mjob->c_jobs(); 
$data['s_teman'] = $this->RLcore->s_teman($Cstatus);
$data['s_glints'] = $this->RLcore->s_glints($Cstatus);
$data['s_linkedin'] = $this->RLcore->s_linkedin($Cstatus);
$data['s_jobstreet'] = $this->RLcore->s_jobstreet($Cstatus);

$s_teman = $data['s_teman'];
$s_glints = $data['s_glints'];
$s_linkedin = $data['s_linkedin'];
$s_jobstreet = $data['s_jobstreet'];

$data['jdraft'] = $this->Mjob->jdraft(); 
$data['jpublished'] = $this->Mjob->jpublished(); 
$data['jclosed'] = $this->Mjob->jclosed(); 
$data['jarchived'] = $this->Mjob->jarchived(); 


        $key= $this->input->get('key'); //method get key
        $page=$this->input->get('per_page');  //method get per_page
 
        $search=array(
            'job_name'=> $key,
            'job_desc'=> $key
        ); //array pencarian yang akan dibawa ke model
 
        $batas=25; //jlh data yang ditampilkan per halaman
        if(!$page):     //jika page bernilai kosong maka batas akhirna akan di set 0
           $offset = 0;
        else:
           $offset = $page; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;
 
        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url().'index.php/Rcore?key='.$key;   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->Mjob->count_jobs_search($search); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
 
        $config['uri_segment'] = $page; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page
 
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
 
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
 
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
 
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
 
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
 
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging']=$this->pagination->create_links();
        $data['jlhpage']=$page;
 
        $data['title'] = 'CAMPOREE CORE SYSTEM'; //judul title
        $data['qjobs'] = $this->Mjob->get_alljobs($batas,$offset,$search); //query model semua barang

        
 
        $this->load->view('Rvcore',$data);

 
    }


public function su(){

        $session_data = $this->session->Userdata('logged_in');
        $data['Username'] = $session_data['Username'];
        //ambil variabel URL
        $mau_ke                 = $this->uri->segment(3);
        $idu                    = $this->uri->segment(4); 

        //ambil variabel dari form
        $id                     = addslashes($this->input->post('id'));
        $CdateReg                 = addslashes($this->input->post('CdateReg'));
        $CfullName           = addslashes($this->input->post('CfullName'));
        $Cusername          = addslashes($this->input->post('Cusername'));
        $Cpassword             = addslashes($this->input->post('Cpassword'));
        $Cemail                 = addslashes($this->input->post('Cemail'));
        $Cphone                  = addslashes($this->input->post('Cphone'));
        $Caddress               = addslashes($this->input->post('Caddress'));
        $id               = addslashes($this->input->post('id'));
        $Ctotalemployee               = addslashes($this->input->post('Ctotalemployee'));
        $Cstatus               = addslashes($this->input->post('Cstatus'));
        $Cupdate               = addslashes($this->input->post('Cupdate'));
        $Ccode               = addslashes($this->input->post('Ccode'));
        $Cmembertype               = addslashes($this->input->post('Cmembertype'));
        $Cdescription               = addslashes($this->input->post('Cdescription'));
 
//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "new") {//jika uri segmentnya add
            $data['title'] = 'Create New Corporate';
            $data['aksi'] = 'uc';
            $this->load->view('formregfirm',$data);
        } else if ($mau_ke == "edit") {//jika uri segmentnya edit
            $data['qdata']  = $this->Mreg->get_regs_byregsID($idu);
            $data['title'] = 'Edit Member';
            $data['aksi'] = 'user_edit';
            $this->load->view('formreg',$data);
        } else if ($mau_ke == "uc") {//jika uri segmentnya uc sebagai fungsi user confirm
            $data['title'] = 'Add New Member';
            $data['aksi'] = 'user_new';
            $this->load->view('formregfirm',$data);

        } else if ($mau_ke == "user_new") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'CdateReg'   => $CdateReg,
                'CfullName'  => $CfullName,
                'Cusername' => $Cusername,
                'Cpassword'=> $Cpassword,
                'Cemail'    => $Cemail,
                'Cphone'     => $Cphone,
                'Caddress'  => $Caddress,
                'id'  => $id,
                'Ctotalemployee'  => $Ctotalemployee,
                'Cstatus'  => $Cstatus,
                'Cupdate'  => $Cupdate,
                'Ccode'  => $Ccode,
                'Cmembertype'  => $Cmembertype,
                'Cdescription'  => $Cdescription
            );
            $this->Mreg->get_insertregs($data); //model insert data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('Rcore');
        } else if ($mau_ke == "aksi_edit") { //jika uri segmentnya aksi_edit sebagai fungsi untuk update
          $data = array(
                'id'   => $id,
                'CdateReg'   => $CdateReg,
                'CfullName'  => $CfullName,
                'Cusername' => $Cusername,
                'Cpassword'=> $Cpassword,
                'Cemail'    => $Cemail,
                'Cphone'     => $Cphone,
                'Caddress'  => $Caddress,
                'id'  => $id,
                'Ctotalemployee'  => $Ctotalemployee,
                'Cstatus'  => $Cstatus,
                'Cupdate'  => $Cupdate,
                'Ccode'  => $Ccode,
                'Cmembertype'  => $Cmembertype,
                'Cdescription'  => $Cdescription
            );
            $this->Mreg->get_updateregs($id,$data); //modal update data barang
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
            redirect('Rcore');
        }
 
    }


public function jform(){

        $session_data = $this->session->Userdata('logged_in');
        $data['Coruser'] = $session_data['Coruser'];
        //ambil variabel URL
        $mau_ke                 = $this->uri->segment(3);
        $idu                    = $this->uri->segment(4);
         


        //ambil variabel dari form
        $jobID                     = addslashes($this->input->post('jobID'));
        $job_name                   = addslashes($this->input->post('job_name'));
        $job_qualify           = addslashes($this->input->post('job_qualify'));
        $job_desc          = addslashes($this->input->post('job_desc'));
        $job_year             = addslashes($this->input->post('job_year'));
        $job_salary                 = addslashes($this->input->post('job_salary'));
        $job_salary_max                  = addslashes($this->input->post('job_salary_max'));
 

//mengarahkan fungsi form sesuai dengan uri segmentnya
        if ($mau_ke == "Create") {//jika uri segmentnya add
            $data['title'] = 'Post New Jobs';
            $data['aksi'] = 'aksi_add';
            $this->load->view('Fjobs',$data);
        } else if ($mau_ke == "edit") {//jika uri segmentnya edit
            $data['qjobs']  = $this->Mjob->get_jobs_byjobID($idu);
            $data['title'] = 'Edit job_salary';
            $data['aksi'] = 'aksi_edit';
            $this->load->view('Fjobs',$data);
        } else if ($mau_ke == "aksi_add") {//jika uri segmentnya aksi_add sebagai fungsi untuk insert
            $data = array(
                'job_name'  => $job_name,
                'job_qualify' => $job_qualify,
                'job_desc'=> $job_desc,
                'job_year'    => $job_year,
                'job_salary'     => $job_salary,
                'job_salary_max'  => $job_salary_max
            );
            $this->Mjob->get_insertjobs($data); //model insert data barang
            $this->session->set_flashdata("pesanjobs", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil di insert</div>"); //pesan yang tampil setalah berhasil di insert
            redirect('Rcore');
        } else if ($mau_ke == "aksi_edit") { //jika uri segmentnya aksi_edit sebagai fungsi untuk update
          $data = array(
                'jobID'   => $jobID,
                'job_name'   => $job_name,
                'job_qualify'  => $job_qualify,
                'job_desc' => $job_desc,
                'job_year'=> $job_year,
                'job_salary'    => $job_salary,
                'job_salary_max'     => $job_salary_max
            );
            $this->Mjob->get_updatejobs($jobID,$data); //modal update data barang
            $this->session->set_flashdata("pesanjobs", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); //pesan yang tampil setelah berhasil di update
            redirect('Rcore');
        }
 
    }




public function ureg()
 {
     $session_data = $this->session->Userdata('logged_in');
     $data['Coruser'] = $session_data['Coruser'];
     $data['CfullName'] = $session_data['CfullName'];
     $data['Cdescription'] = $session_data['Cdescription'];
     $data['CdateReg'] = $session_data['CdateReg'];
     $data['cID'] = $session_data['id'];
     $data['Cstatus'] = $session_data['Cstatus'];

$cID = $session_data['cID'];
$Cstatus = $session_data['Cstatus'];
$data['total_rows'] = $this->RLcore->count_barang(); 
$data['f_daftar'] = $this->RLcore->f_daftar($Cstatus); 
$data['f_testIST1'] = $this->RLcore->f_testIST1($Cstatus); 
$data['f_testIST2'] = $this->RLcore->f_testIST2($Cstatus);
$data['f_testIST3'] = $this->RLcore->f_testIST3($Cstatus);  
$data['f_testIST4'] = $this->RLcore->f_testIST4($Cstatus); 
$data['f_testIST5'] = $this->RLcore->f_testIST5($Cstatus);
$data['f_testIST6'] = $this->RLcore->f_testIST6($Cstatus); 
$data['f_testIST7'] = $this->RLcore->f_testIST7($Cstatus); 
$data['f_testIST8'] = $this->RLcore->f_testIST8($Cstatus);
$data['f_testIST9'] = $this->RLcore->f_testIST9($Cstatus);
$data['f_testPauli'] = $this->RLcore->f_testPauli($Cstatus); 
$data['f_notest'] = $this->RLcore->f_notest($Cstatus); 

$data['c_jobs'] = $this->Mjob->c_jobs(); 
$data['s_teman'] = $this->RLcore->s_teman($Cstatus);
$data['s_glints'] = $this->RLcore->s_glints($Cstatus);
$data['s_linkedin'] = $this->RLcore->s_linkedin($Cstatus);
$data['s_jobstreet'] = $this->RLcore->s_jobstreet($Cstatus);


   $jpage=$this->input->get('per_page');
        $batas=10; //jlh data yang ditampilkan per halaman
        if(!$jpage):     //jika page bernilai kosong maka batas akhirna akan di set 0
           $offset = 0;
        else:
           $offset = $jpage; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;
 
        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url().'index.php/Rcore/ureg?';   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->RLcore->count_ureg(); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
 
        $config['uri_segment'] = $jpage; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page
 
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
 
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
 
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
 
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
 
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
 
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging']=$this->pagination->create_links();
        $data['jlhpage']=$jpage;
		$data['etag'] = 'ALL REGISTERED USER'; 
        $data['title'] = 'CAMPOREE 2020'; //judul title
        $data['qbarang'] = $this->RLcore->get_allpeserta($batas,$offset); 
        $this->load->view('Avcore',$data);

 }
 

 function jemaat()
 {
     $session_data = $this->session->Userdata('logged_in');
     $data['Coruser'] = $session_data['Coruser'];
     $data['CfullName'] = $session_data['CfullName'];
     $data['Cdescription'] = $session_data['Cdescription'];	  
	 $data['id'] = $session_data['id'];
     $data['CdateReg'] = $session_data['CdateReg'];
     $data['cID'] = $session_data['id'];
     $data['Cstatus'] = $session_data['Cstatus'];
	 $data['Ccode'] = $session_data['Ccode'];

$cID = $session_data['cID'];
$Cstatus = $session_data['Cstatus'];


   $jpage=$this->input->get('per_page');
        $batas=2000; //jlh data yang ditampilkan per halaman
        if(!$jpage):     //jika page bernilai kosong maka batas akhirna akan di set 0
           $offset = 0;
        else:
           $offset = $jpage; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;
 
        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url().'index.php/Rcore/jemaat?';   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->RLcore->count_jemaat(); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
 
        $config['uri_segment'] = $jpage; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page
 
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
 
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
 
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
 
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
 
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
 
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging']=$this->pagination->create_links();
        $data['jlhpage']=$jpage;
 
        $data['title'] = 'CAMPOREE 2020'; 
		$data['etag'] = 'LIST JEMAAT UIKB'; 
        $data['qbarang'] = $this->RLcore->get_jemaat($batas,$offset); 
        $this->load->view('vUikb',$data);

 }
 

 public function app_ichale()
    {
		$vtoday = date('Y-m-d H:i:s');
        $data = array(
                  
				   'appdate' => $this->$vtoday,
                    'appstatus' => $this->input->post('app'),
					'app_by' => $this->input->post('app_by'),
					'app_reason' => $this->input->post('app_reason'),
            );
        $this->Michale->app_ichale(array('id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
    }

 function hchalenge()
 {
   
 if($this->session->Userdata('logged_in'))
   {
     $session_data = $this->session->Userdata('logged_in');
     $data['Coruser'] = $session_data['Coruser'];
     $data['CfullName'] = $session_data['CfullName'];
     $data['Cdescription'] = $session_data['Cdescription'];	 
	 $data['id'] = $session_data['id'];
     $data['CdateReg'] = $session_data['CdateReg'];
     $data['cID'] = $session_data['id'];
     $data['Cstatus'] = $session_data['Cstatus'];
	 $data['Ccode'] = $session_data['Ccode'];
     
     //$this->load->view('Rvcore', $data);
   }
   else
   {
     //If no session, redirect to Login page
     redirect('Login', 'refresh');
   }

$cID = $data['id'];
$this->load->view('vhchalenge', $data);
 }
 


}

?>