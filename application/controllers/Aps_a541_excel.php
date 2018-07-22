<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a541_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a541_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA',
 // 'a541' => $this->Aps_a541_model->listing());
 $data=$this->Aps_a541_model->listing();
 $totalbimbingan=$this->Aps_a541_model->totbimbingan();
 $pertemuan=$this->Aps_a541_model->ratapertemuan();
 $this->load->view('Users/Butir5/tampilan_borang5.4.1.php',array('data'=>$data,
																'totpertemuan'=>$totalbimbingan,
																'bertemu'=>$pertemuan));
 }
public function tambah(){
	$this->load->view('Users/Butir5/inputan_a541.php');
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
		$res=$this->Aps_a541_model->insert('pembimbing_akd',$data_insert);
		if ($res>=1) {
			redirect('Aps_a541_excel');
		}else {
			alert('Gagal Insert');
		}
}

public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a541_model->update("where Id='$id'");
	$data=array(
		"nama_dosen"=>$res[0]['nama_dosen'],
		"j_mhs_bimbingan"=>$res[0]['j_mhs_bimbingan'],
		"rata2_pertemuan"=>$res[0]['rata2_pertemuan'],
		"Id"=>$res[0]['Id'],
	);
 	$this->load->view('Users/Butir5/edit_borang5.4.1.php',$data);
 }

 public function do_edit(){
		
		$j_mhs_bimbingan=$_POST['j_mhs_bimbingan'];
		$rata2_pertemuan=$_POST['rata2_pertemuan'];
		$Id=$_POST['Id'];
		
		$data_update=array(
			"j_mhs_bimbingan"=>$j_mhs_bimbingan,
			"rata2_pertemuan"=>$rata2_pertemuan,
			"Id"=>$Id,
			
		);
		$where=array('Id'=>$Id);
		$res=$this->Aps_a541_model->rubah('pembimbing_akd',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a541_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Aps_a541_model->Delete('pembimbing_akd',$where);
		if($res>=1){
			redirect('Aps_a541_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA',
 // 'a541' => $this->Aps_a541_model->listing());
 $data=$this->Aps_a541_model->listing();
 $totalbimbingan=$this->Aps_a541_model->totbimbingan();
 $pertemuan=$this->Aps_a541_model->ratapertemuan();
 $this->load->view('Users/Butir5/tampilan_borang5.4.1_excel.php',array('data'=>$data,
																'totpertemuan'=>$totalbimbingan,
																'bertemu'=>$pertemuan));
 }

}