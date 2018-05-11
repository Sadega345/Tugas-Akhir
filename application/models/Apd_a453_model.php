<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a453_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT d.nama_dosen,k.jenis_kegiatan,k.tempat,k.tahun,k.sbg_penyaji,k.sbg_peserta FROM kegiatan_dsn_ttp k INNER JOIN dosen_tbl d ON k.id_dosen=d.id_dosen WHERE d.kd_prodi="p001" AND d.kd_jns_dosen=1');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT d.nama_dosen,k.jenis_kegiatan,k.tempat,k.tahun,k.sbg_penyaji,k.sbg_peserta FROM kegiatan_dsn_ttp k INNER JOIN dosen_tbl d ON k.id_dosen=d.id_dosen '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

}
