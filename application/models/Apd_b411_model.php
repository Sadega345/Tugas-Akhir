<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b411_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
public function getprodi(){
$prodi=$this->db->query('select distinct(p.jurusan) as prodi from prodi_tbl p inner join sdm s on s.kd_prodi=p.kode_prodi where p.kode_fakultas="F001";');
return $prodi->result_array();
}

public function listing1() {
	$kdprodi = $this->session->userdata('kd_prodi');
$data1=$this->db->query('select jml from sdm where kd_hal=1 and kd_prodi='."'$kdprodi'");
return $data1->result_array();
}

public function listing2() {
	$kdprodi = $this->session->userdata('kd_prodi');
$data2=$this->db->query('select jml from sdm where kd_hal=2 and kd_prodi='."'$kdprodi'");
return $data2->result_array();
}

public function listing3() {
	$kdprodi = $this->session->userdata('kd_prodi');
$data3=$this->db->query('select jml from sdm where kd_hal=3 and kd_prodi='."'$kdprodi'");
return $data3->result_array();
}

public function listing4() {
	$kdprodi = $this->session->userdata('kd_prodi');
$data4=$this->db->query('select jml from sdm where kd_hal=4 and kd_prodi='."'$kdprodi'");
return $data4->result_array();
}

public function listing5() {
	$kdprodi = $this->session->userdata('kd_prodi');
$data5=$this->db->query('select jml from sdm where kd_hal=5 and kd_prodi='."'$kdprodi'");
return $data5->result_array();
}

public function listing6() {
	$kdprodi = $this->session->userdata('kd_prodi');
$data6=$this->db->query('select jml from sdm where kd_hal=6 and kd_prodi='."'$kdprodi'");
return $data6->result_array();
}

public function listing7() {
	$kdprodi = $this->session->userdata('kd_prodi');
$data7=$this->db->query('select jml from sdm where kd_hal=7 and kd_prodi='."'$kdprodi'");
return $data7->result_array();
}

public function total1(){
$total1=$this->db->query('select sum(s.jml) as total from sdm s inner join prodi_tbl p on s.kd_prodi=p.kode_prodi where s.kd_hal=1 and p.kode_fakultas="F001";');
return $total1->result_array();
}

public function total2(){
$total2=$this->db->query('select sum(s.jml) as total from sdm s inner join prodi_tbl p on s.kd_prodi=p.kode_prodi where s.kd_hal=2 and p.kode_fakultas="F001";');
return $total2->result_array();
}

public function total3(){
$total3=$this->db->query('select sum(s.jml) as total from sdm s inner join prodi_tbl p on s.kd_prodi=p.kode_prodi where s.kd_hal=3 and p.kode_fakultas="F001";');
return $total3->result_array();
}

public function total4(){
$total4=$this->db->query('select sum(s.jml) as total from sdm s inner join prodi_tbl p on s.kd_prodi=p.kode_prodi where s.kd_hal=4 and p.kode_fakultas="F001";');
return $total4->result_array();
}

public function total5(){
$total5=$this->db->query('select sum(s.jml) as total from sdm s inner join prodi_tbl p on s.kd_prodi=p.kode_prodi where s.kd_hal=5 and p.kode_fakultas="F001";');
return $total5->result_array();
}

public function total6(){
$total6=$this->db->query('select sum(s.jml) as total from sdm s inner join prodi_tbl p on s.kd_prodi=p.kode_prodi where s.kd_hal=6 and p.kode_fakultas="F001";');
return $total6->result_array();
}

public function total7(){
$total7=$this->db->query('select sum(s.jml) as total from sdm s inner join prodi_tbl p on s.kd_prodi=p.kode_prodi where s.kd_hal=7 and p.kode_fakultas="F001";');
return $total7->result_array();
}

public function totala(){
$totala=$this->db->query('select sum(s.jml) as totala from sdm s inner join jns_hal j inner join prodi_tbl p on j.kd_hal=s.kd_hal and s.kd_prodi=p.kode_prodi where j.jenis="JABFUNG" and p.kode_fakultas="F001"');
return $totala->result_array();
}

public function totalaps(){
	$kdprodi = $this->session->userdata('kd_prodi');
$totalaps=$this->db->query('select sum(s.jml) as totalaps from sdm s inner join jns_hal j on j.kd_hal=s.kd_hal where j.jenis="JABFUNG" and kd_prodi='."'$kdprodi'");
return $totalaps->result_array();
}

public function totalb(){
$totalb=$this->db->query('select sum(s.jml) as totalb from sdm s inner join jns_hal j inner join prodi_tbl p on j.kd_hal=s.kd_hal and s.kd_prodi=p.kode_prodi where j.jenis="dikti" and p.kode_fakultas="F001"');
return $totalb->result_array();
}

public function totalbps(){
	$kdprodi = $this->session->userdata('kd_prodi');
$totalbps=$this->db->query('select sum(s.jml) as totalbps from sdm s inner join jns_hal j on j.kd_hal=s.kd_hal where j.jenis="dikti" and kd_prodi='."'$kdprodi'");
return $totalbps->result_array();
}

}
