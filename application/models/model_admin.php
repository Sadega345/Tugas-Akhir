<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Admin extends CI_Model {
	
	public function GetUser()
	{
		$data=$this->db->query("select * from users where level='user'");
		return $data->result_array();
	}

	public function insert($tablename,$data){
		$res=$this->db->insert($tablename,$data);
		return $res;
	}

	public function update($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

	public function delete($tablename,$where){
		$res=$this->db->delete($tablename,$where);
		return $res;
	}
}
