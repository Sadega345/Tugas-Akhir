<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a712_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT JUDUL,nama_dosen,publikasi,thn_publikasi,lokal,nasional,internasional,id FROM
artikel_ilmiah WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function lokal() {
 $data=$this->db->query('SELECT COUNT(IF(LOKAL LIKE "v%",LOKAL,NULL))AS JML FROM artikel_ilmiah WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function nasional() {
 $data=$this->db->query('SELECT COUNT(IF(nasional LIKE "v%",nasional,NULL))AS JML FROM artikel_ilmiah WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function internasional() {
 $data=$this->db->query('SELECT COUNT(IF(internasional LIKE "v%",internasional,NULL))AS JML FROM artikel_ilmiah WHERE kd_prodi="p001"');
 return $data->result_array();
 }

}
