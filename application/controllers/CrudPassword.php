<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudPassword extends CI_Controller {
	
	public function index(){
		// $this->load->library('session');
		// echo $this->session->userdata("username");die;
		// print_r($this->session->userdata());die;
		$data=$this->Model_password->getpassword();
		$this->load->view('Admin/tampilan_gantipassword.php',array('data'=>$data));
	}

	// public function gantipassword(){
	// 	$pwdlama=$_POST['pwdlama'];
	// 	$pwdbaru=$_POST['pwdbaru'];
	// 	$repwdbaru=$_POST['repwdbaru'];
	// 	$key_username = $this->session->userdata("username");
	// 	$key_password = $this->session->userdata("password");

	// 	if ($pwdlama != $key_password) {
	// 		$this->session->set_flashdata('info','Password baru tidak sesuai dengn password lama');
	// 	}

	// 	if ($repwdbaru != $pwdbaru) {
	// 		echo "Gagal";
	// 		$this->session->set_flashdata('info','Password baru tidak sesuai dengn password lama');
	// 	}
	// 	else{
	// 		//set data update
	// 		$databaru = array( 
	// 		    'password' => $repwdbaru
	// 		);
	// 		$this->db->where('username', $key_username);
	// 		$response = $this->db->update('users', $databaru);

	// 		if ($response) {
	// 			$sess = array(
	// 				   		'password' => $repwdbaru
	// 				   	);
	// 			$this->session->set_userdata( $sess );
	// 			redirect('Login','refresh');
	// 		}else{
	// 			$this->session->set_flashdata('info','Password baru tidak sesuai dengn password lama');
	// 		}
	// 	}
	// }

	public function gantipassword(){
		$this->form_validation->set_rules('pwdlama','Password ','required|alpha_numeric|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('pwdbaru','Password Baru','required|alpha_numeric|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('repwdbaru','Re Password','required|alpha_numeric|min_length[3]|max_length[20]');

		if ($this->form_validation->run()) {
			// echo "Form validation masuk ";
			$pwdlama = $this->input->post('pwdlama');
			$pwdbaru = $this->input->post('pwdbaru');
			$repwdbaru = $this->input->post('repwdbaru');
			
			// Model
			// $data = $this->queries->data();
			// $this->load->model('queries');

			// $userid = '1';
			$userid = $this->session->userdata('id');
			$passwd = $this->Model_password->data("where id='$userid'");
			$data_update = array(
				'password' => $pwdbaru
			 );
			$where = array('id'=>$userid);
			$res = $this->Model_password->ubahPassword('users',$data_update,$where);
			// print_r($passwd);die;
			if ($passwd->password == $pwdlama) {
				if ($pwdbaru == $repwdbaru) {
					if ($res) {
						// echo "Password Sukses di ubah";
						redirect('Login','refresh');
					}else{
						// echo "Gagal Update password";
						
						$this->session->set_flashdata('info','Password baru tidak sesuai dengn password lama');
						// $this->load->view('User/GantiPassword/tampilan_gantipassword.php');
						// $data=$this->Model_password->data();
						// $this->load->view('User/GantiPassword/tampilan_gantipassword.php',array('data'=>$data));
					}
				}else{
					// echo "Password Baru & Re-Password tidak sama";
					
					$this->session->set_flashdata('info','Password Baru & Re-Password tidak sama');
					// $this->load->view('User/GantiPassword/tampilan_gantipassword.php');
					// $data=$this->Model_password->data();
					// $this->load->view('User/GantiPassword/tampilan_gantipassword.php',array('data'=>$data));
					
				}
			}else{
				// echo "Sorry Password tidak sama";
				
				$this->session->set_flashdata('info','Sorry Password tidak sama');
				// $this->load->view('User/GantiPassword/tampilan_gantipassword.php');
				// $data=$this->Model_password->data();
				// $this->load->view('User/GantiPassword/tampilan_gantipassword.php',array('data'=>$data));
			}
		}else{
			echo validation_errors();
			// echo "form_validation Ga masuk";
		}
	}
}
