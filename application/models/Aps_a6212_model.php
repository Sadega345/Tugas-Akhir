<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6212_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing1() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data1=$this->db->query('select id,kd_jns,ts_2,ts_1,ts from penggunaan_dana where kd_jns=1 and kd_prodi='."'$kdprodi'");
 return $data1->result_array();
 }

 public function listing2() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data2=$this->db->query('select id,kd_jns,ts_2,ts_1,ts from penggunaan_dana where kd_jns=2 and kd_prodi='."'$kdprodi'");
 return $data2->result_array();
 }

 public function listing3() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data3=$this->db->query('select id,kd_jns,ts_2,ts_1,ts from penggunaan_dana where kd_jns=3 and kd_prodi='."'$kdprodi'");
 return $data3->result_array();
 }

 public function listing4() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data4=$this->db->query('select id,kd_jns,ts_2,ts_1,ts from penggunaan_dana where kd_jns=4 and kd_prodi='."'$kdprodi'");
 return $data4->result_array();
 }

 public function listing5() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data5=$this->db->query('select id,kd_jns,ts_2,ts_1,ts from penggunaan_dana where kd_jns=5 and kd_prodi='."'$kdprodi'");
 return $data5->result_array();
 }

 public function listing6() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data6=$this->db->query('select id,kd_jns,ts_2,ts_1,ts from penggunaan_dana where kd_jns=6 and kd_prodi='."'$kdprodi'");
 return $data6->result_array();
 }

 public function listing7() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data7=$this->db->query('select id,kd_jns,ts_2,ts_1,ts from penggunaan_dana where kd_jns=7 and kd_prodi='."'$kdprodi'");
 return $data7->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('select id,kd_jns,ts_2,ts_1,ts from penggunaan_dana '.$where);
 return $data->result_array();
 }

public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
}

}
