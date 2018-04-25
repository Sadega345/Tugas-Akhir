<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a623_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT TAHUN,judul_kegiatan,SUMBER_DANA,JUMLAH_DANA FROM dana_pengmas WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totdana() {
 $data=$this->db->query('SELECT SUM(JUMLAH_DANA)AS Tot_Dana FROM dana_pengmas WHERE kd_prodi="p001"');
 return $data->result_array();
 }

}
