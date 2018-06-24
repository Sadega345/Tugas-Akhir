<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a6211_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing1() {
 $dana1=$this->db->query('SELECT ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as total1 FROM perolehan_dana WHERE id=1 and kd_prodi="p001"');
 return $dana1->result_array();
 }

 public function listing2() {
 $dana2=$this->db->query('SELECT ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as total2 FROM perolehan_dana WHERE id=2 and kd_prodi="p001"');
 return $dana2->result_array();
 }

 public function listing3() {
 $dana3=$this->db->query('SELECT ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as total3 FROM perolehan_dana WHERE id=3 and kd_prodi="p001"');
 return $dana3->result_array();
 }

 public function jml1() {
 $jml1=$this->db->query('SELECT sum(ts_2) as jum2,sum(ts_1) as jum1,sum(ts) as jum,sum(ts_2+ts_1+ts) as totals1 FROM perolehan_dana WHERE id_dana=1 and kd_prodi="p001"');
 return $jml1->result_array();
 }

 public function listing4() {
 $dana4=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as total4 from perolehan_dana where id=4 and kd_prodi="p001"');
 return $dana4->result_array();
 }

 public function listing5() {
 $dana5=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as total5 from perolehan_dana where id=5 and kd_prodi="p001"');
 return $dana5->result_array();
 }

 public function listing6() {
 $dana6=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as total6 from perolehan_dana where id=6 and kd_prodi="p001"');
 return $dana6->result_array();
 }

 public function jml2() {
 $jml2=$this->db->query('select sum(ts_2) as jml2,sum(ts_1) as jml1,sum(ts) as jml,sum(ts_2+ts_1+ts) as totals2 from perolehan_dana where id_dana=2 and kd_prodi="p001"');
 return $jml2->result_array();
 }

 public function listing7() {
 $dana7=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as total7 from perolehan_dana where id=7 and kd_prodi="p001"');
 return $dana7->result_array();
 }

 public function listing8() {
 $dana8=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as total8 from perolehan_dana where id=8 and kd_prodi="p001"');
 return $dana8->result_array();
 }

 public function listing9() {
 $dana9=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as total9 from perolehan_dana where id=9 and kd_prodi="p001"');
 return $dana9->result_array();
 }

 public function jml4() {
 $jml4=$this->db->query('select sum(ts_2) as jumlah2,sum(ts_1) as jumlah1,sum(ts) as jumlah,sum(ts_2+ts_1+ts) as totals4 from perolehan_dana where id_dana=4 and kd_prodi="p001"');
 return $jml4->result_array();
 }

 public function total() {
 $total=$this->db->query('select sum(ts_2) as total1,sum(ts_1) as total2,sum(ts) as total3,sum(ts_2+ts_1+ts) as totals from perolehan_dana where kd_prodi="p001"');
 return $total->result_array();
 }
}
