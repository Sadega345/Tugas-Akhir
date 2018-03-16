<title>Pembangunan Aplikasi Pelaporan Data Kuantitatif Borang Akreditasi</title>
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

		$this->load->view("login");

	}

	public function user_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->model_login->login($username,$password);
		}else{
			$this->index();
		}
	}	

	public function user(){
		$this->load->view('users');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}

	// public function getlogin()
	// {
	// 	if (isset($_POST['ok'])) {
	// 		$username = $this->input->post('username');
	// 		$password = $this->input->post('password');
	// 		// echo $username,$password;
	// 		$this->model_login->masuk($username,$password);
	// 		$hasil = count($cek);
	// 		if ($hasil > 0) {
	// 			$pelogin = $this->db->get_where('admin',array(
	// 				'username' => $user,
	// 				'password' => $pwd ))->row();
	// 			if ($pelogin->level =='admin') {
	// 				redirect('Login/admin');
	// 			}elseif ($pelogin->level =='guru') {
	// 				redirect('Login/user');
	// 			}
	// 		}else{
	// 			// redirect('Login/index');
	// 			echo "<script>alert('Gagal login: Username/Password salah');history.go(-2);</script>";
	// 		}
	// 	}
		

	// }


}
