<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b721_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT k.id,k.KD_JNS,p.jurusan,SUM(k.ts_2)AS Tot_Ts2,SUM(k.ts_1)AS Tot_Ts1,SUM(k.ts)AS Tot_Ts,(SELECT SUM(jumlah_dana)FROM dana_pengmas WHERE tahun=2014 and kd_prodi='."'$kdprodi'".')AS Jum_dana2014,
(SELECT SUM(jumlah_dana) FROM dana_pengmas WHERE tahun=2015 and kd_prodi='."'$kdprodi'".')AS Jum_dana2015,(SELECT SUM(jumlah_dana) FROM dana_pengmas WHERE tahun=2016 and kd_prodi='."'$kdprodi'".')AS Jum_dana2016
FROM kegiatan_pkm k INNER JOIN prodi_tbl p INNER JOIN dana_pengmas d ON k.kd_prodi=p.kode_prodi AND d.jns_dana=k.kd_jns WHERE k.kd_prodi=
'."'$kdprodi'");
 return $data->result_array();
 }

 public function total() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('
SELECT p.jurusan,SUM(k.ts_2)AS Tot_Ts2,SUM(k.ts_1)AS Tot_Ts1,SUM(k.ts)AS Tot_Ts,(SELECT SUM(jumlah_dana)FROM dana_pengmas WHERE tahun=2014)AS Jum_dana2014,
(SELECT SUM(jumlah_dana) FROM dana_pengmas WHERE tahun=2015)AS Jum_dana2015,(SELECT SUM(jumlah_dana) FROM dana_pengmas WHERE tahun=2016)AS Jum_dana2016
FROM kegiatan_pkm k INNER JOIN prodi_tbl p INNER JOIN dana_pengmas d ON k.kd_prodi=p.kode_prodi AND d.jns_dana=k.kd_jns WHERE p.kode_fakultas=
"F001"');
 return $data->result_array();
 }

 public function update($where="") {
 	$kdprodi = $this->session->userdata('kd_prodi');
	$data= $this->db->query('SELECT k.id,k.KD_JNS,p.jurusan,SUM(k.ts_2)AS Tot_Ts2,SUM(k.ts_1)AS Tot_Ts1,SUM(k.ts)AS Tot_Ts,(SELECT SUM(jumlah_dana)FROM dana_pengmas WHERE tahun=2014 and kd_prodi='."'$kdprodi'".')AS Jum_dana2014,
(SELECT SUM(jumlah_dana) FROM dana_pengmas WHERE tahun=2015 and kd_prodi='."'$kdprodi'".')AS Jum_dana2015,(SELECT SUM(jumlah_dana) FROM dana_pengmas WHERE tahun=2016 and kd_prodi='."'$kdprodi'".')AS Jum_dana2016
FROM kegiatan_pkm k INNER JOIN prodi_tbl p INNER JOIN dana_pengmas d ON k.kd_prodi=p.kode_prodi AND d.jns_dana=k.kd_jns AND k.kd_prodi='."'$kdprodi'".$where);
	return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
	$res=$this->db->update($tablename,$data,$where);
	return $res;
 }

}
