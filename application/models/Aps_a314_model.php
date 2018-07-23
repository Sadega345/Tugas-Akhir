<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a314_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT id,ts_6,ts_5, ts_4,ts_3,ts_2,ts_1,ts,jml_ts_llsan,id_ts FROM data_mhs_angkatan WHERE id_prodi='."'$kdprodi'".' ORDER BY id_ts');
 	return $data->result_array();
 }

 public function update($where=""){
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT id,ts_6,ts_5, ts_4,ts_3,ts_2,ts_1,ts,jml_ts_llsan,id_ts FROM data_mhs_angkatan '.$where);
 return $data->result_array();
}

public function ubah($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
}

 

}
