<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6411_excel extends CI_Controller {

//  Load database
//  public function __construct() {
//  parent::__construct();
//  $this->load->model('aps_a6411_model');
//  }

public function index() {
 $data=$this->Aps_a6411_model->listing();
 $total=$this->Aps_a6411_model->total();
 $this->load->view('Users/Butir6/tampilan_borang6.4.1.1.php',array('data'=>$data,
 																	'total'=>$total
 																));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a6411_model->update("where id='$id'");
	$data=array(
		"jenis_pustaka"=>$res[0]['jenis_pustaka'],
		"id"=>$res[0]['id'],
		"jml_judul"=>$res[0]['jml_judul'],
		"jml_copy"=>$res[0]['jml_copy'],
		
	);
 	$this->load->view('Users/Butir6/edit_borang6.4.1.1.php',$data);
 }

 public function do_edit(){
		$jenis_pustaka=$_POST['jenis_pustaka'];
		$jml_judul=$_POST['jml_judul'];
		$jml_copy=$_POST['jml_copy'];
		$id=$_POST['id'];
		
		$data_update=array(
			"jml_judul"=>$jml_judul,
			"jml_copy"=>$jml_copy,
			"id"=>$id,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a6411_model->rubah('pustaka',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			
			redirect('Aps_a6411_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

	public function tambah(){
	 	$this->model_squrity->getsqurity();
	 	$this->load->view('Users/Butir6/inputan_641.php');
 	}

 public function do_tambah(){
		$this->model_squrity->getsqurity();
		
		$id=$_POST['id'];
		$jenis_pustaka=$_POST['jenis_pustaka'];
		$jml_judul=$_POST['jml_judul'];

		$jml_copy=$_POST['jml_copy'];
		
		
		$data_insert=array(
			
			'id'=>$id,
			'jenis_pustaka'=>$jenis_pustaka,
			'kd_prodi'=>'P001',
			'jml_judul' => $jml_judul,
			'jml_copy' => $jml_copy,
			

		);
		// print_r($data_insert);die();
		$res=$this->Aps_a6411_model->insert('pustaka',$data_insert);
		if ($res>=1) {
			redirect('Aps_a6411_excel');
		}else {
			alert('Gagal Insert');
		}
}

public function export_excel(){

 $data=$this->Aps_a6411_model->listing();
 $total=$this->Aps_a6411_model->total();
 $this->load->view('Users/Butir6/tampilan_borang6.4.1.1_excel.php',array('data'=>$data, 
 																		'total'=>$total
 																	));
 }

}