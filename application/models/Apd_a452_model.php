<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a452_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT d.nama_dosen ,p.jenjang_pend, p.bid_studi, p.perguruan_tinggi, p.negara, p.thn_mulai_std FROM pkdt_tgs_belajar p INNER JOIN dosen_tbl d ON d.id_dosen=p.id_dosen WHERE d.kd_prodi="p001" AND d.kd_jns_dosen=1');
 return $data->result_array();
 }

}
