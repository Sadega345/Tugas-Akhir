<title>Pembangunan Aplikasi Pelaporan Data Kuantitatif Borang Akreditasi</title>
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{

		$this->load->view("login");

	}	

	public function getlogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// echo $username,$password;
		$this->load->model('model_login');
		$this->model_login->masuk($username,$password);

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login/index');
	}
		

}
