<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6111_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function listing1() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $dana1=$this->db->query('select id,id_dana,jenis_dana,ts_2,ts_1,ts from perolehan_dana where id_dana=1 and kd_prodi='."'$kdprodi'");
 return $dana1->result_array();
 }

 public function listing2() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $dana2=$this->db->query('select id,id_dana,jenis_dana,ts_2,ts_1,ts from perolehan_dana where id_dana=5 and kd_prodi='."'$kdprodi'");
 return $dana2->result_array();
 }

 public function listing3() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $dana3=$this->db->query('select id,id_dana,jenis_dana,ts_2,ts_1,ts from perolehan_dana where id_dana=6 and kd_prodi='."'$kdprodi'");
 return $dana3->result_array();
 }

 public function listing4() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $dana4=$this->db->query('select id,id_dana,jenis_dana,ts_2,ts_1,ts from perolehan_dana where id_dana=4 and kd_prodi='."'$kdprodi'");
 return $dana4->result_array();
 }


 public function total() {
 $kdprodi = $this->session->userdata('kd_prodi');
 $total=$this->db->query('select sum(ts_2) as total1,sum(ts_1) as total2,sum(ts) as total3,sum(ts_2+ts_1+ts) as totals from perolehan_dana where kd_prodi='."'$kdprodi'");
 return $total->result_array();
 }

public function update($where="") {
		$data= $this->db->query('SELECT id,id_dana,jenis_dana,ts_2,ts_1,ts FROM perolehan_dana '.$where);
		return $data->result_array();
	}

	public function rubah($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}
}
