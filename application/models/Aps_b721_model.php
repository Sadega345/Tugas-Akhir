<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b721_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $this->db->select('*');
 $this->db->from('aps_b721');
 $query = $this->db->get();
 return $query->result();
 }

}
