<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a652_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 // public function listing() {
 // $this->db->select('*');
 // $this->db->from('apd_a652');
 // $query = $this->db->get();
 // return $query->result();
 // }

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
