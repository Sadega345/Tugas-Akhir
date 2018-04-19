<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a461_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT s3,s2,s1,d4,d3,d2,d1,sma,unit_kerja FROM tenaga_kepend WHERE kode_prodi="p001" ORDER BY kd_jns');
 return $data->result_array();
 }

}
