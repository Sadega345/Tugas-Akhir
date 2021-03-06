<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query("SELECT P.id,P.KODE_PRODI,P.PRODI,P.jurusan,F.NAMA_FAKULTAS,P.kode_pt,PT.NAMA_PT,P.NO_SK_PS,P.TGL_SK_PS,P.PJBT_TTD,
P.BLN_MULAI_PS,P.THN_MULAI_PS,P.NO_SK_OPR,P.TGL_SK_OPR,P.PERINGKAT,P.NILAI,P.NO_SK_BAN_PT,P.ALAMAT_PS,P.NO_TELP_PS,
P.NO_FAX_PS,P.HOMEPAGE_PS,P.EMAIL_PS FROM PRODI_TBL P INNER JOIN fakultas_tbl F INNER JOIN PERGURUAN_TINGGI PT
 ON P.kode_fakultas=F.kode_fakultas AND P.kode_pt=PT.kode_pt WHERE P.KODE_PRODI="."'$kdprodi'");
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT P.id,P.KODE_PRODI,P.PRODI,P.jurusan,F.NAMA_FAKULTAS,P.kode_pt,PT.NAMA_PT,P.NO_SK_PS,P.TGL_SK_PS,P.PJBT_TTD,
P.BLN_MULAI_PS,P.THN_MULAI_PS,P.NO_SK_OPR,P.TGL_SK_OPR,P.PERINGKAT,P.NILAI,P.NO_SK_BAN_PT,P.ALAMAT_PS,P.NO_TELP_PS,
P.NO_FAX_PS,P.HOMEPAGE_PS,P.EMAIL_PS FROM PRODI_TBL P INNER JOIN fakultas_tbl F INNER JOIN PERGURUAN_TINGGI PT
 ON P.kode_fakultas=F.kode_fakultas AND P.kode_pt=PT.kode_pt '.$where);
 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

}
