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
 $data=$this->db->query("select P.KODE_PRODI,P.PRODI,P.JURUSAN,F.NAMA_FAKULTAS,P.KODE_PT,PT.NAMA_PT,P.NO_SK_PS,P.TGL_SK_PS,P.PJBT_TTD,
					P.BLN_MULAI_PS,P.THN_MULAI_PS,P.NO_SK_OPR,P.TGL_SK_OPR,P.PERINGKAT,P.NILAI,P.NO_SK_BAN_PT,P.ALAMAT_PS,P.NO_TELP_PS,
					P.NO_FAX_PS,P.HOMEPAGE_PS,P.EMAIL_PS from PRODI_TBL P INNER JOIN fakultas_tbl F INNER JOIN PERGURUAN_TINGGI PT
 					ON P.kode_fakultas=F.kode_fakultas AND P.kode_pt=PT.kode_pt ");
 return $data->result_array();
 }

 public function update($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
}

}
