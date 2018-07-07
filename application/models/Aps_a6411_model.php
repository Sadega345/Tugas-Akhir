<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6411_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 	$data=$this->db->query('select jenis_pustaka,jml_judul,jml_copy from pustaka where kd_prodi="P002" order by kd_jns;
'); 
 	return $data->result_array(); 
 }

 public function total(){
 	$total=$this->db->query('select sum(jml_judul) as total_judul,sum(jml_copy) as total_copy from pustaka where kd_prodi="P002"');
 	return $total->result_array();
 }

}
