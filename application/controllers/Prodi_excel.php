<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('prodi_model');
 // }

public function index() {
 // $data = array( 'title' => 'Data Prodi',
 // 'prodi' => $this->prodi_model->listing());
	$data = $this->Prodi_model->listing();
 $this->load->view('User/PengisiProdi/tampilan_pengisiprodi.php',array('data'=>$data));
 }

 public function ubah(){
 	$this->model_squrity->getsqurity();
 	$id = 1;
 	$res=$this->Prodi_model->update("where id='$id'");
	$data=array(
		"KODE_PRODI"=>$res[0]['KODE_PRODI'],
		"PRODI"=>$res[0]['PRODI'],
		"jurusan"=>$res[0]['jurusan'],
		"NAMA_FAKULTAS"=>$res[0]['NAMA_FAKULTAS'],
		"kode_pt"=>$res[0]['kode_pt'],
		"NAMA_PT"=>$res[0]['NAMA_PT'],
		"NO_SK_PS"=>$res[0]['NO_SK_PS'],
		"TGL_SK_PS"=>$res[0]['TGL_SK_PS'],
		"PJBT_TTD"=>$res[0]['PJBT_TTD'],
		"BLN_MULAI_PS"=>$res[0]['BLN_MULAI_PS'],
		"THN_MULAI_PS"=>$res[0]['THN_MULAI_PS'],
		"NO_SK_OPR"=>$res[0]['NO_SK_OPR'],
		"TGL_SK_OPR"=>$res[0]['TGL_SK_OPR'],
		"PERINGKAT"=>$res[0]['PERINGKAT'],
		"NILAI"=>$res[0]['NILAI'],
		"NO_SK_BAN_PT"=>$res[0]['NO_SK_BAN_PT'],
		"ALAMAT_PS"=>$res[0]['ALAMAT_PS'],

		"NO_TELP_PS"=>$res[0]['NO_TELP_PS'],
		"NO_FAX_PS"=>$res[0]['NO_FAX_PS'],
		"HOMEPAGE_PS"=>$res[0]['HOMEPAGE_PS'],
		"EMAIL_PS"=>$res[0]['EMAIL_PS'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('User/PengisiProdi/edit_pengisiprodi.php',$data);
 }

 public function do_edit(){
		// $KODE_PRODI=$_POST['KODE_PRODI'];
		$PRODI=$_POST['PRODI'];
		$jurusan=$_POST['jurusan'];
		//$NAMA_FAKULTAS=$_POST['NAMA_FAKULTAS'];
		// $kode_pt=$_POST['kode_pt'];
		//$NAMA_PT=$_POST['NAMA_PT'];
		$NO_SK_PS=$_POST['NO_SK_PS'];
		$TGL_SK_PS=$_POST['TGL_SK_PS'];
		$PJBT_TTD=$_POST['PJBT_TTD'];

		$BLN_MULAI_PS=$_POST['BLN_MULAI_PS'];
		$THN_MULAI_PS=$_POST['THN_MULAI_PS'];
		$NO_SK_OPR=$_POST['NO_SK_OPR'];
		$TGL_SK_OPR=$_POST['TGL_SK_OPR'];
		$PERINGKAT=$_POST['PERINGKAT'];
		$NILAI=$_POST['NILAI'];
		$NO_SK_BAN_PT=$_POST['NO_SK_BAN_PT'];
		$ALAMAT_PS=$_POST['ALAMAT_PS'];

		$NO_TELP_PS=$_POST['NO_TELP_PS'];
		$NO_FAX_PS=$_POST['NO_FAX_PS'];
		$HOMEPAGE_PS=$_POST['HOMEPAGE_PS'];
		$EMAIL_PS=$_POST['EMAIL_PS'];
		$id=$_POST['id'];
		
		$data_update=array(
			"PRODI"=>$PRODI,
			"jurusan"=>$jurusan,
			"NO_SK_PS"=>$NO_SK_PS,
			"TGL_SK_PS"=>$TGL_SK_PS,
			"PJBT_TTD"=>$PJBT_TTD,
			
			"BLN_MULAI_PS"=>$BLN_MULAI_PS,
			"THN_MULAI_PS"=>$THN_MULAI_PS,
			"NO_SK_OPR"=>$NO_SK_OPR,
			"TGL_SK_OPR"=>$TGL_SK_OPR,
			"PERINGKAT"=>$PERINGKAT,
			"NILAI"=>$NILAI,
			"NO_SK_BAN_PT"=>$NO_SK_BAN_PT,
			"ALAMAT_PS"=>$ALAMAT_PS,
			"NO_TELP_PS"=>$NO_TELP_PS,
			"NO_FAX_PS"=>$NO_FAX_PS,

			"HOMEPAGE_PS"=>$HOMEPAGE_PS,
			"EMAIL_PS"=>$EMAIL_PS,
			
		);
		$where=array('id'=>$id);
		$res=$this->Prodi_model->rubah('PRODI_TBL',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Prodi_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => 'Laporan Data Prodi',
 // 'prodi' => $this->prodi_model->listing());
	$data = $this->Prodi_model->listing();
 $this->load->view('User/PengisiProdi/tampilan_pengisiprodi_excel.php',array('data'=>$data));
 }

}