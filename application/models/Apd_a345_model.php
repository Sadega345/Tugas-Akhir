<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a345_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing4() {

 $data4= $this->db->query('SELECT instansi,j_lulusan_psn,j_lulusan_terima,id,id_ts FROM instansi_lulusan where id_ts=1');
 return $data4->result_array();
 }

 public function jml_wsd4(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 $jml4= $this->db->query('select sum(j_llsn_reg_bkn_trf+j_llsn_trf) as jml_wsd4 from data_mhs where id_prodi='."'$kdprodi'".'and id_ts=1');
 return $jml4->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT instansi,j_lulusan_psn,j_lulusan_terima,id,id_ts FROM instansi_lulusan '.$where);
 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

public function listing3() {
 $data3= $this->db->query('SELECT instansi,j_lulusan_psn,j_lulusan_terima,id,id_ts FROM instansi_lulusan where id_ts=2');
 return $data3->result_array();
 }

 public function jml_wsd3(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 $jml3= $this->db->query('select sum(j_llsn_reg_bkn_trf+j_llsn_trf) as jml_wsd3 from data_mhs where id_prodi='."'$kdprodi'".' and id_ts=2');
 return $jml3->result_array();
 }

 public function listing2() {
 $data2= $this->db->query('SELECT instansi,j_lulusan_psn,j_lulusan_terima,id,id_ts FROM instansi_lulusan where id_ts=3');
 return $data2->result_array();
 }

 public function jml_wsd2(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 $jml2= $this->db->query('select sum(j_llsn_reg_bkn_trf+j_llsn_trf) as jml_wsd2 from data_mhs where id_prodi='."'$kdprodi'".' and id_ts=3;');
 return $jml2->result_array();
 }

 public function listing1() {
 $data1= $this->db->query('SELECT instansi,j_lulusan_psn,j_lulusan_terima,id,id_ts FROM instansi_lulusan where id_ts=4');
 return $data1->result_array();
 }

 public function jml_wsd1(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 $jml1= $this->db->query('select sum(j_llsn_reg_bkn_trf+j_llsn_trf) as jml_wsd1 from data_mhs where id_prodi='."'$kdprodi'".' and id_ts=4;');
 return $jml1->result_array();
 }

public function listing() {
 $data= $this->db->query('SELECT instansi,j_lulusan_psn,j_lulusan_terima,id,id_ts FROM instansi_lulusan where id_ts=5');
 return $data->result_array();
 }

 public function jml_wsd(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 $jml= $this->db->query('select sum(j_llsn_reg_bkn_trf+j_llsn_trf) as jml_wsd from data_mhs where id_prodi='."'$kdprodi'".' and id_ts=5;');
 return $jml->result_array();
 }

 public function jmllulusan_wsd(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$jmllulusan_wsd	= $this->db->query("select sum(j_llsn_reg_bkn_trf+j_llsn_trf) as jmllulusan_wsd from data_mhs where id_prodi="."'$kdprodi'");
 	return $jmllulusan_wsd	->result_array();
 }

 public function jml(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$jml=$this->db->query('select sum(i.j_lulusan_psn) as jmllulusan_psn,sum(i.j_lulusan_terima) as jmllulusan_trm from data_mhs d inner join instansi_lulusan i on i.id_ts=d.id where d.id_prodi='."'$kdprodi'");
 	return $jml->result_array();
 }

public function insert($tablename,$data){
	$res=$this->db->insert($tablename,$data);
	return $res;
}

public function gettahun(){
	$tahun=$this->db->query('select id_ts,tahun from tahun_akd;');
	return $tahun->result_array();

}

public function row1(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$row1=$this->db->query('select COUNT(i.instansi) as row from instansi_lulusan i inner join data_mhs d on i.id_ts=d.id where i.id_ts=1 and d.id_prodi='."'$kdprodi'");
	return $row1->result_array();
}

public function row2(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$row2=$this->db->query('select COUNT(i.instansi) as row from instansi_lulusan i inner join data_mhs d on i.id_ts=d.id where i.id_ts=2 and d.id_prodi='."'$kdprodi'");
	return $row2->result_array();
}

public function row3(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$row3=$this->db->query('select COUNT(i.instansi) as row from instansi_lulusan i inner join data_mhs d on i.id_ts=d.id where i.id_ts=3 and d.id_prodi='."'$kdprodi'");
	return $row3->result_array();
}

public function row4(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$row4=$this->db->query('select COUNT(i.instansi) as row from instansi_lulusan i inner join data_mhs d on i.id_ts=d.id where i.id_ts=4 and d.id_prodi='."'$kdprodi'");
	return $row4->result_array();
}

public function row5(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$row5=$this->db->query('select COUNT(i.instansi) as row from instansi_lulusan i inner join data_mhs d on i.id_ts=d.id where i.id_ts=5 and d.id_prodi='."'$kdprodi'");
	return $row5->result_array();
}

public function delete($tablename,$where){
	$res=$this->db->delete($tablename,$where);
	return $res;
}

}