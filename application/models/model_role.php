<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Role extends CI_Model {
	
	public function GetUser($where="")
	{
		$data=$this->db->query("select * from role ".$where);
		return $data->result_array();
	}

    public function get_perm_by_rid($rid="") {
        $this->db->select('permission');
        $query = $this->db->get_where("permission", array("role_id"=>$rid))->result();
        return $query;
    }

    public function get_data_by_id($id="") {
        $query = $this->db->get_where('role', array('r_id' => $id));
        return $query->row_object();
    }

    public function get_perm_by_id($id) {
        $query = $this->db->get_where('permission', array('role_id' => $id));
        return $query->row_object();
    }

    public function insert_perm($insert) {
        $this->db->insert('permission', $insert);
        return $this->db->insert_id();               
    }

    public function update_perm($id, $update) {
        $this->db->where('role_id', $id);
        $this->db->update('permission', $update);
        return $this->db->affected_rows();
    }

    public function get_role_by_id($id)
    {
        $this->db->select('role.r_id');
        $this->db->select('role.nama_role');
        $query = $this->db->get_where("role", array("r_id"=>$id))->result();
        return $query;
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
