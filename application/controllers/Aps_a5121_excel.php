<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a5121_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a5121_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 // 'a5121' => $this->Aps_a5121_model->listing());
 $data=$this->Aps_a5121_model->listing();
 $totalkuliah=$this->Aps_a5121_model->totkuliah();
 $totalpraktikum=$this->Aps_a5121_model->totpraktikum();
 $totaltugas=$this->Aps_a5121_model->tottugas();
 $totalskripsi=$this->Aps_a5121_model->totskripsi();
 $totalsilabus=$this->Aps_a5121_model->totsilabus();
 $totalsap=$this->Aps_a5121_model->totsap();
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.1.php',array('data'=>$data,
																  'totkuliah'=>$totalkuliah,
																  'totpraktikum'=>$totalpraktikum,
																  'tottugas'=>$totaltugas,
																  'totskripsi'=>$totalskripsi,
																  'totalsap'=>$totalsap));
 }

// public function tambah(){
// 	$this->load->view('Users/Butir5/inputan_5121.php');
// }
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
		$res=$this->Aps_a5121_model->insert('struktur_kurikulum',$data_insert);
		if ($res>=1) {
			redirect('Aps_a5121_excel');
		}else {
			alert('Gagal Insert');
		}
}

	public function ubah($kode_mk){
 	$this->model_squrity->getsqurity();
		$res=$this->Aps_a5121_model->update("where kode_mk='$kode_mk'");
		$data=array(
			"smt"=>$res[0]['smt'],
			"kode_mk"=>$res[0]['kode_mk'],
			"nama_mk"=>$res[0]['nama_mk'],
			"sks_kuliah"=>$res[0]['sks_kuliah'],
			"sks_praktek"=>$res[0]['sks_praktek'],
			"sks_inti"=>$res[0]['sks_inti'],
			"sks_institusi"=>$res[0]['sks_institusi'],

			"bobot_tgs"=>$res[0]['bobot_tgs'],
			"deskripsi"=>$res[0]['deskripsi'],
			"silabus"=>$res[0]['silabus'],
			"sap"=>$res[0]['sap'],
			"penyelenggara"=>$res[0]['penyelenggara'],
		);
		// print_r($data);die;
 	$this->load->view('Users/Butir5/edit_borang5.1.2.1.php',$data);

 }

 public function do_edit(){
		
		// $smt=$_POST['smt'];
		$kode_mk=$_POST['kode_mk'];
		$nama_mk=$_POST['nama_mk'];
		$sks_kuliah=$_POST['sks_kuliah'];
		$sks_praktek=$_POST['sks_praktek'];
		
		$sks_inti = implode(',', $_POST['sks_inti']);
		$sks_institusi = implode(',', $_POST['sks_institusi']);
		$bobot_tgs = implode(',', $_POST['bobot_tgs']);
		
		$deskripsi=implode(',', $_POST['deskripsi']);
		$silabus=implode(',', $_POST['silabus']);
		$sap=implode(',', $_POST['sap']);
		$penyelenggara=$_POST['penyelenggara'];
		
		$data_update=array(
			
			"kode_mk"=>$kode_mk,
			"nama_mk"=>$nama_mk,
			"sks_kuliah"=>$sks_kuliah,
			"sks_praktek"=>$sks_praktek,

			"sks_inti"=>$sks_inti,
			"sks_institusi"=>$sks_institusi,
			"bobot_tgs"=>$bobot_tgs,
			"deskripsi"=>$deskripsi,
			"silabus"=>$silabus,

			"sap"=>$sap,
			"penyelenggara"=>$penyelenggara
			
		);
		$where=array('kode_mk'=>$kode_mk);
		$res=$this->Aps_a5121_model->rubah('struktur_kurikulum',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a5121_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 // 'a5121' => $this->Aps_a5121_model->listing());
 $data=$this->Aps_a5121_model->listing();
 $totalkuliah=$this->Aps_a5121_model->totkuliah();
 $totalpraktikum=$this->Aps_a5121_model->totpraktikum();
 $totaltugas=$this->Aps_a5121_model->tottugas();
 $totalskripsi=$this->Aps_a5121_model->totskripsi();
 $totalsilabus=$this->Aps_a5121_model->totsilabus();
 $totalsap=$this->Aps_a5121_model->totsap();
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.1_excel.php',array('data'=>$data,
																  'totkuliah'=>$totalkuliah,
																  'totpraktikum'=>$totalpraktikum,
																  'tottugas'=>$totaltugas,
																  'totskripsi'=>$totalskripsi,
																  'totalsap'=>$totalsap));
 }

}