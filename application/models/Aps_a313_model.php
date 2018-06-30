<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a313_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function D4() {
 $data= $this->db->query('SELECT ts_6,ts_5, ts_4,ts_3,ts_2,ts_1,ts,jml_ts_llsan FROM data_mhs_angkatan WHERE id_prodi="p002"ORDER BY tahun');
 return $data->result_array();
 }

  public function D3() {
 $data= $this->db->query('SELECT ts_4,ts_3,ts_2,ts_1,ts,jml_ts_llsan FROM data_mhs_angkatan WHERE id_prodi="p001" ORDER BY tahun');
 return $data->result_array();
 }

 public function D2() {
 $data= $this->db->query('SELECT ts_2,ts_1,ts,jml_ts_llsan FROM data_mhs_angkatan WHERE id_prodi="p001" ORDER BY tahun');
 return $data->result_array();
 }

  public function D1() {
 $data= $this->db->query('SELECT ts_1,ts,jml_ts_llsan FROM data_mhs_angkatan WHERE id_prodi="p001" ORDER BY tahun');
 return $data->result_array();
 }

 

}
