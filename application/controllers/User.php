<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->view('index_user');
	}

	public function logout()
	{
		$this->session->sess_userdata();
		redirect('login');
	}

	function ganti_pwd(){
		redirect('EdeUser/ganti_pwdUser');
	}

}
