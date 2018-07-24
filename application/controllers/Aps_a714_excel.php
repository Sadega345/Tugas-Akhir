<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a714_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('aps_a714_model');
 // }

public function index() {
 $data = $this->Aps_a714_model->listing();
 $this->load->view('Users/Butir7/tampilan_borang7.1.4.php',array('data'=>$data));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a714_model->update("where id='$id'");
	$data=array(
		"karya"=>$res[0]['karya'],
		"id"=>$res[0]['id'],
		
	);
 	$this->load->view('Users/Butir7/edit_borang7.1.4.php',$data);
 }

 public function do_edit(){
		$karya=$_POST['karya'];
		$id=$_POST['id'];
		
		$data_update=array(
			"karya"=>$karya,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a714_model->rubah('hak_intelektual',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a714_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function tambah(){
		$this->load->view('Users/Butir7/inputan_borang7.1.4.php');
 }

	public function do_tambah(){
		$kdprodi = $this->session->userdata('kd_prodi');
		$this->model_squrity->getsqurity();
		$id=$_POST['id'];
		$karya=$_POST['karya'];
		$data_insert=array(
			'id' => $id,
			'kd_prodi' => $kdprodi,
			'karya'=>$karya,
		);
		$res=$this->Aps_a714_model->insert('hak_intelektual',$data_insert);
		if ($res>=1) {
			redirect('Aps_a714_excel');
		}else {
			alert('Gagal Insert');
		}
	}

	public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Aps_a714_model->Delete('hak_intelektual',$where);
		if($res>=1){
			redirect('Aps_a714_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

public function export_excel(){
 $data = $this->Aps_a714_model->listing();
 $this->load->view('Users/Butir7/tampilan_borang7.1.4_excel.php',array('data'=>$data));
 }

}