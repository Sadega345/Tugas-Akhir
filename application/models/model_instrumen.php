<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Instrumen extends CI_Model {
	
	public function GetInstrumen($where="")
	{
		$data=$this->db->query("select * from instrumen ".$where);
		return $data->result_array();
	}

	public function insert($tablename,$data){
		$res=$this->db->insert($tablename,$data);
		return $res;
	}

	// public function input($data){
	// 	try{
	//       $this->db->insert('instrumen', $data);
	//       return true;
	//     }catch(Exception $e){
	//     }
 //  	}


	public function update($tablename,$data,$where){
		$res=$this->db->update($tablename,$data,$where);
		return $res;
	}

	public function delete($tablename,$where){
		$res=$this->db->delete($tablename,$where);
		return $res;
	}

	

	
}
