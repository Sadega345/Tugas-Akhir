<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a434_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT a.id, d.nama_dosen, a.bid_keahlian,a.kode_mk,a.nama_mk,a.jum_kls,a.jp_rencana,a.jp_dilaksanakan 
FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE  d.sts_ahli="YA" AND d.kd_jns_dosen=1');
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
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT SUM(a.jp_rencana)AS jumper_d FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

public function hitung2(){
 	$data=$this->db->query('
SELECT SUM(a.jp_dilaksanakan)AS jumlahpertemuan_dilaksanakan FROM aktivitas_mengajar a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function insert($tablename,$data){
	$res=$this->db->insert($tablename,$data);
	return $res;
}
public function delete($tablename,$where){
	$res=$this->db->delete($tablename,$where);
	return $res;
}

public function getdosen(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$data=$this->db->query('select id_dosen,nama_dosen from dosen_tbl where kd_jns_dosen=1 and sts_ahli="YA" and kd_prodi='."'$kdprodi'");
	return $data->result_array();
}

// public function getmatkul(){
// 	$data=$this->db->query('select kode_mk,nama_mk from struktur_kurikulum;');
// 	return $data->result_array();
// }

}
