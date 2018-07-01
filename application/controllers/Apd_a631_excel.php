<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a631_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a631_model');
 // }

public function index() {
 $ruang1=$this->Apd_a631_model->listing();
 $totalluas=$this->Apd_a631_model->totluas();
 $this->load->view('User/Butir6/tampilan_borang6.3.1.php',array('ruang1'=>$ruang1,
 																'totluas'=>$totalluas));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a631_model->update("where id='$id'");
	$data=array(
		"r_kerja_dosen"=>$res[0]['r_kerja_dosen'],
		"id"=>$res[0]['id'],
		"jml_ruang"=>$res[0]['jml_ruang'],
		"jml_luas"=>$res[0]['jml_luas'],
	);
 	$this->load->view('User/Butir6/edit_borang6.3.1.php',$data);
 }

 public function do_edit(){
		
		$id=$_POST['id'];
		$jml_ruang=$_POST['jml_ruang'];
		$jml_luas=$_POST['jml_luas'];
		
		$data_update=array(
			"id"=>$id,
			"jml_ruang"=>$jml_ruang,
			"jml_luas"=>$jml_luas,
			
		);
		$where=array('id'=>$id);
		$res=$this->Apd_a631_model->rubah('dt_ruang_dosen',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a631_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

	public function tambah(){
	 	$this->model_squrity->getsqurity();
	 	$this->load->view('User/Butir6/inputan_631.php');
 	}

 public function do_tambah(){
		$this->model_squrity->getsqurity();
		
		$id=$_POST['id'];
		$r_kerja_dosen=$_POST['r_kerja_dosen'];
		$jml_ruang=$_POST['jml_ruang'];

		$jml_luas=$_POST['jml_luas'];
		
		$data_insert=array(
			
			'id'=>$id,
			'r_kerja_dosen'=>$r_kerja_dosen,
			'kd_prodi'=>'P001',
			'jml_ruang' => $jml_ruang,
			'jml_luas' => $jml_luas,
			

		);
		// print_r($data_insert);die();
		$res=$this->Apd_a631_model->insert('dt_ruang_dosen',$data_insert);
		if ($res>=1) {
			redirect('Apd_a631_excel');
		}else {
			alert('Gagal Insert');
		}
}


public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP',
 // 'a631' => $this->apd_a631_model->listing());
	$ruang1=$this->Apd_a631_model->listing();
 	$totalluas=$this->Apd_a631_model->totluas();
 $this->load->view('User/Butir6/tampilan_borang6.3.1_excel.php',array('ruang1'=>$ruang1,
 																	'totluas'=>$totalluas
 																));
 }

}