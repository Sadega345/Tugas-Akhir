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
 $data=$this->db->query('select sks,keterangan from jumlah_sks_ps where jns_matkul=1 and id_ps="P002"');
 return $data->result_array();
 }

 public function listing2() {
 $data=$this->db->query('select sks,keterangan from jumlah_sks_ps where jns_matkul=2 and id_ps="P002"');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT smt,kode_mk,nama_mk,sks_kuliah,sks_praktek,sks_inti,sks_institusi,bobot_tgs,deskripsi,silabus,sap,penyelenggara FROM struktur_kurikulum  '.$where);
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
 $total=$this->db->query('select sum(sks) as total from jumlah_sks_ps where id_ps="P002"');
 return $total->result_array();
 }


}
