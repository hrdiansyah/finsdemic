<?php
class Mreg extends CI_Model {
 
    var $tabel = 'corp_member'; //variabel tabel
 
    function __construct() {
        parent::__construct();
    }


function count_regs(){
    $query = $this->db->get($this->tabel)->num_rows();
    return $query;
}

function c_regs(){
    $query = $this->db->query('SELECT * FROM corp_member');
    return $query->num_rows();
}


function  count_regs_search($orlike) {
    $this->db->or_like($orlike);
    $query = $this->db->get($this->tabel);
 
    return $query->num_rows();
}



function get_allregs($batas =null,$offset=null,$key=null) {
    $this->db->from($this->tabel);
    if($batas != null){
       $this->db->limit($batas,$offset);
    }
    if ($key != null) {
       $this->db->or_like($key);
    }
    $query = $this->db->get();
 
    //cek apakah ada regs
    if ($query->num_rows() > 0) {
        return $query->result();
    }
}


 
    function get_regs_byregsID($id) {
        $this->db->from($this->tabel);
        $this->db->where('id', $id);
 
        $query = $this->db->get();
 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
 
    function get_insertregs($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
 
    function get_updateregs($id,$data) {
 
        $this->db->where('id', $id);
        $this->db->update($this->tabel, $data);
 
        return TRUE;
    }
    function del_regs($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
}



function get_allregs($batas =null,$offset=null,$key=null) {
    $this->db->from($this->tabel);
    if($batas != null){
       $this->db->limit($batas,$offset);
    }
    if ($key != null) {
       $this->db->or_like($key);
    }
    $query = $this->db->get();
 
    //cek apakah ada regs
    if ($query->num_rows() > 0) {
        return $query->result();
    }
}



function  count_regs_search($orlike) {
    $this->db->or_like($orlike);
    $query = $this->db->get($this->tabel);
 
    return $query->num_rows();
}



?>
