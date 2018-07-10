<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b412_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('Aps_b412_model');
 }

public function index() {
$total1=$this->Aps_b412_model->total1();
$total2=$this->Aps_b412_model->total2();
$banyak1=$this->Aps_b412_model->banyak1();
$banyak2=$this->Aps_b412_model->banyak2();
$prodi=$this->Aps_b412_model->getprodi();
$total=$this->Aps_b412_model->total();
$banyak=$this->Aps_b412_model->banyak();
$this->load->view('Users/Butir4B/tampilan_borang4.1.2.php',array('total1'=>$total1,
																'total2'=>$total2,
																'banyak1'=>$banyak1,
																'banyak2'=>$banyak2,
																'prodi'=>$prodi,
																'total'=>$total,
																'banyak'=>$banyak));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	// $res=$this->Aps_a622_model->update("where id='$id'");
	// $data=array(
	// 	"tahun"=>$res[0]['tahun'],
	// 	"id"=>$res[0]['id'],
	// 	"judul_penelitian"=>$res[0]['judul_penelitian'],
	// 	"sumber_dana"=>$res[0]['sumber_dana'],
	// 	"jml_dana"=>$res[0]['jml_dana'],
		
	// );
 // 	$this->load->view('User/Butir6/edit_borang6.2.2.php',$data);
 }

 public function do_edit(){
		// $tahun=$_POST['tahun'];
		// $id=$_POST['id'];
		// $judul_penelitian=$_POST['judul_penelitian'];
		// $sumber_dana=$_POST['sumber_dana'];
		// $jml_dana=$_POST['jml_dana'];
		
		// $data_update=array(
		// 	"id"=>$id,
		// 	"sumber_dana"=>$sumber_dana,
		// 	"jml_dana"=>$jml_dana,
			
		// );
		// $where=array('id'=>$id);
		// $res=$this->Apd_a622_model->rubah('dana_penelitian',$data_update,$where);
		// // print_r($data_update);die;
		// if ($res>=1) {
		// 	redirect('Apd_a622_excel');
		// }
		// // else {
		// // 	alert("Gagal Update") ;
		// // }
	}


public function export_excel(){
$total1=$this->Aps_b412_model->total1();
$total2=$this->Aps_b412_model->total2();
$banyak1=$this->Aps_b412_model->banyak1();
$banyak2=$this->Aps_b412_model->banyak2();
$prodi=$this->Aps_b412_model->getprodi();
$this->load->view('Users/Butir4B/tampilan_borang4.1.2_excel.php',array('total1'=>$total1,
																'total2'=>$total2,
																'banyak1'=>$banyak1,
																'banyak2'=>$banyak2,
																'prodi'=>$prodi));
 }

}