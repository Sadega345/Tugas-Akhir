<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a721_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function dosen() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=1 AND kd_prodi="p002"');
 return $data->result_array();
 }

 public function bersangkutan() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=2 AND kd_prodi="p002"');
 return $data->result_array();
 }

 public function depdiknas() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=6 AND kd_prodi="p002"');
 return $data->result_array();
 }

 public function dalamdepdiknas() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=7 AND kd_prodi="p002"');
 return $data->result_array();
 }

 public function luarnegeri() {
 $data=$this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS FROM kegiatan_pkm WHERE KD_JNS=5 AND kd_prodi="p002"');
 return $data->result_array();
 }

 public function update($where="") {
	$data= $this->db->query('SELECT TS_2,TS_1,TS,SUM(TS_2+TS_1+TS) AS JML,KD_JNS,id FROM kegiatan_pkm '.$where);
	return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
 }

 public function jml(){
 	$jml=$this->db->query('Select sum(ts_2) as jmlts2,sum(ts_1) as jmlts1,sum(ts) as jmlts,sum(ts_2+ts_1+ts) as jmltotal from kegiatan_pkm where kd_prodi="p002"');
 	return $jml->result_array();
 }

}
