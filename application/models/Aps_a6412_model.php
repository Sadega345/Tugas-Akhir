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
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$row1=$this->db->query('select count(kd_jns) as row1 from jurnal where kd_jns=1 and kd_prodi='."'$kdprodi'");
 	return $row1->result_array();
 }

 public function row2(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$row2=$this->db->query('select count(kd_jns) as row2 from jurnal where kd_jns=2 and kd_prodi='."'$kdprodi'");
 	return $row2->result_array();
 }

 public function data1(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data1=$this->db->query('select nm_jurnal,rincian,jml from jurnal where kd_jns=1 and kd_prodi='."'$kdprodi'");
 	return $data1->result_array();
 }

 public function data2(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data2=$this->db->query('select nm_jurnal,rincian,jml from jurnal where kd_jns=2 and kd_prodi='."'$kdprodi'");
 	return $data2->result_array();
 }
}
