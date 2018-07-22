<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a513_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT id,smt,kode_mk,nama_mk,bobot_sks,bobot_tgs,penyelenggara			
FROM struktur_kurikulum WHERE jns_mk=2 AND kd_prodi='."'$kdprodi'");
	return $data->result_array();
 }

 public function update($where="") {
 	$data= $this->db->query('SELECT id,smt,kode_mk,nama_mk,bobot_sks,bobot_tgs,penyelenggara FROM struktur_kurikulum '.$where);
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

}
