<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a311_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
  public function listing() {
 $data= $this->db->query('SELECT dy_tampung,jc_mhs_ikt_seleksi,jc_mhs_lls_seleksi,j_maba_reg_bkn_trf,j_maba_trf,j_tot_reg_bkn_trf,j_tot_trf,
j_llsn_reg_bkn_trf,j_llsn_trf,ipk_min,ipk_rat,ipk_mak,PRSN_IPK1,PRSN_IPK2,PRSN_IPK3,id FROM DATA_MHS WHERE kd_prog=1 and id_prodi="p002"
ORDER BY tahun
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
 	$data= $this->db->query('SELECT SUM(dy_tampung)AS Daya_Tampung FROM data_mhs');
 	return $data->result_array();
 }

 public function iseleksi(){
 	$data= $this->db->query('select sum(jc_mhs_ikt_seleksi)as Ikut_seleksi from data_mhs');
 	return $data->result_array();
 }

 public function barutransfer(){
 	$data= $this->db->query('SELECT SUM(j_maba_trf)AS Baru_transfer FROM data_mhs');
 	return $data->result_array();
 }

 public function totbukantransfer(){
 	$data= $this->db->query('SELECT SUM(j_tot_reg_bkn_trf)AS Tot_BukanTransfer FROM data_mhs');
 	return $data->result_array();
 }

 public function tottransfer(){
 	$data= $this->db->query('SELECT SUM(j_tot_trf)AS Tot_transfer FROM data_mhs');
 	return $data->result_array();
 }

 public function lulusanregbukantransfer(){
 	$data= $this->db->query('SELECT SUM(j_llsn_reg_bkn_trf)AS Lulusan_RegBukanTransfer FROM data_mhs');
 	return $data->result_array();
 }

 public function jumlulusantransfer(){
 	$data= $this->db->query('SELECT SUM(j_llsn_trf)AS Jumlah_LulusanTransfer FROM data_mhs');
 	return $data->result_array();
 }

 public function rata(){
 	$rata=$this->db->query('select round(sum((ipk_rat*j_llsn_reg_bkn_trf)/(select sum(j_llsn_reg_bkn_trf)from data_mhs where id_prodi="p001" and tahun BETWEEN "2012" and "2016" )),2) as rata from data_mhs where id_prodi="p001" and tahun BETWEEN "2012" and "2016";');
 	return $rata->result_array();
 }

}
