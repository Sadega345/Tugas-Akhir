<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a641_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing1() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $pustaka1=$this->db->query('SELECT jml_judul,jml_copy,id,jenis_pustaka FROM pustaka WHERE kd_prodi='."'$kdprodi'");
 return $pustaka1->result_array();
 }

 public function update($where="") {
	 $data= $this->db->query('SELECT jml_judul,jml_copy,id,jenis_pustaka FROM pustaka '.$where);
	 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 public function totjudul() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(jml_judul)AS Tot_judul FROM pustaka WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totkopi() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(jml_copy)AS Tot_Kopi FROM pustaka WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

}
