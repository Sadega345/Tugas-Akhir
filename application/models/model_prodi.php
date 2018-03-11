<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Prodi extends CI_Model {
	
	public function GetProdi($where="")
	{
		$data=$this->db->query("select * from prodi_tbl ".$where);
		return $data->result_array();
	}

	public function GetFakultas($where="")
	{
		$data=$this->db->query("select kode_fakultas from fakultas_tbl ".$where);
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
