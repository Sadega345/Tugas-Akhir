<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a711_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
public function listing() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,sumber_pembiayaan FROM penelitian_dosen WHERE kd_prodi="p001" ORDER BY KD_JNS;');
 return $data->result_array();
 }

 public function totTs2() {
 $data=$this->db->query('SELECT SUM(TS_2)AS TS_2 FROM penelitian_dosen WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totTs1() {
 $data=$this->db->query('SELECT SUM(TS_1)AS TS_1 FROM penelitian_dosen WHERE kd_prodi="p001"');
 return $data->result_array();
 }
 
 public function totTs() {
 $data=$this->db->query('SELECT SUM(TS)AS TS FROM penelitian_dosen WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function peneliti() {
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=1 AND kd_prodi="p001"');
 return $data->result_array();
 }

 public function bersangkutan() {
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=2 AND kd_prodi="p001"');
 return $data->result_array();
 }

 public function kemristekdikti() {
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=3 AND kd_prodi="p001"');
 return $data->result_array();
 }

 public function dalam() {
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=3 AND kd_prodi="p001"');
 return $data->result_array();
 }

 public function luar() {
 $data=$this->db->query('SELECT SUM(ts_2+ts_1+ts) AS JML FROM penelitian_dosen WHERE kd_jns=5 AND kd_prodi="p001"');
 return $data->result_array();
 }

}
