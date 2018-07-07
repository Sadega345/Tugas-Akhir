<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a631_model extends CI_Model {

// Listing
 public function listing() {
$kdprodi = $this->session->userdata('kd_prodi');
 $ruang1=$this->db->query('SELECT r_kerja_dosen,jml_ruang,jml_luas,id FROM dt_ruang_dosen WHERE kd_prodi='."'$kdprodi'");
 return $ruang1->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT r_kerja_dosen,jml_ruang,jml_luas,id FROM dt_ruang_dosen '.$where);
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

 public function totluas(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 $totalluas=$this->db->query('select sum(jml_luas) as Tot_Luas from dt_ruang_dosen where kd_prodi='."'$kdprodi'");
 return $totalluas->result_array();
 }

}
