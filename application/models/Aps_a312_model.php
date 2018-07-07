<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a312_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT dy_tampung,jc_mhs_ikt_seleksi,jc_mhs_lls_seleksi,j_maba_nonreg,j_maba_trf,j_tot_nonreg,j_tot_trf,id FROM DATA_MHS WHERE id_prodi="p002" and kd_prog=2
ORDER BY tahun;');
 return $data->result_array();
 }

 public function jml_tampung(){
 	$data=$this->db->query('SELECT sum(dy_tampung) as jml_tampung FROM DATA_MHS WHERE id_prodi="p002" and kd_prog=2;');
 	return $data->result_array();
 }

 public function jml_ikutseleksi(){
 	$data=$this->db->query('SELECT sum(jc_mhs_ikt_seleksi) as jml_ikutseleksi FROM DATA_MHS WHERE id_prodi="p002" and kd_prog=2;');
 	return $data->result_array();
 }

  public function jml_lulusseleksi(){
 	$data=$this->db->query('SELECT sum(jc_mhs_lls_seleksi) as jml_lulusseleksi FROM DATA_MHS WHERE id_prodi="p002" and kd_prog=2;');
 	return $data->result_array();
 }

  public function j_maba_nonreg(){
 	$data=$this->db->query('SELECT sum(j_maba_nonreg) as j_maba_nonreg FROM DATA_MHS WHERE id_prodi="p002" and kd_prog=2;');
 	return $data->result_array();
 }

   public function j_maba_trf(){
 	$data=$this->db->query('SELECT sum(j_maba_trf) as j_maba_trf FROM DATA_MHS WHERE id_prodi="p002" and kd_prog=2;');
 	return $data->result_array();
 }

  public function j_tot_nonreg(){
 	$data=$this->db->query('SELECT sum(j_tot_nonreg) as j_tot_nonreg FROM DATA_MHS WHERE id_prodi="p002" and kd_prog=2;');
 	return $data->result_array();
 }

  public function j_tot_trf(){
 	$data=$this->db->query('SELECT sum(j_tot_trf) as j_tot_trf FROM DATA_MHS WHERE id_prodi="p002" and kd_prog=2;');
 	return $data->result_array();
 }

 


}
