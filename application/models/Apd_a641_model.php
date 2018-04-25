<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a641_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 // public function listing() {
 // $this->db->select('*');
 // $this->db->from('apd_a641');
 // $query = $this->db->get();
 // return $query->result();
 // }

 public function totjudul() {
 $data=$this->db->query('SELECT SUM(jml_judul)AS Tot_judul FROM pustaka WHERE KD_PRODI="p001"');
 return $data->result_array();
 }

 public function totkopi() {
 $data=$this->db->query('SELECT SUM(jml_copy)AS Tot_Kopi FROM pustaka WHERE KD_PRODI="p001"');
 return $data->result_array();
 }

}
