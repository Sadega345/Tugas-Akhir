<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a721_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function dosen() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=1 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function bersangkutan() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=2 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function kemristekdikti() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=3 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function luarkemristekdikti() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=4 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function luarnegeri() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=5 AND kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function update($where="") {
	$data= $this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm '.$where);
	return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
 }

 public function jml(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$jml=$this->db->query('Select sum(ts_2) as jmlts2,sum(ts_1) as jmlts1,sum(ts) as jmlts,sum(ts_2+ts_1+ts) as jmltotal from kegiatan_pkm where kd_prodi='."'$kdprodi'");
 	return $jml->result_array();
 }

}
