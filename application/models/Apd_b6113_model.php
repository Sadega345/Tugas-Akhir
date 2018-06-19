<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b6113_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $data=$this->db->query('select ts_2,ts_1,ts from dana_tridarma where kd_prodi="p001"');
 return $data->result_array();
 }

}
