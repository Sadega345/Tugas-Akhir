<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a341_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data= $this->db->query('SELECT sangat_baik,baik,cukup,kurang,rencana,jenis_kemampuan FROM evaluasi_lulusan WHERE id_prodi="p002" ORDER BY id_kemampuan');
 return $data->result_array();
 }

 public function sangatbaik() {
 $data= $this->db->query('SELECT SUM(sangat_baik)AS Sangat_baik FROM evaluasi_lulusan WHERE id_prodi="p001"');
 return $data->result_array();
 }

 public function baik() {
 $data= $this->db->query('SELECT SUM(baik)AS Baik FROM evaluasi_lulusan WHERE id_prodi="p001"');
 return $data->result_array();
 }

 public function cukup() {
 $data= $this->db->query('SELECT SUM(cukup)AS Cukup FROM evaluasi_lulusan WHERE id_prodi="p001"');
 return $data->result_array();
 }

 public function kurang() {
 $data= $this->db->query('SELECT SUM(kurang)AS Kurang FROM evaluasi_lulusan WHERE id_prodi="p001"');
 return $data->result_array();
 }

}
