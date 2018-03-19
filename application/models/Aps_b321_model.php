<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b321_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $this->db->select('*');
 $this->db->from('aps_b321');
 $query = $this->db->get();
 return $query->result();
 }

}
