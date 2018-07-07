<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a434_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT d.nama_dosen, a.bid_keahlian,a.kode_mk,a.nama_mk,a.jum_kls,a.jp_rencana,a.jp_dilaksanakan 
FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE  d.sts_ahli="YA" AND d.kd_jns_dosen=1 and d.kd_prodi="P002";');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT d.nama_dosen, a.bid_keahlian,a.kode_mk,a.nama_mk,a.jum_kls,a.jp_rencana,a.jp_dilaksanakan 
FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen '.$where);
 return $data->result_array();
 }

	 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 public function hitung(){
 	$data=$this->db->query('SELECT SUM(a.jp_rencana)AS jumper_d FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.kd_prodi="p001" AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

public function hitung2(){
 	$data=$this->db->query('
SELECT SUM(a.jp_dilaksanakan)AS jumlahpertemuan_dilaksanakan FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

}
