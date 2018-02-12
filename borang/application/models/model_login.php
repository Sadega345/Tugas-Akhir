<title>Pembangunan Aplikasi Pelaporan Data Kuantitatif Borang Akreditasi</title>
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {

	public function masuk($username,$password){
		
		$pwd=md5($password);
		$this->db->where('username',$username);
		$this->db->where('password',$pwd);
		$query = $this->db->get('admin');
		// Untuk query select * from admin where username= '$nama' and password= '$pwd'

		if ($query->num_rows()>0) {
			foreach ($query -> result() as $row) {
				$sess = array('username' => $row->username,
							   'password' => $row->password );

				$this->session->set_userdata( $sess );
				redirect('Web');
			}
		}
		else{
			$this->session->set_flashdata('info', 'Maaf Username atau Password anda salah ');
			redirect('Login');
		}
	}	
}
