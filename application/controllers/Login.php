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
		if (isset($_POST['ok'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			// echo $username,$password;
			$this->model_login->masuk($username,$password);
			$hasil = count($cek);
			if ($hasil > 0) {
				$pelogin = $this->db->get_where('admin',array(
					'username' => $user,
					'password' => $pwd ))->row();
				if ($pelogin->level =='admin') {
					redirect('Login/admin');
				}elseif ($pelogin->level =='guru') {
					redirect('Login/user');
				}
			}else{
				// redirect('Login/index');
				echo "<script>alert('Gagal login: Username/Password salah');history.go(-2);</script>";
			}
		}
		

	}


}
