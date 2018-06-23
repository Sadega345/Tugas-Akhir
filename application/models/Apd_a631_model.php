<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a631_model extends CI_Model {

// Listing
 public function listing() {
 $ruang1=$this->db->query('SELECT r_kerja_dosen,jml_ruang,jml_luas,id FROM dt_ruang_dosen WHERE kd_prodi="p001"');
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

 public function totluas(){
 $totalluas=$this->db->query('select sum(jml_luas) as Tot_Luas from dt_ruang_dosen where kd_prodi="p001"');
 return $totalluas->result_array();
 }

}
