<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a345_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $data= $this->db->query('SELECT instansi,j_lulusan_psn,j_lulusan_terima FROM instansi_lulusan');
 return $data->result_array();
 }

}
