<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b42_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $this->db->select('*');
 $this->db->from('apd_b42');
 $query = $this->db->get();
 return $query->result();
 }

}
