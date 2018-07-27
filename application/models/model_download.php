<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_Download extends CI_model {

	public function get_data($where=""){
		// $query = $this->db->get('instrumen');
		// return $query->result();

		$result=$this->db->query('select id,instrumen,file from instrumen'.$where);
		return $result->result_array();
	}
}
?>