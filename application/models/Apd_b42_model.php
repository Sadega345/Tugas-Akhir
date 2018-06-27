<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b42_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function getdata() {
 $data=$this->db->query('select jns_tng_kepend,s3,s2,s1,d4,d3,d2,d1,sma,unit_kerja from tenaga_kepend where kode_prodi="p001" order by kd_jns');
 return $data->result_array();
 }

 public function gettotal(){
 $total=$this->db->query('select sum(s3) as totals3,sum(s2) as totals2,sum(s1) as totals1,sum(D4) as totald4,sum(D3) as totald3,sum(D2) as totald2,sum(D1) as totald1,sum(SMA) as totalsma from tenaga_kepend where kode_prodi="p001"');
 return $total->result_array();
 }

}
