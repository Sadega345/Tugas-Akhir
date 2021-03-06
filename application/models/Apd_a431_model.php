<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a431_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->db2 = $this->load->database('repository-dosen',TRUE);
 }

// Listing
 public function listing() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db->query('SELECT D.nama_dosen,D.nidn,D.tgl_lhr,J.NM_JAB_AKD,J.kd_jab,D.sertifikasi,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,
D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3,D.GELAR,D.PENGAKUAN,D.BID_KEAHLIAN FROM dosen_tbl D LEFT JOIN jab_akademik J 
ON D.kd_jab=J.kd_jab WHERE d.STS_AHLI="YA" and d.kd_jns_dosen=1 and d.kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function loadlisting() {	
 $kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db2->query('select idLecturer,nameLecturer,birthdate,nidn,state,nameUniversity1,degree1,studyProgram1,nameUniversity2,degree2,studyProgram2,nameUniversity3,degree3,studyProgram3 from masterlecturer where idMajor='."'$kdprodi'");
 return $data->result_array();
 }

 public function updateload($where){
 	 $kdprodi = $this->session->userdata('kd_prodi');
 	 $data=$this->db2->query('select idLecturer,nameLecturer,birthdate,nidn,state,nameUniversity1,degree1,studyProgram1,nameUniversity2,degree2,studyProgram2,nameUniversity3,degree3,studyProgram3 from masterlecturer'.$where);
 	 return $data->result_array();
 }


 public function insert($tablename,$data){
	$res=$this->db->insert($tablename,$data);
	return $res;
}

 public function update($where) {
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
