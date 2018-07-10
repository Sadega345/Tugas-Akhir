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
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('select p.id,d.nama_dosen, p.prestasi,p.tahun,p.internasional,p.nasional,p.lokal from prestasi_dosen p inner join dosen_tbl d
on p.id_dosen=d.id_dosen where d.kd_prodi='."'$kdprodi'");
 	return $data->result_array();
 }

}
