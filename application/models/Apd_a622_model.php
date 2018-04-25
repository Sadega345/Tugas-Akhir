<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a622_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
public function listing() {
 $data=$this->db->query('SELECT tahun,judul_penelitian,sumber_dana,jml_dana FROM dana_penelitian 
WHERE KD_PRODI="p001"');
 return $data->result_array();
 }

 public function totdana() {
 $data=$this->db->query('SELECT SUM(jml_dana)AS Tot_Dana FROM dana_penelitian WHERE KD_PRODI="P001"');
 return $data->result_array();
 }

}
