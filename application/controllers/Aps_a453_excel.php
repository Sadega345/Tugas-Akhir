<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a453_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a453_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP',
 // 'a453' => $this->Aps_a453_model->listing());
 $data=$this->Aps_a453_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.5.3.php',array('data'=>$data));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
		$res=$this->Aps_a453_model->update("where id='$id'");
		$data=array(
			"nama_dosen"=>$res[0]['nama_dosen'],
			"jenis_kegiatan"=>$res[0]['jenis_kegiatan'],
			"tempat"=>$res[0]['tempat'],
			"tahun"=>$res[0]['tahun'],
			"sbg_penyaji"=>$res[0]['sbg_penyaji'],
			"sbg_peserta"=>$res[0]['sbg_peserta'],
			
		);
 	$this->load->view('Users/Butir4/edit_borang4.5.3.php',$data);
 	
 }

 public function do_edit(){
		// $nama_dosen=$_POST['nama_dosen'];
		$jenis_kegiatan=$_POST['jenis_kegiatan'];
		$tempat=$_POST['tempat'];
		$tahun=$_POST['tahun'];
		$sbg_penyaji=implode(',', $_POST['sbg_penyaji']);

		$sbg_peserta=implode(',', $_POST['sbg_peserta']);
		
		$data_update=array(
			"jenis_kegiatan"=>$jenis_kegiatan,
			"tempat"=>$tempat,
			"tahun"=>$tahun,
			"sbg_penyaji"=>$sbg_penyaji,
			"sbg_peserta"=>$sbg_peserta
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a453_model->rubah('kegiatan_dsn_ttp',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a453_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP',
 // 'a453' => $this->Aps_a453_model->listing());
 $data=$this->Aps_a453_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.5.3_excel.php',array('data'=>$data));
 }

 public function tambah(){
 	$this->load->view('Users/Butir4/inputan_borang4.5.3.php');
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
			'sbg_peserta' => $sbg_peserta
		);
		// print_r($data_insert);die();
		$res=$this->Aps_a453_model->insert('kegiatan_dsn_ttp',$data_insert);
		if ($res>=1) {
			redirect('Aps_a453_excel');
		}else {
			alert('Gagal Insert');
		}
	}

 public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Aps_a453_model->delete('kegiatan_dsn_ttp',$where);
		if($res>=1){
			redirect('Aps_a453_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

}