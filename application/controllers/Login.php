<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url','html');
        $this->load->library('form_validation');
        $this->load->model('model_login');
    }
	
	public function index()
	{
		// print_r($this->session());die;
		$this->load->view("login");

	}

	public function user_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[2]');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->model_login->login($username,$password);
			$u = $this->session->userdata('username');
			echo $u;
		}else{
			$this->session->set_flashdata('info','Maaf Password atau Username yang anda masukan salah'); 
			$this->index();
		}
	}	

	public function user(){
		$this->load->view('user');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}



}
