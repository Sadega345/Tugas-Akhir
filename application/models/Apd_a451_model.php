<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a451_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT nama_pakar,instansi,judul_keg,pelaksanaan,id FROM kegiatan_ahli WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT nama_pakar,instansi,judul_keg,pelaksanaan,id FROM kegiatan_ahli '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

}
