<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6113_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $this->db->select('*');
 $this->db->from('aps_b6113');
 $query = $this->db->get();
 return $query->result();
 }

}
