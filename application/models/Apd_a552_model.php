<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a552_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('select d.nama_dosen,p.jml_mhs from pembimbing_skripsi p inner join dosen_tbl d on p.id_dosen=d.id_dosen where p.kd_prodi="p001"');
 return $data->result_array();
 }

 public function totmahasiswa() {
 $data=$this->db->query('select sum(p.jml_mhs)as jum_mhs from pembimbing_skripsi p inner join dosen_tbl d on p.id_dosen=d.id_dosen where p.kd_prodi="p001"');
 return $data->result_array();
 }

}
