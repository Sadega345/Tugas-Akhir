<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b6112_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b6112_model');
 }

public function index() {
 $dana1=$this->Apd_b6112_model->listing1();
 $dana2=$this->Apd_b6112_model->listing2();
 $dana3=$this->Apd_b6112_model->listing3();
 $dana4=$this->Apd_b6112_model->listing4();
 $dana5=$this->Apd_b6112_model->listing5();
 $dana6=$this->Apd_b6112_model->listing6();
 $jmldanaopr=$this->Apd_b6112_model->jmldanaopr();
 $jmldanainv=$this->Apd_b6112_model->jmldanainv();
 $jmldanagab=$this->Apd_b6112_model->jmldanagab();
 $this->load->view('User/Butir6B/tampilan_borang6.1.1.2.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jmldanaopr'=>$jmldanaopr,
 																  'jmldanainv'=>$jmldanainv,
 																  'jmldanagab'=>$jmldanagab
																  )); 

 }

 public function ubah(){
 	$this->load->view('User/Butir6B/tampilan_borang6.1.1.2.php');
 }

 public function tambah(){
 	$this->model_squrity->getsqurity();
 	$this->load->view('User/Butir6B/inputan_6112.php');
 }

 public function do_tambah(){
		$this->model_squrity->getsqurity();
		
		$id=$_POST['id'];
		$tahun=$_POST['tahun'];
		$judul_penelitian=$_POST['judul_penelitian'];

		$sumber_dana=$_POST['sumber_dana'];
		$jml_dana=$_POST['jml_dana'];
		
		$data_insert=array(
			
			'id'=>$id,
			'tahun'=>$tahun,
			'kd_prodi'=>'P001',
			'judul_penelitian' => $judul_penelitian,
			'sumber_dana' => $sumber_dana,
			'jml_dana' => $jml_dana,

		);
		// print_r($data_insert);die();
		$res=$this->Apd_a6112_model->insert('penggunaan_dana',$data_insert);
		if ($res>=1) {
			
			redirect('Apd_b6112_excel');
		}else {
			alert('Gagal Insert');
		}
}


public function export_excel(){
 $dana1=$this->Apd_b6112_model->listing1();
 $dana2=$this->Apd_b6112_model->listing2();
 $dana3=$this->Apd_b6112_model->listing3();
 $dana4=$this->Apd_b6112_model->listing4();
 $dana5=$this->Apd_b6112_model->listing5();
 $dana6=$this->Apd_b6112_model->listing6();
 $jmldanaopr=$this->Apd_b6112_model->jmldanaopr();
 $jmldanainv=$this->Apd_b6112_model->jmldanainv();
 $jmldanagab=$this->Apd_b6112_model->jmldanagab();
 $this->load->view('User/Butir6B/tampilan_borang6.1.1.2_excel.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jmldanaopr'=>$jmldanaopr,
 																  'jmldanainv'=>$jmldanainv,
 																  'jmldanagab'=>$jmldanagab
																  )); 
 }

}