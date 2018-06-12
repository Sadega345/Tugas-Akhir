<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudUser extends CI_Controller {
	
	public function index(){
		$data=$this->model_role->GetUser();
		$this->load->view('Admin/tampilan_user.php',array('data'=>$data));
	}

	public function tambah(){
		$data=$this->model_user->GetUser();
		$this->load->view('Admin/inputan_user.php',array('data' => $data));
	}

	public function do_tambah(){
		$id=$_POST['id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		// $permission=$_POST['butir'];
		// $roleid=implode(',', $permission);
		// $level=$_POST['user'];
		// $roleid=$_POST['role_id'];
		$data_insert=array(
			'id'=>$id,
			'username'=>$username,
			'password'=>$password,
			// 'role_id'=>$roleid,
			// 'level'=>$level
		);
		$res=$this->model_user->insert('users',$data_insert);
		if ($res>=1) {
			redirect('Admin/table_user');
		}else {
			alert('Gagal Insert');
		}
		print_r($_POST['butir']);
		
		echo $roleid;
	}

	public function do_hapus($id){
		$where=array('id'=>$id);
		$res=$this->model_user->Delete('users',$where);
		if($res>=1){
			redirect('Admin/table_user');
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
			// "level"=>$res[0]['level']
		);
		$this->load->view('Admin/edit_user',$data);
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
			// 'level'=>$level
		);
		$where=array('id'=>$id);
		$res=$this->model_user->update('users',$data_update,$where);
		if ($res>=1) {
			redirect('Admin/table_user');
		}
		else {
			alert("Gagal Update") ;
		}
	}
}
