<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a641_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing1() {
 $pustaka1=$this->db->query('select jml_judul,jml_copy from pustaka where id=1 and kd_prodi="p001"');
 return $pustaka1->result_array();
 }

public function listing2() {
 $pustaka2=$this->db->query('select jml_judul,jml_copy from pustaka where id=2 and kd_prodi="p001"');
 return $pustaka2->result_array();
}

 public function listing3() {
 $pustaka3=$this->db->query('select jml_judul,jml_copy from pustaka where id=3 and kd_prodi="p001"');
 return $pustaka3->result_array();
 }

 public function listing4() {
 $pustaka4=$this->db->query('select jml_judul,jml_copy from pustaka where id=4 and kd_prodi="p001"');
 return $pustaka4->result_array();
 }

 public function listing5() {
 $pustaka5=$this->db->query('select jml_judul,jml_copy from pustaka where id=5 and kd_prodi="p001"');
 return $pustaka5->result_array();
 }

 public function listing6() {
 $pustaka6=$this->db->query('select jml_judul,jml_copy from pustaka where id=6 and kd_prodi="p001"');
 return $pustaka6->result_array();
}

 public function totjudul() {
 $data=$this->db->query('SELECT SUM(jml_judul)AS Tot_judul FROM pustaka WHERE KD_PRODI="p001"');
 return $data->result_array();
 }

 public function totkopi() {
 $data=$this->db->query('SELECT SUM(jml_copy)AS Tot_Kopi FROM pustaka WHERE KD_PRODI="p001"');
 return $data->result_array();
 }

}
