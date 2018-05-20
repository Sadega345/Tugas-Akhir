<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Model_password extends CI_model {
	// var $table = "users";
	// public function _construct(){
	// 	parent::_construct();
	// 	$this->load->database();
	// }

	public function getpassword(){
		
		$data=$this->db->query('SELECT * FROM users WHERE id="1" ');
		return $data->result_array();
		
	}

	public function update($tablename,$data,$where){
		// $data=$this->db->query('UPDATE users SET PASSWORD = '."$data".' WHERE id = 1; ');
		// $data=$this->db->query('UPDATE users SET PASSWORD = "teguh" WHERE id = 1; ');
		$res=$this->db->insert($tablename,$data,$where);
		return $data;
	}


	// public function login($username, $password){
	// 	$this->db->select('*');
	// 	$this->db->from('users');
	// 	$this->db->where(['username'=>$username, 'password'=>md5($password)]); 
	// 	$return = $this->db->get('');
	// 	if($return->num_rows() > 0 ){
	// 		foreach ($return->result() as $row) {
	// 			if($row->username=="admin" || $row->password=="admin"){
	// 				$sess = array('username' => $row->username,
	// 				   			'password' => $row->password);
	// 				$this->session->set_userdata( $sess );
	// 				redirect('Admin');
	// 			}else if($row->username=="akademik" || $row->password=="akademik"){
	// 				$sess = array('username' => $row->username,
	// 				   			'password' => $row->password);
	// 				$this->session->set_userdata( $sess );
	// 				redirect('User');
	// 			}
				
	// 		}
	// 		 //echo "Sukses";
	// 	}else{
	// 		$this->session->set_flashdata('pesan','Username dan password tidak valid');
	// 		redirect('Login','refresh');
	// 	}
	// }

	// public function masuk($username,$password){
		
	// 	$pwd=md5($password);
	// 	$this->db->where('username',$username);
	// 	$this->db->where('password',$pwd);
	// 	$query = $this->db->get('user');
	// 	// Untuk query select * from admin where username= '$nama' and password= '$pwd'

	// 	if ($query->num_rows()>0) {
	// 		foreach ($query -> result() as $row) {
	// 			$sess = array('username' => $row->username,
	// 						   'password' => $row->password );

	// 			$this->session->set_userdata( $sess );
	// 			redirect('Web');
	// 		}
	// 	}
	// 	else{
	// 		$this->session->set_flashdata('info', 'Maaf Username atau Password anda salah ');
	// 		redirect('Login');
	// 	}
	// }	
}
