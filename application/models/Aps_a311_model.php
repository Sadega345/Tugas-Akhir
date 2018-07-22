<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a311_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
  public function listing() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT dy_tampung,jc_mhs_ikt_seleksi,jc_mhs_lls_seleksi,j_maba_reg_bkn_trf,j_maba_trf,j_tot_reg_bkn_trf,j_tot_trf,
j_llsn_reg_bkn_trf,j_llsn_trf,ipk_min,ipk_rat,ipk_mak,PRSN_IPK1,PRSN_IPK2,PRSN_IPK3,id FROM DATA_MHS WHERE kd_prog=1 and id_prodi='."'$kdprodi'".'ORDER BY id_ts;
');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT dy_tampung,jc_mhs_ikt_seleksi,jc_mhs_lls_seleksi,j_maba_reg_bkn_trf,j_maba_trf,j_tot_reg_bkn_trf,j_tot_trf,
j_llsn_reg_bkn_trf,j_llsn_trf,ipk_min,ipk_rat,ipk_mak,PRSN_IPK1,PRSN_IPK2,PRSN_IPK3,id FROM DATA_MHS '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 public function insert($tablename,$data){
	$res=$this->db->insert($tablename,$data);
	return $res;
 }

 public function jumdtampung(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data= $this->db->query('SELECT SUM(dy_tampung)AS Daya_Tampung FROM data_mhs WHERE kd_prog=1 and id_prodi='."'$kdprodi'");
 	return $data->result_array();
 }

 public function iseleksi(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data= $this->db->query('select sum(jc_mhs_ikt_seleksi)as Ikut_seleksi from data_mhs WHERE kd_prog=1 and id_prodi='."'$kdprodi'");
 	return $data->result_array();
 }

 public function llsseleksi(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data= $this->db->query('select sum(jc_mhs_lls_seleksi)as llsseleksi from data_mhs WHERE kd_prog=1 and id_prodi='."'$kdprodi'" );
 	return $data->result_array();
 }

 public function barubkntransfer(){
	$kdprodi = $this->session->userdata('kd_prodi');
 	$data= $this->db->query('SELECT SUM(j_maba_reg_bkn_trf)AS barubkntransfer FROM data_mhs WHERE kd_prog=1 and id_prodi='."'$kdprodi'");
 	return $data->result_array();

}

public function barutransfer(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data= $this->db->query('SELECT SUM(j_maba_trf)AS Baru_transfer FROM data_mhs WHERE kd_prog=1 and id_prodi='."'$kdprodi'");
 	return $data->result_array();
 }

  public function totbukantransfer(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data= $this->db->query('SELECT SUM(j_tot_reg_bkn_trf)AS Tot_BukanTransfer FROM data_mhs WHERE kd_prog=1 and id_prodi='."'$kdprodi'" );
 	return $data->result_array();
 }

  public function tottransfer(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data= $this->db->query('SELECT SUM(j_tot_trf)AS Tot_transfer FROM data_mhs WHERE kd_prog=1 and id_prodi='."'$kdprodi'");
 	return $data->result_array();
 }

 public function lulusanregbukantransfer(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data= $this->db->query('SELECT SUM(j_llsn_reg_bkn_trf)AS Lulusan_RegBukanTransfer FROM data_mhs WHERE kd_prog=1 and id_prodi='."'$kdprodi'");
 	return $data->result_array();
 }

 public function jumlulusantransfer(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data= $this->db->query('SELECT SUM(j_llsn_trf)AS Jumlah_LulusanTransfer FROM data_mhs WHERE kd_prog=1 and id_prodi='."'$kdprodi'");
 	return $data->result_array();
 }
 
 public function rata(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$rata=$this->db->query('select round(sum((ipk_rat*j_llsn_reg_bkn_trf)/(select sum(j_llsn_reg_bkn_trf)from data_mhs where id_prodi='."'$kdprodi'".' and id_ts BETWEEN "1" and "5" )),2) as rata from data_mhs where id_prodi='."'$kdprodi'".' and id_ts BETWEEN "1" and "5";');
 	return $rata->result_array();
 }

}
