<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EdeUser extends CI_Controller {
	
	public function index(){
		$data=$this->model_user->GetUser();
		$this->load->view('Admin/tampilan_gantipassword.php',array('data'=>$data));
	}

	public function ganti_pwdUser(){
		$this->load->view('User/GantiPassword/tampilan_gantipassword.php');
		// echo "Jalan";
	}

	public function do_hapus($id){
		$where=array('id'=>$id);
		$res=$this->model_user->Delete('users',$where);
		if($res>=1){
			redirect('Admin/ganti_pwd');
		}else {
			alert('Gagal Hapus');
		}
	}

	public function edit_data($id){
		$res=$this->model_user->GetUser("where id='$id'");
		$data=array(
			"id"=>$res[0]['id'],
			"username"=>$res[0]['username'],
			"password"=>$res[0]['password'],
			"level"=>$res[0]['level']
		);
		$this->load->view('Admin/edit_gantipassword.php',$data);
	}

	public function do_edit(){

		$id=$_POST['id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$level=$_POST['level'];
		$data_update=array(
			'id'=>$id,
			'username'=>$username,
			'password'=>$password,
			'level'=>$level
		);
		$where=array('id'=>$id);
		$res=$this->model_user->update('users',$data_update,$where);
		if ($res>=1) {
			redirect('Admin/ganti_pwd');
		}
		else {
			alert("Gagal Update") ;
		}
	}

	
}
