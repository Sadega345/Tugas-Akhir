<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a432_model extends CI_Model {

// private $kdprodi;

// public function __construct()
//  {
//  parent::__construct();
//  	$kdprodi = $this->session->userdata('kd_prodi');
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT D.nama_dosen,D.nidn,D.tgl_lhr,J.NM_JAB_AKD,D.sertifikasi,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,
D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3,D.GELAR,D.PENGAKUAN,D.BID_KEAHLIAN FROM dosen_tbl D LEFT JOIN jab_akademik J 
ON D.kd_jab=J.kd_jab WHERE KD_PRODI='."'$kdprodi'".' AND d.STS_AHLI="TIDAK" AND d.kd_jns_dosen=1');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT D.nama_dosen,D.nidn,D.tgl_lhr,J.NM_JAB_AKD,D.sertifikasi,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,
D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3,D.GELAR,D.PENGAKUAN,D.BID_KEAHLIAN FROM dosen_tbl D LEFT JOIN jab_akademik J 
ON D.kd_jab=J.kd_jab '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

}
