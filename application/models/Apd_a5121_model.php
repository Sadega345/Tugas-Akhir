<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a5121_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT smt,kode_mk,nama_mk,sks_kuliah,sks_praktek,sks_inti,sks_institusi,bobot_tgs,deskripsi,silabus,sap,penyelenggara FROM struktur_kurikulum WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totkuliah() {
 $data=$this->db->query('SELECT SUM(sks_kuliah)AS bobot_kuliah FROM struktur_kurikulum WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totpraktikum() {
 $data=$this->db->query('SELECT SUM(sks_praktek)AS bobot_praktikum FROM struktur_kurikulum WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function tottugas() {
 $data=$this->db->query('SELECT COUNT(IF(bobot_tgs LIKE "v%",bobot_tgs,NULL)) AS jml_tugas FROM struktur_kurikulum WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totskripsi() {
 $data=$this->db->query('SELECT COUNT(IF(deskripsi LIKE "v%",deskripsi,NULL)) AS jml_skripsi FROM struktur_kurikulum WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totsilabus() {
 $data=$this->db->query('SELECT COUNT(IF(silabus LIKE "v%",silabus,NULL)) AS jml_silabus FROM struktur_kurikulum WHERE kd_prodi="p001"');
 return $data->result_array();
 }

 public function totsap() {
 $data=$this->db->query('SELECT COUNT(IF(SAP LIKE "v%",SAP,NULL)) AS jml_sap FROM struktur_kurikulum WHERE kd_prodi="p001"');
 return $data->result_array();
 }

}
