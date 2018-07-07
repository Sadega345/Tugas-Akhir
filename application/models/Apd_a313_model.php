<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a313_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function D4() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT ts_6,ts_5, ts_4,ts_3,ts_2,ts_1,ts,jml_ts_llsan FROM data_mhs_angkatan WHERE id_prodi='."'$kdprodi'".'ORDER BY tahun');
 return $data->result_array();
 }

  public function D3() {
  	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT ts_4,ts_3,ts_2,ts_1,ts,jml_ts_llsan,id FROM data_mhs_angkatan WHERE id_prodi='."'$kdprodi'".'ORDER BY tahun');
 return $data->result_array();
 }

 public function D2() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT ts_2,ts_1,ts,jml_ts_llsan FROM data_mhs_angkatan WHERE id_prodi='."'$kdprodi'".'ORDER BY tahun');
 return $data->result_array();
 }

  public function D1() {
  	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT ts_1,ts,jml_ts_llsan FROM data_mhs_angkatan WHERE id_prodi='."'$kdprodi'".'ORDER BY tahun');
 return $data->result_array();
 }

 public function jumlah(){
 	$total = $this->db->query('SELECT SUM(ts_4+ts_3+ts_2+ts_1+ts) AS jml_ts_llsan FROM data_mhs_angkatan');
 	return $total->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT ts_4,ts_3,ts_2,ts_1,ts,jml_ts_llsan,id FROM data_mhs_angkatan '.$where);
 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 

 

}
