<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Model_password extends CI_model {
	// var $table = "users";
	// public function _construct(){
	// 	parent::_construct();
	// 	$this->load->database();
	// }

	public function getpassword($userid=""){
		
		$data=$this->db->query('SELECT * FROM users '.$userid);
		if ($data->num_rows() > 0) {
			// return $data->result_array();
			return $data->row();
		}
		// return $data->result_array();
		
	}

	// public function getpasswordUser(){
		
	// 	$data=$this->db->query('SELECT * FROM users WHERE id="2" ');
	// 	return $data->result_array();
		
	// }

	public function data($userid=""){
		$data=$this->db->query('SELECT * FROM users '.$userid);
		if ($data->num_rows() > 0) {
			// return $data->result_array();
			return $data->row();
		}
 		
	}

	public function ubahPassword($table_name,$data,$where){
		$res=$this->db->update($table_name,$data,$where);
		return $res;
	}


}
