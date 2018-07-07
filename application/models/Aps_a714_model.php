<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a714_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
	$data=$this->db->query('select karya from hak_intelektual where kd_prodi="p002"');
	return $data->result_array();
 }

}
