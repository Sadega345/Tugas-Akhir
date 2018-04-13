<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosen_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('select D.NAMA_DOSEN,D.NIDN,D.TGL_LHR,J.NM_JAB_AKD,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,
D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3 from dosen_tbl D LEFT JOIN jab_akademik J ON D.kd_jab=J.kd_jab');
 return $data->result_array();
 }

}
