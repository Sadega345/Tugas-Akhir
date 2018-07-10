<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a435_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
  $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT a.id, d.nama_dosen,a.kode_mk,a.nama_mk,a.jml_sks,a.jp_rencana,a.jp_dilaksanakan 
FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="Tidak" AND d.kd_jns_dosen=1;');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT a.id,d.nama_dosen,a.kode_mk,a.nama_mk,a.jml_sks,a.jp_rencana,a.jp_dilaksanakan 
FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
}

 public function tot_pertemuan() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(a.jp_rencana) AS total_rencana FROM aktivitas_mengajar a INNER JOIN dosen_tbl d 
ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="Tidak" AND d.kd_jns_dosen=1');
 return $data->result_array();
 }

 public function tot_dilaksanakan() {
  $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(a.jp_dilaksanakan) AS total_laksana FROM aktivitas_mengajar a INNER JOIN dosen_tbl d 
ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="Tidak" AND d.kd_jns_dosen=1');
 return $data->result_array();
 }

 public function getdosen(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('select id_dosen,nama_dosen from dosen_tbl where kd_prodi='."'$kdprodi'". 'and kd_jns_dosen=1 and sts_ahli="TIDAK"');
 	return $data->result_array();
 }

}
