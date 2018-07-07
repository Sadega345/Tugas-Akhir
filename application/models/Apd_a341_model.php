<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a341_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT sangat_baik,baik,cukup,kurang,rencana,jenis_kemampuan,id FROM evaluasi_lulusan WHERE id_prodi='."'$kdprodi'".'ORDER BY id_kemampuan');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT sangat_baik,baik,cukup,kurang,rencana,jenis_kemampuan,id FROM evaluasi_lulusan '.$where);
 return $data->result_array();
 }

public function rubah($tablename,$data,$where){
$res=$this->db->update($tablename,$data,$where);
return $res;
}

public function updatewaktu($where="") {
	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT waktu,id_prodi FROM wkt_tunggu_llsn '.$where.'and id_prodi='."'$kdprodi'");
 return $data->result_array();
 }

public function updatepersen($where="") {
	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT id,persen,id_prodi FROM persentase_llsn '.$where.'and id_prodi='."'$kdprodi'");
 return $data->result_array();
 }
 
 public function sangatbaik() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT SUM(sangat_baik)AS Sangat_baik FROM evaluasi_lulusan WHERE id_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function baik() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT SUM(baik)AS Baik FROM evaluasi_lulusan WHERE id_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function cukup() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT SUM(cukup)AS Cukup FROM evaluasi_lulusan WHERE id_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function kurang() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT SUM(kurang)AS Kurang FROM evaluasi_lulusan WHERE id_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function waktu() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT id,waktu,id_prodi FROM wkt_tunggu_llsn WHERE id_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function persen() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT id,id_prodi,persen FROM persentase_llsn WHERE id_prodi='."'$kdprodi'");
 return $data->result_array();
 }

}
