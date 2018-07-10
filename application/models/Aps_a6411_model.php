<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6411_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('select jenis_pustaka,jml_judul,jml_copy,id from pustaka where kd_prodi='."'$kdprodi'".' order by kd_jns');
 	
 	return $data->result_array(); 
 }

 public function total(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$total=$this->db->query('select sum(jml_judul) as total_judul,sum(jml_copy) as total_copy from pustaka where kd_prodi='."'$kdprodi'");
 	return $total->result_array();
 }

 public function update($where="") {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('select jenis_pustaka,jml_judul,jml_copy,id from pustaka '.$where.' ORDER BY kd_jns AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

}
