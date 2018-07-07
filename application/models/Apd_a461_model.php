<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a461_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT s3,s2,s1,d4,d3,d2,d1,sma,unit_kerja,jns_tng_kepend,kd_jns FROM tenaga_kepend WHERE kode_prodi='."'$kdprodi'".' ORDER BY kd_jns');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT s3,s2,s1,d4,d3,d2,d1,sma,unit_kerja,jns_tng_kepend,kd_jns FROM tenaga_kepend '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 public function tots3() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sum(s3)as tots3 from tenaga_kepend where kode_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function tots2() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sum(s2)as tots2 from tenaga_kepend where kode_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function tots1() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sum(s1)as tots1 from tenaga_kepend where kode_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totd4() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sum(d4)as totd4 from tenaga_kepend where kode_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totd3() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sum(d3)as totd3 from tenaga_kepend where kode_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totd2() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sum(d2)as totd2 from tenaga_kepend where kode_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totd1() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sum(d1)as totd1 from tenaga_kepend where kode_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totsma() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sum(sma)as totsma from tenaga_kepend where kode_prodi='."'$kdprodi'");
 return $data->result_array();
 }

}
