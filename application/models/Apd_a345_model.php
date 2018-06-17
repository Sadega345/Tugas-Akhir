<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a345_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $data= $this->db->query('SELECT instansi,j_lulusan_psn,j_lulusan_terima FROM instansi_lulusan');
 return $data->result_array();
 }

 public function jmllulusan_wsd(){
 	$data= $this->db->query("select sum(j_llsn_reg_bkn_trf+j_llsn_trf) from data_mhs where id_prodi='p001'");
 	return $data->result_array();
 }

}
