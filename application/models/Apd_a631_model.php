<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a631_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing1() {
 $ruang1=$this->db->query('select jml_ruang,jml_luas from dt_ruang_dosen where id=1 and kd_prodi="p001"');
 return $ruang1->result_array();
 }

 public function listing2() {
 $ruang2=$this->db->query('select jml_ruang,jml_luas from dt_ruang_dosen where id=2 and kd_prodi="p001"');
 return $ruang2->result_array();
 }

 public function listing3() {
 $ruang3=$this->db->query('select jml_ruang,jml_luas from dt_ruang_dosen where id=3 and kd_prodi="p001"');
 return $ruang3->result_array();
 }

 public function listing4() {
 $ruang4=$this->db->query('select jml_ruang,jml_luas from dt_ruang_dosen where id=4 and kd_prodi="p001"');
 return $ruang4->result_array();
 }

 public function totluas(){
 $totalluas=$this->db->query('select sum(jml_luas) as Tot_Luas from dt_ruang_dosen where kd_prodi="p001"');
 return $totalluas->result_array();
 }

}
