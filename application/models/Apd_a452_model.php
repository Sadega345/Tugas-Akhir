<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a452_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('
SELECT p.id,d.nama_dosen ,p.jenjang_pend, p.bid_studi, p.perguruan_tinggi, p.negara, p.thn_mulai_std, p.id
FROM pkdt_tgs_belajar p INNER JOIN dosen_tbl d ON d.id_dosen=p.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.kd_jns_dosen=1');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT d.nama_dosen ,p.jenjang_pend, p.bid_studi, p.perguruan_tinggi, p.negara, p.thn_mulai_std, p.id FROM pkdt_tgs_belajar p INNER JOIN dosen_tbl d ON d.id_dosen=p.id_dosen '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
}

public function insert($tablename,$data){
	$res=$this->db->insert($tablename,$data);
	return $res;
}
public function delete($tablename,$where){
	$res=$this->db->delete($tablename,$where);
	return $res;
}

public function getdosen(){
	$data=$this->db->query('select id_dosen,nama_dosen from dosen_tbl where kd_jns_dosen=1;');
	return $data->result_array();
}

}
