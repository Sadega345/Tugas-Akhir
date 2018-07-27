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

	public function gettahun(){
		$this->model_squrity->getsqurity();
		$tahun=$_POST['tahun'];
		$data_insert=array(
			'tahun' => $tahun,
		);
		$res=$this->model_user->insert('tahun_akd',$data_insert);
		if ($res>=1) {
			// $result='<div class="alert alert-success">Succes, Tahun Referensi telah dipilih</div>';
			// redirect('User');
			// alert('Succes, Tahun Referensi sudah dipilih');
			// header("Location:User.php");
			echo "<script>alert('Succes, Tahun Referensi telah dipilih')</script>";
			redirect('User','refresh');
		}else {
			alert('Gagal Insert');
		}
	}

}
