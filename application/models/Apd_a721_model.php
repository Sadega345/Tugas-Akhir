<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a721_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function dosen() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML FROM kegiatan_pkm WHERE KD_JNS=1 AND kd_prodi="p001"');
 return $data->result_array();
 }

 public function bersangkutan() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML FROM kegiatan_pkm WHERE KD_JNS=2 AND kd_prodi="p001"');
 return $data->result_array();
 }

 public function kemristekdikti() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML FROM kegiatan_pkm WHERE KD_JNS=3 AND kd_prodi="p001"');
 return $data->result_array();
 }

 public function luarkemristekdikti() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML FROM kegiatan_pkm WHERE KD_JNS=4 AND kd_prodi="p001"');
 return $data->result_array();
 }

 public function luarnegeri() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML FROM kegiatan_pkm WHERE KD_JNS=5 AND kd_prodi="p001"');
 return $data->result_array();
 }

}
