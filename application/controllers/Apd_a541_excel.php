<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a541_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a541_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA',
 // 'a541' => $this->apd_a541_model->listing());
 $data=$this->Apd_a541_model->listing();
 $totalbimbingan=$this->Apd_a541_model->totbimbingan();
 $pertemuan=$this->Apd_a541_model->ratapertemuan();
 $this->load->view('User/Butir5/tampilan_borang5.4.1.php',array('data'=>$data,
																'totpertemuan'=>$totalbimbingan,
																'bertemu'=>$pertemuan));
 }
public function tambah(){
	$this->load->view('User/Butir5/inputan_a541.php');
}
public function do_tambah(){
		$this->model_squrity->getsqurity();
		$id_dosen=$_POST['id_dosen'];
		$j_mhs_bimbingan=$_POST['j_mhs_bimbingan'];
		$rata2_pertemuan=$_POST['rata2_pertemuan'];
		$data_insert=array(
			'id' => '',
			'id_dosen'=>$id_dosen,
			'kd_prodi'=>'P001',
			'j_mhs_bimbingan' => $j_mhs_bimbingan,
			'rata2_pertemuan' => $rata2_pertemuan,

		);
		$res=$this->Apd_a541_model->insert('pembimbing_akd',$data_insert);
		if ($res>=1) {
			redirect('Apd_a541_excel');
		}else {
			alert('Gagal Insert');
		}
}


  public function ubah(){
 	$this->load->view('User/Butir5/tampilan_borang5.4.1.php');	
 }

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA',
 // 'a541' => $this->apd_a541_model->listing());
 $data=$this->Apd_a541_model->listing();
 $totalbimbingan=$this->Apd_a541_model->totbimbingan();
 $pertemuan=$this->Apd_a541_model->ratapertemuan();
 $this->load->view('User/Butir5/tampilan_borang5.4.1_excel.php',array('data'=>$data,
																'totpertemuan'=>$totalbimbingan,
																'bertemu'=>$pertemuan));
 }

}