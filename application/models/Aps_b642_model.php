<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b642_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
public function listing1() {
$kdprodi = $this->session->userdata('kd_prodi');
$data=$this->db->query('SELECT manual,komp_tnp_jar,lan,wan,jenis_data,id FROM aksesbilitas_data WHERE kd_prodi='."'$kdprodi'");
return $data->result_array();
}

public function update($where="") {
 $data= $this->db->query('SELECT manual,komp_tnp_jar,lan,wan,jenis_data,id FROM aksesbilitas_data '.$where);
 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

public function totmanual() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT COUNT(IF(manual LIKE "v%",manual,NULL)) AS Tot_Manual FROM aksesbilitas_data WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totkomp() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT COUNT(IF(komp_tnp_jar LIKE "v%",komp_tnp_jar,NULL)) AS Tot_Komp FROM aksesbilitas_data WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totlan() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT COUNT(IF(lan LIKE "v%",LAN,NULL)) AS Tot_Lan FROM aksesbilitas_data WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function totwan() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT COUNT(IF(wan LIKE "v%",WAN,NULL)) AS Tot_Wan FROM aksesbilitas_data WHERE kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }


}
