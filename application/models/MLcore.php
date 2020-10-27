<?php
class MLcore extends CI_Model {
 
    var $mtabel = 'member'; //variabel mtabel
    var $tabel_ist = 'ist_result';
    function __construct() {
        parent::__construct();
    }


function count_barang($Cstatus){
    $query = $this->db->get($this->mtabel)->num_rows();
    $this->db->where("pro_id",$Cstatus);
    return $query;
}

function c_daftar($Cstatus){
    $query = $this->db->get($this->mtabel)->num_rows();
    $this->db->where("pro_id",$Cstatus);
    return $query;
}

function c_test1($Cstatus){
    $query = $this->db->get($this->mtabel)->num_rows();
    $this->db->where("pro_id",$Cstatus);
    $this->db->where("status_test","");
    return $query;
}

function c_test2($Cstatus){
    $query = $this->db->get($this->mtabel)->num_rows();
    $this->db->where("pro_id",$Cstatus);
    $this->db->where("status_test","gti.php");
}

function c_ftest($Cstatus){
     $query = $this->db->get($this->mtabel)->num_rows();
    $this->db->where("pro_id",$Cstatus);
    $this->db->where("status_test","engi.php");
}

function  count_barang_search($orlike) {
    $this->db->or_like($orlike);
    $query = $this->db->get($this->mtabel);
    $this->db->where("pro_id","51");
    return $query->num_rows();
}

function s_teman($Cstatus){
    $query = $this->db->get($this->mtabel)->num_rows();
    $this->db->like("hp","teman");
    return $query;
}

function s_glints($Cstatus){
    $query = $this->db->get($this->mtabel)->num_rows();
    $this->db->where("hp","glints");
    return $query;
}


function s_linkedin($Cstatus){
    $query = $this->db->get($this->mtabel)->num_rows();
    $this->db->where("hp","linkedin");
    return $query;
}

function s_jobstreet($Cstatus){
    $query = $this->db->get($this->mtabel)->num_rows();
    $this->db->where("hp","jobstreet");
    return $query;
}



function get_allbarang($batas =null,$offset=null,$key=null) {
    $this->db->from($this->mtabel);    
    $this->db->where("pro_id","51");
    $this->db->order_by("id","desc");
    if($batas != null){
       $this->db->limit($batas,$offset);
    }
    if ($key != null) {
       $this->db->or_like($key);
    }
    $query = $this->db->get();
 
    //cek apakah ada barang
    if ($query->num_rows() > 0) {
        return $query->result();
    }
}

function get_memberreg($batas =null,$offset=null,$key=null) {
    $this->db->from($this->tabel_ist);    
   // $this->db->where("pro_id","51");
   // $this->db->where("status_test","gs1.php");
    $this->db->order_by("id","desc");
    if($batas != null){
       $this->db->limit($batas,$offset);
    }
    if ($key != null) {
       $this->db->or_like($key);
    }
    $query = $this->db->get();
 
    //cek apakah ada barang
    if ($query->num_rows() > 0) {
        return $query->result();
    }
}
 
    function get_barang_byid($id) {
        $this->db->from($this->mtabel);   
        $this->db->where('id', $id);
 
        $query = $this->db->get();
 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
 
    function get_insert($data){
       $this->db->insert($this->mtabel, $data);
       return TRUE;
    }
 
    function get_update($id,$data) {
 
        $this->db->where('id', $id);
        $this->db->update($this->mtabel, $data);
 
        return TRUE;
    }
    function del_barang($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->mtabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
}





?>
