<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a631_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function totluas() {
 $data=$this->db->query('SELECT SUM(JML_LUAS)AS Tot_Luas FROM dt_ruang_dosen WHERE KD_PRODI="p001"');
 return $data->result_array();
 }

}
