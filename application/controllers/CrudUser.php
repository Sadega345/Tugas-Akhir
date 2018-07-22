<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudUser extends CI_Controller {
	
	public function index(){
		// $data=$this->model_role->GetUser();
		// $this->load->view('Admin/tampilan_user.php',array('data'=>$data));
		$data=$this->model_user->GetUser();
		$prodi=$this->model_user->GetProdi();
		$this->load->view('Admin/tampilan_user.php',array('data'=>$data,
														'prodi'=>$prodi));
	}

	public function tambah(){
		$data=$this->model_user->GetIdUser();
		$prodi=$this->model_user->GetProdi();
		$id = count($data)+1;
		$this->load->view('Admin/inputan_user.php',array('data'=>$data,
														'prodi'=>$prodi,
														'id'=>$id));
	}

	public function do_tambah(){
		$id=$_POST['id'];
		$username=$_POST['username'];
		$prodi=$_POST['prodi'];
		$kd_prodi=$_POST['kd_prodi'];
		$password=$_POST['pwd'];
		// $permission=$_POST['butir'];
		// $roleid=implode(',', $permission);
		// $level=$_POST['user'];
		// $roleid=$_POST['role_id'];
		$data_insert=array(
			'id'=>$id,
			'username'=>$username,
			'password'=>$password,
			'kd_prodi'=>$kd_prodi,
			'prodi'=>$prodi,
			// 'role_id'=>$roleid,
			// 'level'=>$level
		);
		// print_r($data_insert);die();
		$res=$this->model_user->insert('users',$data_insert);
		if ($res>=1) {
			redirect('Admin/table_user');
		}else {
			alert('Gagal Insert');
		}
		// print_r($_POST['butir']);
		
		// echo $roleid;
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
		$res=$this->model_user->UbahUser("where id='$id'");
		$tmp=$res[0]['kd_prodi'];
		$data=array(
			"id"=>$res[0]['id'],
			"username"=>$res[0]['username'],
			"password"=>$res[0]['password'],
			"kd_prodi"=>$tmp
			// "level"=>$res[0]['level']
		);
		$this->load->view('Admin/edit_user',$data);
	}

	public function do_edit(){

		$id=$_POST['id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$data_update=array(
			
			'username'=>$username
			
			// 'level'=>$level
		);
		$where=array('id'=>$id);
		$res=$this->model_user->update('users',$data_update,$where);
		if ($res>=1) {
			// redirect('Admin/table_user');
			redirect('CrudUser');
		}
		else {
			alert("Gagal Update") ;
		}
	}
}
