<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a623_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT TAHUN,judul_kegiatan,SUMBER_DANA,JUMLAH_DANA,id FROM dana_pengmas WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT TAHUN,judul_kegiatan,SUMBER_DANA,JUMLAH_DANA,id FROM dana_pengmas '.$where);
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

 public function totdana() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(JUMLAH_DANA)AS Tot_Dana FROM dana_pengmas WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

}
