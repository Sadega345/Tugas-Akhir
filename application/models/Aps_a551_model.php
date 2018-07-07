<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a551_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 	$data=$this->db->query('select d.nama_dosen,p.jml_mhs from pembimbing_skripsi p inner join dosen_tbl d on p.id_dosen=d.id_dosen where p.kd_prodi="P002"');
 	return $data->result_array();
 }

public function avg(){
	$avg=$this->db->query('select avg(p.jml_mhs) as avg from pembimbing_skripsi p inner join dosen_tbl d on p.id_dosen=d.id_dosen where p.kd_prodi="P002"');
	return $avg->result_array();
}
}
