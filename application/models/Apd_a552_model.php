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
		 $data=$this->db->query('SELECT d.nama_dosen,p.jml_mhs,p.id FROM pembimbing_skripsi p inner join dosen_tbl d on p.id_dosen=d.id_dosen WHERE p.kd_prodi='."'$kdprodi'");
		 return $data->result_array();
	 }

	 public function PembingbingSkripsi() {
	 	
		 $data=$this->db->query('SELECT id FROM pembimbing_skripsi');
		 return $data->result_array();
	 }

	 public function dosen() {
	 	$kdprodi = $this->session->userdata('kd_prodi');
		 $data=$this->db->query('SELECT id_dosen,nama_dosen FROM dosen_tbl where kd_prodi='."'$kdprodi'");
		 return $data->result_array();
	 }

	 public function insert($tablename,$data){
		$res=$this->db->insert($tablename,$data);
		return $res;
	}

	public function update($where="") {
	 $data= $this->db->query('SELECT d.nama_dosen,p.jml_mhs,p.id FROM pembimbing_skripsi p inner join dosen_tbl d on p.id_dosen=d.id_dosen '.$where);
	 return $data->result_array();
	}

	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

	 public function totmahasiswa() {
	 	$kdprodi = $this->session->userdata('kd_prodi');
		 $data=$this->db->query('select sum(p.jml_mhs)as jum_mhs from pembimbing_skripsi p inner join dosen_tbl d on p.id_dosen=d.id_dosen where p.kd_prodi='."'$kdprodi'");
		 return $data->result_array();
	 }

}
