<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a522_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT teori,praktek,praktikum,pkl,id FROM waktu_prpbm WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT teori,praktek,praktikum,pkl,id FROM waktu_prpbm '.$where);
 return $data->result_array();
 }

public function rubah($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
}

}
