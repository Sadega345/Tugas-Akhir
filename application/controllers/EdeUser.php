<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EdeUser extends CI_Controller {
	
	public function index(){
		$data=$this->Model_password->getpasswordUser();
		$this->load->view('User/GantiPassword/tampilan_gantipassword.php',array('data'=>$data));
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
				'username' => $key_username,
			    'password' => $repwdbaru
			);
			$this->db->where('username', $key_username);
			// print_r($databaru);die;
			// echo $key_username;die;
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
