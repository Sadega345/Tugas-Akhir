<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a453_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT k.id,d.nama_dosen,k.jenis_kegiatan,k.tempat,k.tahun,k.sbg_penyaji,k.sbg_peserta FROM kegiatan_dsn_ttp k INNER JOIN dosen_tbl d ON k.id_dosen=d.id_dosen WHERE d.kd_prodi="p002" AND d.kd_jns_dosen=1');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT k.id,d.nama_dosen,k.jenis_kegiatan,k.tempat,k.tahun,k.sbg_penyaji,k.sbg_peserta FROM kegiatan_dsn_ttp k INNER JOIN dosen_tbl d ON k.id_dosen=d.id_dosen '.$where);
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
public function delete($tablename,$where){
	$res=$this->db->delete($tablename,$where);
	return $res;
}

public function getdosen(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$data=$this->db->query('select id_dosen,nama_dosen from dosen_tbl where kd_jns_dosen=1 and kd_prodi='."'$kdprodi'");
	return $data->result_array();
}

}
