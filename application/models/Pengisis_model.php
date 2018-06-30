<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengisis_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing($where="") {
	 $data=$this->db->query("select id,nama,nidn,jabatan,tgl_pengisian from pengisi_borang ".$where);
	 return $data->result_array();
 }

 public function insert($tablename,$data){
	$res=$this->db->insert($tablename,$data);
	return $res;
}

public function update($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
}

public function delete($tablename,$where){
	$res=$this->db->delete($tablename,$where);
	return $res;
}

}
