<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Prodi extends CI_Model {
	
	public function GetProdi()
	{
		$data=$this->db->query("select * from prodi_tbl");
		return $data->result_array();
	}

	public function GetNamaProdi()
	{
		$data=$this->db->query("SELECT DISTINCT prodi FROM prodi_tbl");
		return $data->result_array();
	}

	public function GetEditProdi($where="")
	{
		$data=$this->db->query("select * from prodi_tbl ".$where);
		return $data->result_array();
	}

	public function GetFakultas()
	{
		$data=$this->db->query("select nama_fakultas,kode_fakultas from fakultas_tbl ");
		return $data->result_array();
	}

	public function GetPerguruanTinggi()
	{
		$data=$this->db->query("SELECT nama_pt,kode_pt FROM perguruan_tinggi ");
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
