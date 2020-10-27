<?php
class RLcore extends CI_Model {
 
    var $rtabel = 'corp_member'; 
	var $ptabel = 'products'; 
    function __construct() {
        parent::__construct();
    
    }

function count_barang($cID){

    $query = $this->db->get($this->rtabel)->num_rows();
    $this->db->where("Ctypecompany",$cID);
    return $query;
	
}


function  count_barang_search($orlike) {

    $this->db->or_like($orlike);
    $query = $this->db->get($this->rtabel);
    $this->db->where("pro_id","520");
    return $query->num_rows();
}
function get_allbarang($cID,$batas =null,$offset=null,$key=null) {

    $this->db->from($this->rtabel);  
	$this->db->where('Ctypecompany',$cID);
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

function get_prod($id,$batas =null,$offset=null,$key=null) {

    $this->db->from($this->ptabel);  
	$this->db->where('id',$id);
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


public function get_ichale_jemaat($cID)
{
$this->db->from('ichalenge');$this->db->where('Ctypecompany',$cID);
$query=$this->db->get();
return $query->result();
}



function get_allpeserta($cID,$batas =null,$offset=null,$key=null) {

    $this->db->from($this->rtabel);  
    $this->db->order_by("id","asc");
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
        $this->db->from($this->rtabel);   
        $this->db->where('id', $id);
 
        $query = $this->db->get();
 
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
 
    function get_insert($data){
       $this->db->insert($this->rtabel, $data);
       return TRUE;
    }
 
    function get_update($id,$data) {
 
        $this->db->where('id', $id);
        $this->db->update($this->rtabel, $data);
 
        return TRUE;
    }
    function del_barang($id) {
        $this->db->where('id', $id);
        $this->db->delete($this->rtabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }


}
?>
