<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengisi_excel extends CI_Controller {

// Load database
 // public function __construct() {
	//  parent::__construct();
	//  $this->load->model('pengisi_model');
 // }

public function index() {
	 $data = $this->Pengisi_model->listing();
	 $this->load->view('User/PengisiBorang/tampilan_pengisi.php',array('data'=>$data));
 }

 public function tambah(){
		$this->load->view('User/PengisiBorang/inputan_pengisi.php');
 }

	public function do_tambah(){
		$kdprodi = $this->session->userdata('kd_prodi');
		$this->model_squrity->getsqurity();
		$id=$_POST['id'];
		$nama=$_POST['nama'];
		$nidn=$_POST['nidn'];
		$jabatan=$_POST['jabatan'];
		$tglpengisian=$_POST['tglpengisian'];
		$data_insert=array(
			'id' => $id,
			'kode_prodi' => $kdprodi,
			'nama'=>$nama,
			'nidn'=>$nidn,
			'jabatan' => $jabatan,
			'tgl_pengisian' => $tglpengisian
		);
		$res=$this->Pengisi_model->insert('pengisi_borang',$data_insert);
		if ($res>=1) {
			redirect('Pengisi_excel');
		}else {
			alert('Gagal Insert');
		}
	}

	public function do_hapus($kode){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$kode);
		$res=$this->Pengisi_model->Delete('pengisi_borang',$where);
		if($res>=1){
			redirect('Pengisi_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

	public function edit_data($id){
		$this->model_squrity->getsqurity();
		$res=$this->Pengisi_model->ubah("where id=$id");
		$data=array(
			"id"=>$res[0]['id'],
			"nama"=>$res[0]['nama'],
			"nidn"=>$res[0]['nidn'],
			"jabatan"=>$res[0]['jabatan'],
			"tgl_pengisian"=>$res[0]['tgl_pengisian'],
		);
		$this->load->view('User/PengisiBorang/edit_pengisi.php',$data);
	}

	public function do_edit(){
		$id=$_POST['id'];
		$nama=$_POST['nama'];
		$nidn=$_POST['nidn'];
		$jabatan=$_POST['jabatan'];
		$tglpengisian=$_POST['tglpengisian'];
		$data_update=array(
			'id' => $id,
			'nama'=>$nama,
			'nidn'=>$nidn,
			'jabatan' => $jabatan,
			'tgl_pengisian' => $tglpengisian
		);
		$where=array('id'=>$id);
		$res=$this->Pengisi_model->update('pengisi_borang',$data_update,$where);
		if ($res>=1) {
			redirect('Pengisi_excel');
		}
		else {
			alert("Gagal Update") ;
		}
	}

public function export_excel(){
	 $data = $this->Pengisi_model->listing();
	 $this->load->view('User/PengisiBorang/tampilan_pengisi_excel.php',array('data' => $data));
 }

}