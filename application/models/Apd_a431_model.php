<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a431_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing($where="") {
 $data= $this->db->query('SELECT D.nama_dosen,D.nidn,D.tgl_lhr,J.NM_JAB_AKD,D.sertifikasi,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,
D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3,D.GELAR,D.PENGAKUAN,D.BID_KEAHLIAN FROM dosen_tbl D LEFT JOIN jab_akademik J 
ON D.kd_jab=J.kd_jab WHERE d.STS_AHLI="YA" and d.kd_jns_dosen=1'.$where);
 return $data->result_array();
 }

}
