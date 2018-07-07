<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a433_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('
SELECT D.NAMA_DOSEN, A.SKS_PSS,A.SKS_PSL_PTS,A.SKS_PTL,A.SKS_PENELITIAN,A.SKS_PP_MAS,A.SKS_MAN_PTS,A.SKS_MAN_PTL,A.id,
SUM(A.SKS_PSS+a.SKS_PSL_PTS+a.SKS_PTL+a.SKS_PENELITIAN+a.sks_pp_mas+a.sks_man_pts+a.sks_man_ptl)as total
FROM aktivitas_dosen A INNER JOIN dosen_tbl D ON A.id_dosen=D.id_dosen WHERE D.STS_AHLI="YA" and d.kd_jns_dosen=1 group by a.id_dosen');
 
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('
 	SELECT D.NAMA_DOSEN, A.SKS_PSS,A.SKS_PSL_PTS,A.SKS_PTL,A.SKS_PENELITIAN,A.SKS_PP_MAS,A.SKS_MAN_PTS,A.SKS_MAN_PTL,A.id,
SUM(A.SKS_PSS+a.SKS_PSL_PTS+a.SKS_PTL+a.SKS_PENELITIAN+a.sks_pp_mas+a.sks_man_pts+a.sks_man_ptl)as total
FROM aktivitas_dosen A INNER JOIN dosen_tbl D ON A.id_dosen=D.id_dosen '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 public function hitung(){
 	$data=$this->db->query('select sum(a.sks_pss)as jml from aktivitas_dosen a inner join dosen_tbl d on a.id_dosen=d.id_dosen where d.sts_ahli="ya" and d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function jumlah_ps_lain_pt_sendiri(){
 	$data=$this->db->query('SELECT SUM(a.SKS_PSL_PTS)AS jml FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.kd_prodi="p001" AND d.sts_ahli="YA" AND d.kd_jns_dosen=1
');
 	return $data->result_array();
 }

 public function jumlah_ptlain(){
 	$data=$this->db->query('SELECT SUM(a.SKS_PTL)AS jml FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.kd_prodi="p001" AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function jumlah_penelitian(){
 	$data=$this->db->query('SELECT SUM(a.SKS_PENELITIAN)AS jml FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.kd_prodi="p001" AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function sks_pengabdian(){
 	$data=$this->db->query('SELECT SUM(a.SKS_PP_MAS)AS jml FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.kd_prodi="p001" AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

  public function jum_sks(){
 	$data=$this->db->query('SELECT SUM(a.SKS_MAN_PTS)AS jml FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.kd_prodi="p001" AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function man_ptlain(){
 	$data=$this->db->query('SELECT SUM(a.SKS_MAN_PTS)AS jml FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen 
WHERE d.kd_prodi="p001" AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function tot_sks(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT SUM(A.SKS_PSS+a.SKS_PSL_PTS+a.SKS_PTL+a.SKS_PENELITIAN+a.sks_pp_mas+a.sks_man_pts+a.sks_man_ptl)AS jml 
FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function rata_ps_sendiri(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT AVG(a.sks_pss)AS rata FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function rata_prlain(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT AVG(a.SKS_PSL_PTS)AS rata FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function rata_ptlain(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT AVG(a.SKS_PTL)AS rata FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function rata_penelitian(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT AVG(a.SKS_PENELITIAN)AS rata FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function rata_pengmas(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT AVG(a.SKS_PP_MAS)AS rata FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function rata_manptsendiri(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT AVG(a.SKS_MAN_PTS)AS rata FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function rata_manptlain(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT AVG(a.SKS_MAN_PTL)AS rata FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }

 public function rata_jumsks(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 	$data=$this->db->query('SELECT AVG(A.SKS_PSS+a.SKS_PSL_PTS+a.SKS_PTL+a.SKS_PENELITIAN+a.sks_pp_mas+a.sks_man_pts+a.sks_man_ptl)AS rata FROM aktivitas_dosen a INNER JOIN dosen_tbl d ON a.id_dosen=d.id_dosen WHERE d.kd_prodi='."'$kdprodi'".' AND d.sts_ahli="YA" AND d.kd_jns_dosen=1');
 	return $data->result_array();
 }
 public function insert($tablename,$data){
	$res=$this->db->insert($tablename,$data);
	return $res;
}

public function getdosen(){
	$data=$this->db->query('select id_dosen,nama_dosen from dosen_tbl where sts_ahli="YA"');
	return $data->result_array();
}

public function delete($tablename,$where){
	$res=$this->db->delete($tablename,$where);
	return $res;
}



}
