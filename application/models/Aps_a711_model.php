<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a711_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
public function listing() {
	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT TS_2,TS_1,TS,sumber_pembiayaan,id FROM penelitian_dosen WHERE kd_prodi='."'$kdprodi'".'ORDER BY KD_JNS;');
 return $data->result_array();
 }

  public function update($where="") {
 $data= $this->db->query('SELECT TS_2,TS_1,TS,sumber_pembiayaan,id FROM penelitian_dosen '.$where);
 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 public function totTs2() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(TS_2)AS TS_2 FROM penelitian_dosen WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totTs1() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(TS_1)AS TS_1 FROM penelitian_dosen WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }
 
 public function totTs() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(TS)AS TS FROM penelitian_dosen WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function peneliti() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=1 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function bersangkutan() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=2 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function kemristekdikti() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=3 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function dalam() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=3 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function luar() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=5 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

}
