<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a5121_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing1() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sks,keterangan,id from jumlah_sks_ps where jns_matkul=1 and id_ps='."'$kdprodi'");
 return $data->result_array();
 }

 public function listing2() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('select sks,keterangan,id from jumlah_sks_ps where jns_matkul=2 and id_ps='."'$kdprodi'");
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('select sks,keterangan,id from jumlah_sks_ps '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
 }
 
  public function insert($tablename,$data){
	$res=$this->db->insert($tablename,$data);
	return $res;
}

 public function total() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $total=$this->db->query('select sum(sks) as total from jumlah_sks_ps where id_ps='."'$kdprodi'");
 return $total->result_array();
 }


}
