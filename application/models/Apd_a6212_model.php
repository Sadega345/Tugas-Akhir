<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a6212_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing1() {
 $data1=$this->db->query('select ts_2,ts_1,ts from penggunaan_dana where kd_jns=1 and kd_prodi="p001"');
 return $data1->result_array();
 }

 public function listing2() {
 $data2=$this->db->query('select ts_2,ts_1,ts from penggunaan_dana where kd_jns=2 and kd_prodi="p001"');
 return $data2->result_array();
 }

 public function listing3() {
 $data3=$this->db->query('select ts_2,ts_1,ts from penggunaan_dana where kd_jns=3 and kd_prodi="p001"');
 return $data3->result_array();
 }

 public function listing4() {
 $data4=$this->db->query('select ts_2,ts_1,ts from penggunaan_dana where kd_jns=4 and kd_prodi="p001"');
 return $data4->result_array();
 }

 public function listing5() {
 $data5=$this->db->query('select ts_2,ts_1,ts from penggunaan_dana where kd_jns=5 and kd_prodi="p001"');
 return $data5->result_array();
 }

 public function listing6() {
 $data6=$this->db->query('select ts_2,ts_1,ts from penggunaan_dana where kd_jns=6 and kd_prodi="p001"');
 return $data6->result_array();
 }

 public function listing7() {
 $data7=$this->db->query('select ts_2,ts_1,ts from penggunaan_dana where kd_jns=7 and kd_prodi="p001"');
 return $data7->result_array();
 }

 public function jmlopr2() {
 $data=$this->db->query('SELECT SUM(P.TS_2) as jmlopr2 FROM penggunaan_dana P INNER JOIN JNS_PENGGUNAAN J ON J.kd_jns=P.kd_jns WHERE J.status_dana="OPR" AND P.kd_prodi="p001"');
 return $data->result_array();
 }

 public function jmlopr1() {
 $data=$this->db->query('SELECT SUM(P.TS_1) as jmlopr1 FROM penggunaan_dana P INNER JOIN JNS_PENGGUNAAN J ON J.kd_jns=P.kd_jns WHERE J.status_dana="OPR" AND P.kd_prodi="p001"');
 return $data->result_array();
 }

 public function jmlopr() {
 $data=$this->db->query('SELECT SUM(P.TS) as jmlopr FROM penggunaan_dana P INNER JOIN JNS_PENGGUNAAN J ON J.kd_jns=P.kd_jns WHERE J.status_dana="OPR" AND P.kd_prodi="p001"');
 return $data->result_array();
 }

 public function jmlinv2() {
 $data=$this->db->query('SELECT SUM(P.TS_2) as jmlinv2 FROM penggunaan_dana P INNER JOIN JNS_PENGGUNAAN J ON J.kd_jns=P.kd_jns WHERE J.status_dana="INV" AND P.kd_prodi="p001"');
 return $data->result_array();
 }

 public function jmlinv1() {
 $data=$this->db->query('SELECT SUM(P.TS_1) as jmlinv1 FROM penggunaan_dana P INNER JOIN JNS_PENGGUNAAN J ON J.kd_jns=P.kd_jns WHERE J.status_dana="INV" AND P.kd_prodi="p001"');
 return $data->result_array();
 }

 public function jmlinv() {
 $data=$this->db->query('SELECT SUM(P.TS) as jmlinv FROM penggunaan_dana P INNER JOIN JNS_PENGGUNAAN J ON J.kd_jns=P.kd_jns WHERE J.status_dana="INV" AND P.kd_prodi="p001"');
 return $data->result_array();
 }

 public function jmloprinv2() {
 $data=$this->db->query('SELECT SUM(P.TS_2) as jmloprinv2 FROM penggunaan_dana P INNER JOIN JNS_PENGGUNAAN J ON J.kd_jns=P.kd_jns WHERE P.kd_prodi="p001"');
 return $data->result_array();
 }

 public function jmloprinv1() {
 $data=$this->db->query('SELECT SUM(P.TS_1) as jmloprinv1 FROM penggunaan_dana P INNER JOIN JNS_PENGGUNAAN J ON J.kd_jns=P.kd_jns WHERE P.kd_prodi="p001"');
 return $data->result_array();
 }

 public function jmloprinv() {
 $data=$this->db->query('SELECT SUM(P.TS) as jmloprinv FROM penggunaan_dana P INNER JOIN JNS_PENGGUNAAN J ON J.kd_jns=P.kd_jns WHERE P.kd_prodi="p001"');
 return $data->result_array();
 }

 public function jmlmhs2() {
 $data=$this->db->query('select j_tot_reg_bkn_trf as jmlmhs2 from data_mhs where tahun="2014"');
 return $data->result_array();
 }

 public function jmlmhs1() {
 $data=$this->db->query('select j_tot_reg_bkn_trf as jmlmhs1 from data_mhs where tahun="2015"');
 return $data->result_array();
 }

public function jmlmhs() {
 $data=$this->db->query('select j_tot_reg_bkn_trf as jmlmhs from data_mhs where tahun="2016"');
 return $data->result_array();
 }

}
