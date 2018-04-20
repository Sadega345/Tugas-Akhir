<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a461_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT s3,s2,s1,d4,d3,d2,d1,sma,unit_kerja FROM tenaga_kepend WHERE kode_prodi="p001" ORDER BY kd_jns');
 return $data->result_array();
 }

 public function tots3() {
 $data=$this->db->query('select sum(s3)as tots3 from tenaga_kepend where kode_prodi="p001"');
 return $data->result_array();
 }

 public function tots2() {
 $data=$this->db->query('select sum(s2)as tots2 from tenaga_kepend where kode_prodi="p001"');
 return $data->result_array();
 }

 public function tots1() {
 $data=$this->db->query('select sum(s1)as tots1 from tenaga_kepend where kode_prodi="p001"');
 return $data->result_array();
 }

 public function totd4() {
 $data=$this->db->query('select sum(d4)as totd4 from tenaga_kepend where kode_prodi="p001"');
 return $data->result_array();
 }

 public function totd3() {
 $data=$this->db->query('select sum(d3)as totd3 from tenaga_kepend where kode_prodi="p001"');
 return $data->result_array();
 }

 public function totd2() {
 $data=$this->db->query('select sum(d2)as totd2 from tenaga_kepend where kode_prodi="p001"');
 return $data->result_array();
 }

 public function totd1() {
 $data=$this->db->query('select sum(d1)as totd1 from tenaga_kepend where kode_prodi="p001"');
 return $data->result_array();
 }

 public function totsma() {
 $data=$this->db->query('select sum(sma)as totsma from tenaga_kepend where kode_prodi="p001"');
 return $data->result_array();
 }

}
