<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudRole extends CI_Controller {
	
	public function index(){
		$data=$this->model_role->GetUser();
		$this->load->view('Admin/tampilan_user.php',array('data'=>$data));
	}

	public function tambah($id){
		$res=$this->model_role->GetUser("where role_id='$id'");
		$data=array(
			"role_id"=>$res[0]['role_id'],
			"nama_role"=>$res[0]['nama_role']
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

	public function perm($id = NULL) {
        if($id == NULL) {
            show_404();
        }
        // if($this->session->userdata('id') == null) {
        //     redirect('');
        // }
        $data_role['message'] = $this->session->flashdata('message');
        $data_role['result'] = $this->session->flashdata('result');
        
        $user = $this->model_user->GetUser();
        $perms = $this->model_role->get_perm_by_rid($id);
        $data_role['perms'] = count($perms) > 0 ? explode(",", $perms[0]->permission) : array();
        $data_role['datas'] = $this->model_role->get_role_by_id($id);

        // print_r($data_role);
        
        // $this->load->view('partial/top', $user);
        $this->load->view('Admin/inputan_role.php', $data_role);
        
    }

    public function edit_perm() {
        $rid = $this->input->post('rid');
        // $rid = 1;
        $nama_permission = $this->input->post('nama_permission');
        $data = array(
            'permission' => implode(",", $nama_permission),
            'role_id'=>$rid
        );
        try {
            if($this->model_role->get_perm_by_id($rid) == NULL) {
                $data['role_id'] = $this->input->post('rid');
                $res = $this->model_role->insert_perm($data);
            } else {
                $r_id = $this->input->post('rid');
                $res = $this->model_role->update_perm($r_id, $data);
            }
            $message = "Update Data Berhasil";
        } catch (Exception $e) {
            $message = "Hapus Data Gagal karena " . $e->getMessage();
            $res = -1;
        }
        $this->session->set_flashdata('message', $message);
        $this->session->set_flashdata('result', $res);
        redirect('CrudRole', 'refresh');
        
    }

    public function get_data_by_id($id = NULL) {
        if($id == NULL) {
            show_404();
        }
        $data_role['datas'] = $this->model_role->get_data_by_id($id);
        
        print json_encode($data_role);
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
