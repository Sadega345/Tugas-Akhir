<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a5121_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a5121_model');
 // }
public function tambah(){
	$this->load->view('User/Butir5/inputan_5121.php');
}
public function do_tambah(){
		$this->model_squrity->getsqurity();
		$kode_mk=$_POST['kode_mk'];
		$jns_mk=$_POST['jns_mk'];
		$smt=$_POST['smt'];
		$nama_mk=$_POST['nama_mk'];
		$sks_kuliah=$_POST['sks_kuliah'];
		$sks_praktek=$_POST['sks_praktek'];
		$sks_inti=$_POST['sks_inti'];
		$sks_institusi=$_POST['sks_institusi'];
		$bobot_tgs=$_POST['bobot_tgs'];
		$deskripsi=$_POST['deskripsi'];
		$silabus=$_POST['silabus'];
		$sap=$_POST['sap'];
		$penyelenggara=$_POST['penyelenggara'];
		$data_insert=array(
			'kd_prodi' => 'P001',
			'kode_mk'=>$kode_mk,
			'jns_mk'=>$jns_mk,
			'smt' => $smt,
			'nama_mk' => $nama_mk,
			'sks_kuliah' => $sks_kuliah,
			'sks_praktek' => $sks_praktek,
			'sks_inti' => $sks_inti,
			'sks_institusi' => $sks_institusi,
			'bobot_tgs' => $bobot_tgs,
			'deskripsi' => $deskripsi,
			'silabus' => $silabus,
			'sap' => $sap,
			'penyelenggara' => $penyelenggara,

		);
		$res=$this->Apd_a5121_model->insert('struktur_kurikulum',$data_insert);
		if ($res>=1) {
			redirect('Apd_a5121_excel');
		}else {
			alert('Gagal Insert');
		}
}
public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 // 'a5121' => $this->apd_a5121_model->listing());
 $data=$this->Apd_a5121_model->listing();
 $totalkuliah=$this->Apd_a5121_model->totkuliah();
 $totalpraktikum=$this->Apd_a5121_model->totpraktikum();
 $totaltugas=$this->Apd_a5121_model->tottugas();
 $totalskripsi=$this->Apd_a5121_model->totskripsi();
 $totalsilabus=$this->Apd_a5121_model->totsilabus();
 $totalsap=$this->Apd_a5121_model->totsap();
 $this->load->view('User/Butir5/tampilan_borang5.1.2.1.php',array('data'=>$data,
																  'totkuliah'=>$totalkuliah,
																  'totpraktikum'=>$totalpraktikum,
																  'tottugas'=>$totaltugas,
																  'totskripsi'=>$totalskripsi,
																  'totalsap'=>$totalsap));
 }

 public function ubah(){
 	$this->load->view('User/Butir5/tampilan_borang5.1.2.1.php');	
 }

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 // 'a5121' => $this->apd_a5121_model->listing());
 $data=$this->Apd_a5121_model->listing();
 $totalkuliah=$this->Apd_a5121_model->totkuliah();
 $totalpraktikum=$this->Apd_a5121_model->totpraktikum();
 $totaltugas=$this->Apd_a5121_model->tottugas();
 $totalskripsi=$this->Apd_a5121_model->totskripsi();
 $totalsilabus=$this->Apd_a5121_model->totsilabus();
 $totalsap=$this->Apd_a5121_model->totsap();
 $this->load->view('User/Butir5/tampilan_borang5.1.2.1_excel.php',array('data'=>$data,
																  'totkuliah'=>$totalkuliah,
																  'totpraktikum'=>$totalpraktikum,
																  'tottugas'=>$totaltugas,
																  'totskripsi'=>$totalskripsi,
																  'totalsap'=>$totalsap));
 }

}