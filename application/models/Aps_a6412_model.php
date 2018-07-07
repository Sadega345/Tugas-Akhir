<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6412_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function row1() {
 	$row1=$this->db->query('select count(kd_jns) as row1 from jurnal where kd_jns=1 and kd_prodi="P002";');
 	return $row1->result_array();
 }

 public function row2(){
 	$row2=$this->db->query('select count(kd_jns) as row2 from jurnal where kd_jns=2 and kd_prodi="P002";');
 	return $row2->result_array();
 }

 public function data1(){
 	$data1=$this->db->query('select nm_jurnal,rincian,jml from jurnal where kd_jns=1 and kd_prodi="P002";');
 	return $data1->result_array();
 }

 public function data2(){
 	$data2=$this->db->query('select nm_jurnal,rincian,jml from jurnal where kd_jns=2 and kd_prodi="P002";');
 	return $data2->result_array();
 }
}
