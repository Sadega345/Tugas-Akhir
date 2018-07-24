<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a541_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT d.nama_dosen, p.j_mhs_bimbingan,p.rata2_pertemuan,p.Id FROM pembimbing_akd p INNER JOIN
 dosen_tbl d ON p.id_dosen=d.id_dosen WHERE p.kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function update($where="") {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT d.nama_dosen, p.j_mhs_bimbingan,p.rata2_pertemuan,p.Id FROM pembimbing_akd p INNER JOIN
 dosen_tbl d ON p.id_dosen=d.id_dosen WHERE p.kd_prodi='."'$kdprodi'" .$where);

 
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
public function GetDosen(){
		$kdprodi = $this->session->userdata('kd_prodi');
		$data=$this->db->query("select id_dosen, nama_dosen from dosen_tbl where kd_prodi="."'kdprodi'");
		return $data->result_array();
}

 public function totbimbingan() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(j_mhs_bimbingan)AS jum_bimbingan FROM pembimbing_akd WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function ratapertemuan() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT AVG(j_mhs_bimbingan)AS rata_pertemuan FROM pembimbing_akd WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function delete($tablename,$where){
	$res=$this->db->delete($tablename,$where);
	return $res;
}

}
