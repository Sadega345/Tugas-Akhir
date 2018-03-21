<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->view('index_users');
	}

	public function logout()
	{
		$this->session->sess_userdata();
		redirect('login');
	}

}
