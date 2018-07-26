<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a641_model extends CI_Model {

private $db2 ;

public function __construct()
{
 	parent::__construct();
	// $this->db2 = $this->load->database('db_dosen',TRUE);
}

 // Kalau si db 2 di aktifin database yg default nggk akan jalan,klw db 2 di matiin db yg default jalan

// Listing
 public function listing1() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $pustaka1=$this->db->query('SELECT jml_judul,jml_copy,id,jenis_pustaka FROM pustaka WHERE kd_prodi='."'$kdprodi'");
 return $pustaka1->result_array();
 }

 public function loadlisting1() {
 	
 $kdprodi = $this->session->userdata('kd_prodi');
 $pustaka1= $this->db2->query('SELECT jml_judul,jml_copy,id,jenis_pustaka FROM pustaka WHERE kd_prodi='."'$kdprodi'");

 return $pustaka1->result_array();
 }

 public function update($where="") {
	 $data= $this->db->query('SELECT jml_judul,jml_copy,id,jenis_pustaka FROM pustaka '.$where);
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

 public function totjudul() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(jml_judul)AS Tot_judul FROM pustaka WHERE KD_PRODI='."'$kdprodi'");
 return $data->result_array();
 }

 public function totkopi() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(jml_copy)AS Tot_Kopi FROM pustaka WHERE KD_PRODI='."'$kdprodi'");
 return $data->result_array();
 }

 public function loadtotjudul() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 // $db2 = $this->load->database('db_dosen',TRUE);
 $data=$this->db2->query('SELECT SUM(jml_judul)AS Tot_judul FROM pustaka WHERE KD_PRODI='."'$kdprodi'");
 return $data->result_array();
 }

 public function loadtotkopi() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 // $db2 = $this->load->database('db_dosen',TRUE);
 $data=$this->db2->query('SELECT SUM(jml_copy)AS Tot_Kopi FROM pustaka WHERE KD_PRODI='."'$kdprodi'");
 return $data->result_array();
 }

}
