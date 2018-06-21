<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b711_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data=$this->db->query('SELECT pd.id,p.jurusan,SUM(pd.ts_2)AS Tot_Ts2,SUM(pd.ts_1)AS Tot_Ts1,SUM(pd.ts)AS Tot_Ts,(SELECT SUM(jml_dana)
FROM dana_penelitian WHERE tahun=2014)AS Dana_penelitian,(SELECT SUM(jml_dana)FROM dana_penelitian WHERE tahun=2015)AS Jum_Dana2015,
(SELECT SUM(jml_dana)FROM dana_penelitian WHERE tahun=2016)AS Jum_Dana2016
FROM penelitian_dosen pd INNER JOIN dana_penelitian d INNER JOIN prodi_tbl p ON pd.kd_jns=d.jns_dana WHERE p.kode_fakultas="F001"
');
 return $data->result_array();
 }

 public function total() {
 $data=$this->db->query('SELECT SUM(pd.ts_2)AS Tot_Ts2,SUM(pd.ts_1)AS Tot_Ts1,SUM(pd.ts)AS Tot_Ts,(SELECT SUM(jml_dana) FROM dana_penelitian WHERE tahun=2014)AS Jum_dana2014,
(SELECT SUM(jml_dana)FROM dana_penelitian WHERE tahun=2015)AS Jum_dana2015,(SELECT SUM(jml_dana)FROM dana_penelitian WHERE tahun=2016)AS Jum_dana2016,pd.id 
FROM penelitian_dosen pd INNER JOIN dana_penelitian d INNER JOIN prodi_tbl p ON pd.kd_jns=d.jns_dana WHERE p.kode_fakultas="F001"
');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT pd.id,SUM(pd.ts_2)AS Tot_Ts2,SUM(pd.ts_1)AS Tot_Ts1,SUM(pd.ts)AS Tot_Ts,(SELECT SUM(jml_dana)
FROM dana_penelitian WHERE tahun=2014)AS Dana_penelitian,(SELECT SUM(jml_dana)FROM dana_penelitian WHERE tahun=2015)AS Jum_Dana2015,
(SELECT SUM(jml_dana)FROM dana_penelitian WHERE tahun=2016)AS Jum_Dana2016
FROM penelitian_dosen pd INNER JOIN dana_penelitian d INNER JOIN prodi_tbl p ON pd.kd_jns=d.jns_dana '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
 }

}
