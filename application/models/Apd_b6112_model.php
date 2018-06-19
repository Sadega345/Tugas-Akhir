<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b6112_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing1() {
 $dana1=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jumlah1 from penggunaan_dana where id=1 and kd_prodi="p001"');
 return $dana1->result_array();
 }

 public function listing2() {
 $dana2=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jumlah2 from penggunaan_dana where id=2 and kd_prodi="p001"');
 return $dana2->result_array();
 }

 public function listing3() {
 $dana3=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jumlah3 from penggunaan_dana where id=3 and kd_prodi="p001"');
 return $dana3->result_array();
 }

 public function listing4() {
 $dana4=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jumlah4 from penggunaan_dana where id=4 and kd_prodi="p001"');
 return $dana4->result_array();
 }

 public function listing5() {
 $dana5=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jumlah5 from penggunaan_dana where id=5 and kd_prodi="p001"');
 return $dana5->result_array();
 }

 public function listing6() {
 $dana6=$this->db->query('select ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jumlah6 from penggunaan_dana where id=6 and kd_prodi="p001"');
 return $dana6->result_array();
 }

 public function jmldanaopr() {
 $jmldanaopr=$this->db->query('select sum(p.ts_2) as jmlopr2,sum(p.ts_1) as jmlopr1,sum(p.ts) as jmlopr,sum(p.ts_2+p.ts_1+p.ts) as totalopr FROM penggunaan_dana p INNER JOIN jns_penggunaan j on p.kd_jns=j.kd_jns where j.status_dana="OPR" and p.kd_prodi="p001"');
 return $jmldanaopr->result_array();
 }

 public function jmldanainv(){
 $jmldanainv=$this->db->query('select sum(p.ts_2) as jmlinv2,sum(p.ts_1) as jmlinv1,sum(p.ts) as jmlinv,sum(p.ts_2+p.ts_1+p.ts) as totalinv FROM penggunaan_dana p INNER JOIN jns_penggunaan j on p.kd_jns=j.kd_jns where j.status_dana="INV" and p.kd_prodi="p001"');
 return $jmldanainv->result_array();
 }

 public function jmldanagab(){
 $jmldanagab=$this->db->query('select sum(p.ts_2) as jmlgab2,sum(p.ts_1) as jmlgab1,sum(p.ts) as jmlgab,sum(p.ts_2+p.ts_1+p.ts) as totalgab FROM penggunaan_dana p INNER JOIN jns_penggunaan j on p.kd_jns=j.kd_jns where p.kd_prodi="p001"');
 return $jmldanagab->result_array();
 }

}
