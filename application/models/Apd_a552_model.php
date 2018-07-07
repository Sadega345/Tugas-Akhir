<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a552_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
	 public function listing() {
	 	$kdprodi = $this->session->userdata('kd_prodi');
		 $data=$this->db->query('SELECT nama_dosen, jml_mhs,id FROM pembimbing_skripsi  WHERE kd_prodi='."'$kdprodi'");
		 return $data->result_array();
	 }

	 public function dosen() {
		 $data=$this->db->query('SELECT nama_dosen FROM dosen_tbl ');
		 return $data->result_array();
	 }

	 public function insert($tablename,$data){
		$res=$this->db->insert($tablename,$data);
		return $res;
	}

	public function update($where="") {
	 $data= $this->db->query('SELECT nama_dosen, jml_mhs,id FROM pembimbing_skripsi '.$where);
	 return $data->result_array();
	}

	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

	 public function totmahasiswa() {
	 	$kdprodi = $this->session->userdata('kd_prodi');
		 $data=$this->db->query('select sum(p.jml_mhs)as jum_mhs from pembimbing_skripsi p inner join dosen_tbl d on p.nama_dosen=d.id_dosen where p.kd_prodi='."'$kdprodi'");
		 return $data->result_array();
	 }

}
