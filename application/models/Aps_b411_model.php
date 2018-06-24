<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b411_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function GetProdi() {
 $prodi=$this->db->query('SELECT CONCAT(p.prodi," ",p.jurusan) AS prodi FROM sdm s INNER JOIN prodi_tbl p ON s.kd_prodi=p.kode_prodi;');
 return $prodi->result_array();
 }

 public function listing1() {
 $data1=$this->db->query('SELECT total,jml FROM sdm WHERE kd_hal=1 AND kd_prodi="p001"');
 return $data1->result_array();
 }

 public function listing2() {
 $data2=$this->db->query('SELECT total,jml FROM sdm WHERE kd_hal=2 AND kd_prodi="p001"');
 return $data2->result_array();
 }

public function listing3() {
 $data3=$this->db->query('SELECT total,jml FROM sdm WHERE kd_hal=3 AND kd_prodi="p001"');
 return $data3->result_array();
 }

 public function listing4() {
 $data4=$this->db->query('SELECT total,jml FROM sdm WHERE kd_hal=4 AND kd_prodi="p001"');
 return $data4->result_array();
 }
}
