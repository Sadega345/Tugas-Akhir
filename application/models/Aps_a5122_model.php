<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a5122_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

public function listing() {
$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT id,smt,kode_mk,nama_mk,bobot_sks,sks_inti,sks_institusi,bobot_tgs,deskripsi,silabus,sap,penyelenggara FROM struktur_kurikulum WHERE jns_mk=1 and kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT id,smt,kode_mk,nama_mk,bobot_sks,sks_inti,sks_institusi,bobot_tgs,deskripsi,silabus,sap,penyelenggara FROM struktur_kurikulum  '.$where);
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
 public function GetJenis()
	{
		$data=$this->db->query("select kd_jns,jns_matkul from jns_matkul ");
		return $data->result_array();
	}

public function delete($tablename,$where){
	$res=$this->db->delete($tablename,$where);
	return $res;
}


}
