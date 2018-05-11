<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a442_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT d.nama_dosen,a.kode_mk,a.nama_mk,a.jml_sks,a.jp_rencana,a.jp_dilaksanakan 
FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi="p001" AND d.kd_jns_dosen=2');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT d.nama_dosen,a.kode_mk,a.nama_mk,a.jml_sks,a.jp_rencana,a.jp_dilaksanakan 
FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 public function tot_pertemuan() {
 $data=$this->db->query('SELECT SUM(a.jp_rencana) AS total_rencana FROM aktivitas_mengajar a INNER JOIN dosen_tbl d 
ON a.id_dosen=d.id_dosen WHERE d.kd_prodi="P001" AND d.kd_jns_dosen=2');
 return $data->result_array();
 }

 public function tot_dilaksanakan() {
 $data=$this->db->query('SELECT SUM(a.jp_dilaksanakan) AS total_laksana FROM aktivitas_mengajar a INNER JOIN dosen_tbl d 
ON a.id_dosen=d.id_dosen WHERE d.kd_prodi="P001" AND d.kd_jns_dosen=2');
 return $data->result_array();
 }

}
