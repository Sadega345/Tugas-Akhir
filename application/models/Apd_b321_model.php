<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b321_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function masastudi() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $masastudi= $this->db->query('
	SELECT concat(P.PRODI," ",P.JURUSAN) as prodi,M.RATA_MASA_STD as rata_masa_std,M.RATA_IPK as rata_ipk,M.KETERANGAN as keterangan,M.id FROM masastudi_ipk M 
	INNER JOIN prodi_tbl P ON P.kode_prodi=M.kd_prodi WHERE p.kode_fakultas="F001"');
 return $masastudi->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('
 	SELECT keterangan,id FROM masastudi_ipk '.$where);
 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 public function rata(){
 	$kdprodi = $this->session->userdata('kd_prodi');
 $rata=$this->db->query('SELECT AVG(M.rata_masa_std) as rata_mastud,AVG(M.rata_ipk) as rata2 FROM masastudi_ipk M 					
	INNER JOIN prodi_tbl P ON P.kode_prodi=M.kd_prodi WHERE  p.kode_fakultas="F001"');
 return $rata->result_array();
 }

}
