<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6113_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT ts_2,ts_1,ts,nm_program_std,id FROM dana_tridarma WHERE kd_prodi="p002"');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT ts_2,ts_1,ts,nm_program_std,id FROM dana_tridarma '.$where);
 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

}
