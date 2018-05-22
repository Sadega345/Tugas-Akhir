<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudPassword extends CI_Controller {
	
	public function index(){
		// $this->load->library('session');
		// echo $this->session->userdata("username");die;
		// print_r($this->session->userdata());die;
		$data=$this->Model_password->getpassword();
		$this->load->view('Admin/tampilan_gantipassword.php',array('data'=>$data));
	}

	public function gantipassword(){
		$pwdlama=$_POST['pwdlama'];
		$pwdbaru=$_POST['pwdbaru'];
		$repwdbaru=$_POST['repwdbaru'];
		$key_username = $this->session->userdata("username");

		if ($repwdbaru != $pwdbaru) {
			echo "Gagal";
			$this->session->set_flashdata('info','Password baru tidak sesuai dengn password lama');
		}
		else{
			//set data update
			$databaru = array( 
			    'password' => $repwdbaru
			);
			$this->db->where('username', $key_username);
			$response = $this->db->update('users', $databaru);

			if ($response) {
				$sess = array(
					   		'password' => $repwdbaru
					   	);
				$this->session->set_userdata( $sess );
				redirect('Login','refresh');
			}else{
				$this->session->set_flashdata('info','Password baru tidak sesuai dengn password lama');
			}
		}
	}
}
