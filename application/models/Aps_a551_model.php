<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a551_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT d.nama_dosen,p.jml_mhs,p.id FROM pembimbing_skripsi p INNER JOIN dosen_tbl d ON p.id_dosen=d.id_dosen WHERE p.kd_prodi='."'$kdprodi'");
 	return $data->result_array();
 }

	public function avg(){
		$kdprodi = $this->session->userdata('kd_prodi');
		$avg=$this->db->query('select avg(p.jml_mhs) as avg from pembimbing_skripsi p inner join dosen_tbl d on p.id_dosen=d.id_dosen where p.kd_prodi='."'$kdprodi'");
		return $avg->result_array();
	}

	 public function update($where="") {
		 $data= $this->db->query('SELECT d.nama_dosen,p.jml_mhs,p.id FROM pembimbing_skripsi p INNER JOIN dosen_tbl d ON p.id_dosen=d.id_dosen '.$where);
		 return $data->result_array();
 	 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

	public function GetDosen(){
		$kdprodi = $this->session->userdata('kd_prodi');
		$data=$this->db->query("select id_dosen, nama_dosen from dosen_tbl where kd_prodi="."'kdprodi'");
		return $data->result_array();
	}

	public function delete($tablename,$where){
	$res=$this->db->delete($tablename,$where);
	return $res;
	}
}
