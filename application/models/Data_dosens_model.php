<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosens_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $this->db->select('*');
 $this->db->from('data_dosen');
 $query = $this->db->get();
 return $query->result();
 }

}
