<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a431_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data= $this->db->query('SELECT D.nama_dosen,D.nidn,D.tgl_lhr,J.NM_JAB_AKD,J.kd_jab,D.sertifikasi,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,
D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3,D.GELAR,D.PENGAKUAN,D.BID_KEAHLIAN FROM dosen_tbl D LEFT JOIN jab_akademik J 
ON D.kd_jab=J.kd_jab WHERE d.STS_AHLI="YA" and d.kd_jns_dosen=1');
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

public function JabAkademik(){
	$data = $this->db->query('SELECT * FROM jab_akademik');
	return $data->result_array();
}

// 	public function tampil(){
//     $this->db->select('D.nama_dosen,D.nidn,D.tgl_lhr,J.NM_JAB_AKD,D.sertifikasi,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,
// D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3,D.GELAR,D.PENGAKUAN,D.BID_KEAHLIAN'); //mengambil semua data dari tabel data_users dan users
//     $this->db->from('dosen_tbl D'); //dari tabel data_users
//     $this->db->join('jab_akademik J', 'D.kd_jab=J.kd_jab', 'LEFT'); //menyatukan tabel users menggunakan left join
//     $data = $this->db->get(); //mengambil seluruh data
//     return $data->result(); //mengembalikan data
//   }

}
