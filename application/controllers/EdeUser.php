<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EdeUser extends CI_Controller {
	
	public function index(){
		$data=$this->Model_password->data();
		$this->load->view('User/GantiPassword/tampilan_gantipassword.php',array('data'=>$data));
	}

	public function gantipassword(){
		$this->form_validation->set_rules('pwdlama','Password ','required|alpha_numeric|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('pwdbaru','Password Baru','required|alpha_numeric|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('repwd','Re Password','required|alpha_numeric|min_length[3]|max_length[20]');

		if ($this->form_validation->run()) {
			// echo "Form validation masuk ";
			$pwdlama = $this->input->post('pwdlama');
			$pwdbaru = $this->input->post('pwdbaru');
			$repwd = $this->input->post('repwd');
			
			// Model
			// $data = $this->queries->data();
			// $this->load->model('queries');

			$userid = '2';
			$passwd = $this->Model_password->data("where id='$userid'");
			$data_update = array(
				'password' => $pwdbaru
			 );
			$where = array('id'=>$userid);
			$res = $this->Model_password->ubahPassword('users',$data_update,$where);
			// print_r($passwd);die;
			if ($passwd->password == $pwdlama) {
				if ($pwdbaru == $repwd) {
					if ($res) {
						// echo "Password Sukses di ubah";
						redirect('Login','refresh');
					}else{
						// echo "Gagal Update password";
						
						$this->session->set_flashdata('info','Password baru tidak sesuai dengn password lama');
						$data=$this->Model_password->data();
						$this->load->view('User/GantiPassword/tampilan_gantipassword.php',array('data'=>$data));
					}
				}else{
					// echo "Password Baru & Re-Password tidak sama";
					
					$this->session->set_flashdata('info','Password Baru & Re-Password tidak sama');
					$data=$this->Model_password->data();
					$this->load->view('User/GantiPassword/tampilan_gantipassword.php',array('data'=>$data));
					
				}
			}else{
				// echo "Sorry Password tidak sama";
				
				$this->session->set_flashdata('info','Sorry Password tidak sama');
				$data=$this->Model_password->data();
				$this->load->view('User/GantiPassword/tampilan_gantipassword.php',array('data'=>$data));
			}
		}else{
			echo validation_errors();
			// echo "form_validation Ga masuk";
		}
	}

	
}
