<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a552_excel extends CI_Controller {

// Load database
 

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir',
 // 'a552' => $this->apd_a552_model->listing());
 $data=$this->Apd_a552_model->listing();
 $totalmahasiswa=$this->Apd_a552_model->totmahasiswa();
 $this->load->view('User/Butir5/tampilan_borang5.5.2.php',array('data'=>$data,
																'totmahasiswa'=>$totalmahasiswa));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a552_model->update("where id='$id'");
	$data=array(
		"nama_dosen"=>$res[0]['nama_dosen'],
		"jml_mhs"=>$res[0]['jml_mhs'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('User/Butir5/edit_borang5.5.2.php',$data);
 }

  public function do_edit(){
		$nama_dosen=$_POST['nama_dosen'];
		$jml_mhs=$_POST['jml_mhs'];
		$id=$_POST['id'];
		
		$data_update=array(
			
			"jml_mhs"=>$jml_mhs,
			"id"=>$id,
			
		);
		$where=array('id'=>$id);
		$res=$this->Apd_a552_model->rubah('pembimbing_skripsi',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a552_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

 public function tambah(){
 	$this->model_squrity->getsqurity();
 	$this->load->view('User/Butir5/inputan_552.php');
 }

 public function do_tambah(){
		$this->model_squrity->getsqurity();
		
		$id=$_POST['id'];
		$nama_dosen=$_POST['nama_dosen'];
		$jml_mhs=$_POST['jml_mhs'];
		
		$data_insert=array(
			
			'id'=>$id,
			'nama_dosen'=>$nama_dosen,
			'kd_prodi'=>'P001',
			'jml_mhs' => $jml_mhs,

		);
		// print_r($data_insert);die();
		$res=$this->Apd_a552_model->insert('pembimbing_skripsi',$data_insert);
		if ($res>=1) {
			redirect('Apd_a552_excel');
		}else {
			alert('Gagal Insert');
		}
}


public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir',
 // 'a552' => $this->apd_a552_model->listing());
 $data=$this->Apd_a552_model->listing();
 $totalmahasiswa=$this->Apd_a552_model->totmahasiswa();
 $this->load->view('User/Butir5/tampilan_borang5.5.2_excel.php',array('data'=>$data,
																'totmahasiswa'=>$totalmahasiswa));
 
 }

}