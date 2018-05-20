<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudPassword extends CI_Controller {
	
	public function index(){
		$data=$this->Model_password->getpassword();
		$this->load->view('Admin/tampilan_gantipassword.php',array('data'=>$data));
	}

	public function gantipassword(){
		$pwdlama=$_POST['pwdlama'];
		$pwdbaru=$_POST['pwdbaru'];
		$repwdbaru=$_POST['repwdbaru'];

		if ($pwdbaru!=$pwdbaru) {
			echo "Gagal";
			$this->session->set_flashdata('info','Password baru tidak sesuai dengn password lama');
		}
		else{
			$where=array('password'=>$pwdlama);
			$data_update=array(
				'password'=>$repwdbaru
			);
			$res=$this->Model_password->update('users',$data_update,$where);
			if ($res > 0) {
				redirect('Admin','refresh');
			}else{
				$this->session->set_flashdata('info','Password baru tidak sesuai dengn password lama');
			}
		}
	}
}
