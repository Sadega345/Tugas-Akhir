<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_User extends CI_Model {
	
	public function GetUser()
	{
		$user_id = $this->session->userdata('id');
		$data=$this->db->query("SELECT username,kd_prodi,id FROM users LIMIT 1,100 ");
		return $data->result_array();
	}

	// public function get_current_user() {
 //        $user_id = $this->session->userdata('id');
 //        $query = $this->db->get_where('user', array('id' => $user_id));
 //        return $query->row_array();
 //    }

	public function UbahUser($where="")
	{
		$user_id = $this->session->userdata('id');
		$data=$this->db->query("SELECT username,kd_prodi,id FROM users ".$where);
		return $data->result_array();
	}

	public function GetProdi()
	{
		$data=$this->db->query("select * from prodi_tbl");
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
