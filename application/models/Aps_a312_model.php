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
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT dy_tampung,jc_mhs_ikt_seleksi,jc_mhs_lls_seleksi,j_maba_nonreg,j_maba_trf,j_tot_nonreg,j_tot_trf,id FROM DATA_MHS WHERE id_prodi='."'$kdprodi'".' and kd_prog=2
ORDER BY tahun;');
 return $data->result_array();
 }

 public function jml_tampung(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT sum(dy_tampung) as jml_tampung FROM DATA_MHS WHERE id_prodi='."'$kdprodi'".' and kd_prog=2;');
 	return $data->result_array();
 }

 public function jml_ikutseleksi(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT sum(jc_mhs_ikt_seleksi) as jml_ikutseleksi FROM DATA_MHS WHERE id_prodi='."'$kdprodi'".' and kd_prog=2;');
 	return $data->result_array();
 }

  public function jml_lulusseleksi(){
  	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT sum(jc_mhs_lls_seleksi) as jml_lulusseleksi FROM DATA_MHS WHERE id_prodi='."'$kdprodi'".' and kd_prog=2;');
 	return $data->result_array();
 }

  public function j_maba_nonreg(){
  	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT sum(j_maba_nonreg) as j_maba_nonreg FROM DATA_MHS WHERE id_prodi='."'$kdprodi'".' and kd_prog=2;');
 	return $data->result_array();
 }

   public function j_maba_trf(){
   	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT sum(j_maba_trf) as j_maba_trf FROM DATA_MHS WHERE id_prodi='."'$kdprodi'".' and kd_prog=2;');
 	return $data->result_array();
 }

  public function j_tot_nonreg(){
  	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT sum(j_tot_nonreg) as j_tot_nonreg FROM DATA_MHS WHERE id_prodi='."'$kdprodi'".' and kd_prog=2;');
 	return $data->result_array();
 }

  public function j_tot_trf(){
  	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT sum(j_tot_trf) as j_tot_trf FROM DATA_MHS WHERE id_prodi='."'$kdprodi'".' and kd_prog=2;');
 	return $data->result_array();
 }

public function update($where=""){
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT dy_tampung,jc_mhs_ikt_seleksi,jc_mhs_lls_seleksi,j_maba_nonreg,j_maba_trf,j_tot_nonreg,j_tot_trf,id FROM DATA_MHS WHERE id='.$where);
 return $data->result_array();
}

public function ubah($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
}

 


}
