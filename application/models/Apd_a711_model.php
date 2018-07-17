<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a711_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
public function listing1() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT sumber_pembiayaan,ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jml from penelitian_dosen where kd_prodi='."'$kdprodi'".' and kd_jns=1;');
 return $data->result_array();
 }

 public function listing2() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT sumber_pembiayaan,ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jml from penelitian_dosen where kd_prodi='."'$kdprodi'".' and kd_jns=2;');
 return $data->result_array();
 }

 public function listing3() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT sumber_pembiayaan,ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jml from penelitian_dosen where kd_prodi='."'$kdprodi'".' and kd_jns=3;');
 return $data->result_array();
 }

 public function listing4() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT sumber_pembiayaan,ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jml from penelitian_dosen where kd_prodi='."'$kdprodi'".' and kd_jns=4;');
 return $data->result_array();
 }

 public function listing5() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT sumber_pembiayaan,ts_2,ts_1,ts,sum(ts_2+ts_1+ts) as jml from penelitian_dosen where kd_prodi='."'$kdprodi'".' and kd_jns=5;');
 return $data->result_array();
 }

 public function totTs2() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(TS_2)AS TS_2 FROM penelitian_dosen WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totTs1() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(TS_1)AS TS_1 FROM penelitian_dosen WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }
 
 public function totTs() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT SUM(TS)AS TS FROM penelitian_dosen WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function jml(){
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT sum(ts_2+ts_1+ts) as jml from penelitian_dosen WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

}
