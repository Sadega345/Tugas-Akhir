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
		
		$id=$_POST['id'];
		$id_dosen=$_POST['id_dosen'];
		$j_mhs_bimbingan=$_POST['j_mhs_bimbingan'];
		$rata2_pertemuan=$_POST['rata2_pertemuan'];
		$data_insert=array(
			
			'id'=>$id,
			'id_dosen'=>$id_dosen,
			'kd_prodi'=> $this->session->userdata('kd_prodi'),
			'j_mhs_bimbingan' => $j_mhs_bimbingan,
			'rata2_pertemuan' => $rata2_pertemuan,

		);
		// print_r($data_insert);die();
		$res=$this->Apd_a541_model->insert('pembimbing_akd',$data_insert);
		if ($res>=1) {
			redirect('Apd_a541_excel');
		}else {
			alert('Gagal Insert');
		}
}

public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a541_model->update("where Id='$id'");
	$data=array(
		"nama_dosen"=>$res[0]['nama_dosen'],
		"j_mhs_bimbingan"=>$res[0]['j_mhs_bimbingan'],
		"rata2_pertemuan"=>$res[0]['rata2_pertemuan'],
		"Id"=>$res[0]['Id'],
	);
 	$this->load->view('User/Butir5/edit_borang5.4.1.php',$data);
 }

 public function do_edit(){
		$nama_dosen=$_POST['nama_dosen'];
		$j_mhs_bimbingan=$_POST['j_mhs_bimbingan'];
		$rata2_pertemuan=$_POST['rata2_pertemuan'];
		$Id=$_POST['Id'];
		
		$data_update=array(
			"j_mhs_bimbingan"=>$j_mhs_bimbingan,
			"rata2_pertemuan"=>$rata2_pertemuan,
			"Id"=>$Id,
			
		);
		$where=array('Id'=>$Id);
		$res=$this->Apd_a541_model->rubah('pembimbing_akd',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a541_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('Id'=>$id);
		$res=$this->Apd_a541_model->Delete('pembimbing_akd',$where);
		if($res>=1){
			redirect('Apd_a541_excel');
		}else {
			alert('Gagal Hapus');
		}
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