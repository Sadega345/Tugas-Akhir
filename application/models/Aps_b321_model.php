<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b321_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function masastudi() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $masastudi= $this->db->query('
	SELECT concat(P.PRODI," ",P.JURUSAN) as prodi,M.RATA_MASA_STD as rata_masa_std,M.RATA_IPK as rata_ipk,M.id FROM masastudi_ipk M 
	INNER JOIN prodi_tbl P ON P.kode_prodi=M.kd_prodi WHERE M.kd_prodi='."'$kdprodi'");
 return $masastudi->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('
 	SELECT RATA_MASA_STD,RATA_IPK,id FROM masastudi_ipk '.$where);
 return $data->result_array();
 }

 	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

 public function rata(){
 $rata=$this->db->query('SELECT AVG(M.rata_masa_std) as rata_mastud,AVG(M.rata_ipk) as rata2 FROM masastudi_ipk M 					
	INNER JOIN prodi_tbl P ON P.kode_prodi=M.kd_prodi WHERE M.kd_prodi="p002"');
 return $rata->result_array();
 }

}
