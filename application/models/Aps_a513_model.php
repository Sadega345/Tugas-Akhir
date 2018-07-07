<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a513_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 	$data=$this->db->query('select smt,kode_mk,nama_mk,bobot_sks,bobot_tgs,penyelenggara			
from struktur_kurikulum where jns_mk=2 and kd_prodi="p002";');
	return $data->result_array();
 }

}
