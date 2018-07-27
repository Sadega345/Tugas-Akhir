<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {
	// var $table = "users";
	// public function _construct(){
	// 	parent::_construct();
	// 	$this->load->database();
	// }

	public function login($username="", $password=""){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(['username'=>$username, 'password'=>$password]); 
		// $username=$this->db->query('SELECT username FROM users');
		// $cekprodi=$this->db->query('SELECT p.kode_prodi FROM users u INNER JOIN prodi_tbl p 
		// 	ON p.kode_prodi=u.kd_prodi WHERE u.username="$username" ');
		$return = $this->db->get('');
		if($return->num_rows() > 0 ){
			foreach ($return->result() as $row) {
				if($username == "admin" ){
					$sess = array(
									'username' => $row->username,
									'id' => $row->id,
					   			);
					$this->session->set_userdata( $sess );
					
					redirect('Admin');
				}

				else if ($username == $row->username) {
						if($row->prodi == "D3"){
							$sess = array(
									'username' => $row->username,
				       				'prodi' => $row->prodi,
									'kd_prodi' => $row->kd_prodi,
									'id' => $row->id,
					   			);
							$this->session->set_userdata( $sess );
							// print_r($sess);die();
							redirect('User');
				       }
				       else {
				       		$sess = array(
				       				'username' => $row->username,
				       				'prodi' => $row->prodi,
									'kd_prodi' => $row->kd_prodi,
									'id' => $row->id,
					   			);
							$this->session->set_userdata( $sess );
							// print_r($sess);die();
				             redirect("Users");
				       }
				}
				
			}
			 //echo "Sukses";
		}else{
			$this->session->set_flashdata('pesan','Username dan password tidak valid');
			redirect('Login','refresh');
		}
	}

	

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
