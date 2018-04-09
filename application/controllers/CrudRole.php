<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudRole extends CI_Controller {
	
	public function index(){
		$data=$this->model_role->GetUser();
		$this->load->view('Admin/inputan_role.php',array('data'=>$data));
	}

	public function tambah($id){
		$res=$this->model_role->GetUser("where id='$id'");
		$data=array(
			"id"=>$res[0]['id']
		);
		// $data=$this->model_role->GetUser();
		$this->load->view('Admin/inputan_role.php',$data);
	}

	public function do_tambah(){
		$id_role=$_POST['idrole'];
		$permission=$_POST['butir'];
		$roleid=implode(',', $permission);
		$data_insert=array(
			'role_id'=>$id_role,
			'permission'=>$roleid
		);
		$res=$this->model_role->insert('permission',$data_insert);
		if ($res>=1) {
			redirect('Admin/table_user');
		}else {
			alert('Gagal Insert');
		}
		// print_r($_POST['butir']);
		
		// echo $roleid;
	}

	// public function do_hapus($id){
	// 	$where=array('id'=>$id);
	// 	$res=$this->model_user->Delete('users',$where);
	// 	if($res>=1){
	// 		redirect('Admin/table_user');
	// 	}else {
	// 		alert('Gagal Hapus');
	// 	}
	// }

	// public function edit_data($id){
	// 	$res=$this->model_role->GetUser("where id='$id'");
	// 	$data=array(
	// 		"id"=>$res[0]['id']
	// 	);
	// 	$this->load->view('Admin/inputan_role',$data);
	// }

	// public function do_edit(){

	// 	$id=$_POST['id'];
	// 	$username=$_POST['username'];
	// 	$password=$_POST['password'];
	// 	$level=$_POST['level'];
	// 	$data_update=array(
	// 		'id'=>$id,
	// 		'username'=>$username,
	// 		'password'=>$password,
	// 		'level'=>$level
	// 	);
	// 	$where=array('id'=>$id);
	// 	$res=$this->model_user->update('users',$data_update,$where);
	// 	if ($res>=1) {
	// 		redirect('Admin/table_user');
	// 	}
	// 	else {
	// 		alert("Gagal Update") ;
	// 	}
	// }
}
