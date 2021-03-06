<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a453_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a453_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP',
 // 'a453' => $this->apd_a453_model->listing());
 $data=$this->Apd_a453_model->listing();
 $dosen=$this->Apd_a453_model->getdosen();
 $this->load->view('User/Butir4/tampilan_borang4.5.3.php',array('data'=>$data,
																'dosen'=>$dosen));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
		$res=$this->Apd_a453_model->update("where id='$id'");
		$data=array(
			"id"=>$res[0]['id'],
			"nama_dosen"=>$res[0]['nama_dosen'],
			"jenis_kegiatan"=>$res[0]['jenis_kegiatan'],
			"tempat"=>$res[0]['tempat'],
			"tahun"=>$res[0]['tahun'],
			"sbg_penyaji"=>$res[0]['sbg_penyaji'],
			"sbg_peserta"=>$res[0]['sbg_peserta'],
			
		);
 	$this->load->view('User/Butir4/edit_borang4.5.3.php',$data);
 	
 }

 public function do_edit(){
		$id=$_POST['id'];
		$jenis_kegiatan=$_POST['jenis_kegiatan'];
		$tempat=$_POST['tempat'];
		$tahun=$_POST['tahun'];
		$sbg_penyaji=$_POST['sbg_penyaji'];
		$sbg_peserta=$_POST['sbg_peserta'];
		$data_update=array(
			"jenis_kegiatan"=>$jenis_kegiatan,
			"tempat"=>$tempat,
			"tahun"=>$tahun,
			"sbg_penyaji"=>$sbg_penyaji,
			"sbg_peserta"=>$sbg_peserta,
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die();
		$res=$this->Apd_a453_model->rubah('kegiatan_dsn_ttp',$data_update,$where);
		if ($res>=1) {
			redirect('Apd_a453_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

	public function tambah(){
		$this->load->view('User/Butir4/inputan_borang4.5.3.php');
  }

	public function do_tambah(){
		$this->model_squrity->getsqurity();
		$id_dosen=$_POST['id_dosen'];
		$jenis_kegiatan=$_POST['jenis_kegiatan'];
		$tempat=$_POST['tempat'];
		$tahun=$_POST['tahun'];
		$sbg_penyaji=$_POST['sbg_penyaji'];
		$sbg_peserta=$_POST['sbg_peserta'];
		$data_insert=array(
			'id_dosen' => $id_dosen,
			'jenis_kegiatan' => $jenis_kegiatan,
			'tempat'=>$tempat,
			'tahun'=>$tahun,
			'sbg_penyaji' => $sbg_penyaji,
			'sbg_peserta' => $sbg_peserta,
		);
		// print_r($data_insert);die();
		$res=$this->Apd_a453_model->insert('kegiatan_dsn_ttp',$data_insert);
		if ($res>=1) {
			redirect('Apd_a453_excel');
		}else {
			alert('Gagal Insert');
		}
	}

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP',
 // 'a453' => $this->apd_a453_model->listing());
 $data=$this->Apd_a453_model->listing();
 $dosen=$this->Apd_a453_model->getdosen();
 $this->load->view('User/Butir4/tampilan_borang4.5.3_excel.php',array('data'=>$data, 'dosen'=>$dosen));
 }

 public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Apd_a453_model->Delete('kegiatan_dsn_ttp',$where);
		if($res>=1){
			redirect('Apd_a453_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

}