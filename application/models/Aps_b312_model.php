<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b312_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function GetProdi() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $prodi=$this->db->query('Select jurusan from prodi_tbl where kode_prodi='."'$kdprodi'");
 return $prodi->result_array();
 }

 public function total1(){
 $total1=$this->db->query('select sum(d.j_maba_reg_bkn_trf)as total1 from data_mhs d inner join prodi_tbl p on d.id_prodi=p.kode_prodi where d.kd_prog=1 and p.kode_fakultas="F001" and d.tahun="2016"');
 return $total1->result_array();
 }

 public function listing1(){
 $kdprodi = $this->session->userdata('kd_prodi');
 $data1=$this->db->query('select j_maba_reg_bkn_trf,id from data_mhs where kd_prog=1 and id_prodi='."'$kdprodi'".' and tahun="2016"');
 return $data1->result_array();
 }

 public function total2(){
 $total2=$this->db->query('select sum(d.j_maba_trf)as total2 from data_mhs d inner join prodi_tbl p on d.id_prodi=p.kode_prodi where d.kd_prog=1 and p.kode_fakultas="F001" and d.tahun="2016"');
 return $total2->result_array();
 }

 public function listing2(){
  $kdprodi = $this->session->userdata('kd_prodi');
 $data2=$this->db->query('select j_maba_trf,id from data_mhs where kd_prog=1 and id_prodi='."'$kdprodi'".' and tahun="2016"');
 return $data2->result_array();
 }

 public function total3(){
 $total3=$this->db->query('select sum(d.j_tot_reg_bkn_trf)as total3 from data_mhs d inner join prodi_tbl p on d.id_prodi=p.kode_prodi where d.kd_prog=1 and p.kode_fakultas="F001" and d.tahun="2016"');
 return $total3->result_array();
 }

 public function listing3(){
 $kdprodi = $this->session->userdata('kd_prodi');
 $data3=$this->db->query('select j_tot_reg_bkn_trf,id from data_mhs where kd_prog=1 and id_prodi='."'$kdprodi'".' and tahun="2016"');
 return $data3->result_array();
 }
 public function update($where="") {
 $data= $this->db->query('select j_maba_reg_bkn_trf,id,j_maba_trf,j_maba_reg_bkn_trf,j_tot_reg_bkn_trf from data_mhs '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
 }

public function totalnonreg1(){
$totalnonreg1=$this->db->query('select sum(d.j_maba_reg_bkn_trf)as totalnonreg1 from data_mhs d inner join prodi_tbl p on d.id_prodi=p.kode_prodi where d.kd_prog=2 and p.kode_fakultas="F001" and d.tahun="2016"');
 return $totalnonreg1->result_array();
}

public function listnonreg1(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$listnonreg1=$this->db->query('select j_tot_reg_bkn_trf,id from data_mhs where kd_prog=2 and id_prodi='."'$kdprodi'".' and tahun="2016"');
 	return $listnonreg1->result_array();
}

public function totalnonreg2(){
$totalnonreg2=$this->db->query('select sum(d.j_maba_trf)as totalnonreg2 from data_mhs d inner join prodi_tbl p on d.id_prodi=p.kode_prodi where d.kd_prog=2 and p.kode_fakultas="F001" and d.tahun="2016"');
 return $totalnonreg2->result_array();
}

public function listnonreg2(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$listnonreg2=$this->db->query('select j_maba_trf,id from data_mhs where kd_prog=2 and id_prodi='."'$kdprodi'".' and tahun="2016"');
 	return $listnonreg2->result_array();
}

public function totalnonreg3(){
$totalnonreg3=$this->db->query('select sum(d.j_tot_reg_bkn_trf)as totalnonreg3 from data_mhs d inner join prodi_tbl p on d.id_prodi=p.kode_prodi where d.kd_prog=2 and p.kode_fakultas="F001" and d.tahun="2016"');
 return $totalnonreg3->result_array();
}

public function listnonreg3(){
	$kdprodi = $this->session->userdata('kd_prodi');
	$listnonreg3=$this->db->query('select j_tot_reg_bkn_trf,id from data_mhs where kd_prog=2 and id_prodi='."'$kdprodi'".' and tahun="2016"');
 	return $listnonreg3->result_array();
}

}
