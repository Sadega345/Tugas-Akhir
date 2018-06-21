<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b642_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
public function listing1() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=1 and kd_prodi="p001"');
return $data->result_array();
}

public function listing2() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=2 and kd_prodi="p001"');
return $data->result_array();
}

public function listing3() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=3 and kd_prodi="p001"');
return $data->result_array();
}

public function listing4() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=4 and kd_prodi="p001"');
return $data->result_array();
}

public function listing5() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=5 and kd_prodi="p001"');
return $data->result_array();
}

public function listing6() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=6 and kd_prodi="p001"');
return $data->result_array();
}

public function listing7() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=7 and kd_prodi="p001"');
return $data->result_array();
}

public function listing8() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=8 and kd_prodi="p001"');
return $data->result_array();
}

public function listing9() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=9 and kd_prodi="p001"');
return $data->result_array();
}

public function listing10() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=10 and kd_prodi="p001"');
return $data->result_array();
}

public function listing11() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=11 and kd_prodi="p001"');
return $data->result_array();
}

public function listing12() {
$data=$this->db->query('select manual,komp_tnp_jar,lan,wan from aksesbilitas_data where id=12 and kd_prodi="p001"');
return $data->result_array();
}

public function totmanual() {
 $data=$this->db->query('SELECT SUM(manual)AS Tot_Manual FROM aksesbilitas_data WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totkomp() {
 $data=$this->db->query('SELECT SUM(komp_tnp_jar)AS Tot_Komp FROM aksesbilitas_data WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totlan() {
 $data=$this->db->query('SELECT SUM(lan)AS Tot_Lan FROM aksesbilitas_data WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totwan() {
 $data=$this->db->query('SELECT COUNT(IF(wan LIKE "v%",WAN,NULL)) AS Tot_Wan FROM aksesbilitas_data WHERE kd_prodi="p001"');
 return $data->result_array();
 }


}
