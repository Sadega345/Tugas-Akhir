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
 $data=$this->db->query('SELECT nama_pakar,instansi,judul_keg,pelaksanaan FROM kegiatan_ahli WHERE kd_prodi="p001"');
 return $data->result_array();
 }

}
