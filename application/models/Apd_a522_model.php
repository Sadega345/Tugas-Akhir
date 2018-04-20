<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a522_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT teori,praktek,praktikum,pkl FROM waktu_prpbm WHERE kd_prodi="p001"');
 return $data->result_array();
 }

}
