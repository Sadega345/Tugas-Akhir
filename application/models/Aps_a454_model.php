<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a454_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 	$data=$this->db->query('select p.id,d.nama_dosen, p.prestasi,p.tahun,p.internasional,p.nasional,p.lokal from prestasi_dosen p inner join dosen_tbl d
on p.id_dosen=d.id_dosen where d.kd_prodi="P002";');
 	return $data->result_array();
 }

}
