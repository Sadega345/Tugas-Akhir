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

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_b6112_model->update("where id='$id'");
	$data=array(
		"ts_2"=>$res[0]['ts_2'],
		"id"=>$res[0]['id'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
	);


	if ($id==1) {
		$this->load->view('User/Butir6B/edit_borang6.1.1.2.php',$data);
	}else if ($id==2) {
		$this->load->view('User/Butir6B/edit_borang6.1.1.2(2).php',$data);
	}else if ($id==3) {
		$this->load->view('User/Butir6B/edit_borang6.1.1.2(3).php',$data);
	}else if ($id==4) {
		$this->load->view('User/Butir6B/edit_borang6.1.1.2(4).php',$data);
	}else if ($id==5) {
		$this->load->view('User/Butir6B/edit_borang6.1.1.2(5).php',$data);
	}else if ($id==6) {
		$this->load->view('User/Butir6B/edit_borang6.1.1.2(6).php',$data);
	}
 }

 public function do_edit(){
		$ts_2=$_POST['ts_2'];
		$ts_1=$_POST['ts_1'];
		$ts=$_POST['ts'];
		$id=$_POST['id'];
		
		$data_update=array(
			"ts_2"=>$ts_2,
			"ts_1"=>$ts_1,
			"ts"=>$ts,
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die;
		$res=$this->Apd_b6112_model->rubah('penggunaan_dana',$data_update,$where);
		
		if ($res>=1) {
			redirect('Apd_b6112_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
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