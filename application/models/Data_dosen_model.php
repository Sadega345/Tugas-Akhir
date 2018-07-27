<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosen_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->db2 = $this->load->database('repository-dosen',TRUE);
 }

// Listing
 public function listing() {
 	$kdprodi = $this->session->userdata('kd_prodi');
 $data=$this->db->query('SELECT D.id_dosen,D.NAMA_DOSEN,D.NIDN,D.TGL_LHR,J.NM_JAB_AKD,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,
D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3 FROM dosen_tbl D LEFT JOIN jab_akademik J ON D.kd_jab=J.kd_jab WHERE D.kd_prodi='."'$kdprodi'");
 return $data->result_array();
 }

 public function listed(){
 	$data=$this->db->query('select id_dosen from dosen_tbl;');
 	return $data->result_array();
 }

 // public function listedload(){
 // 	$data=$this->db2->query('select idLecturer from masterlecturer;');
 // 	return $data->result_array();
 // }

 public function loadlisting() {	
 $kdprodi = $this->session->userdata('kd_prodi');
 $data= $this->db2->query('select idLecturer,nameLecturer,birthdate,nidn,state,nameUniversity1,degree1,studyProgram1,nameUniversity2,degree2,studyProgram2,nameUniversity3,degree3,studyProgram3 from masterlecturer where idMajor='."'$kdprodi'");
 return $data->result_array();
 }

 public function updateload($where){
 	 $kdprodi = $this->session->userdata('kd_prodi');
 	 $data=$this->db2->query('select idLecturer,nameLecturer,birthdate,nidn,state,nameUniversity1,degree1,studyProgram1,nameUniversity2,degree2,studyProgram2,nameUniversity3,degree3,studyProgram3 from masterlecturer '.$where);
 	 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT D.NAMA_DOSEN,D.NIDN,D.TGL_LHR,J.NM_JAB_AKD,D.GELAR_S1,D.ASAL_PT_S1,D.BID_KEAHLIAN_S1,D.GELAR_S2,D.ASAL_PT_S2,D.BID_KEAHLIAN_S2,
D.GELAR_S3,D.ASAL_PT_S3,D.BID_KEAHLIAN_S3 FROM dosen_tbl D LEFT JOIN jab_akademik J ON D.kd_jab=J.kd_jab '.$where);
 return $data->result_array();
 }

 public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
}

	public function getdosen() {
		$data= $this->db->query('SELECT id_dosen FROM dosen_tbl ');
	 return $data->result_array();
	}

	public function insert($tablename,$data){
		$res=$this->db->insert($tablename,$data);
		return $res;
	}

	public function GetJabatan(){
		$data=$this->db->query('select kd_jab,nm_jab_akd from jab_akademik;');
		return $data->result_array();
	}

	public function GetJnsDosen(){
		$data=$this->db->query('select kd_jns,jns_dosen from jns_dosen;');
		return $data->result_array();
	}

	public function GetProdi(){
		$data=$this->db->query('select kode_prodi from prodi_tbl;');
		return $data->result_array();
	}

	public function delete($tablename,$where){
		$res=$this->db->delete($tablename,$where);
		return $res;
	}
}
