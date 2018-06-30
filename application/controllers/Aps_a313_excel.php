<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a313_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a313_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 // 'a313' => $this->Aps_a313_model->listing());
	$data=$this->Aps_a313_model->D4();
	$data3=$this->Aps_a313_model->D3();
	$data2=$this->Aps_a313_model->D2();
	$data1=$this->Aps_a313_model->D1();
	$total=$this->Aps_a313_model->jumlah();

 $this->load->view('Users/Butir3/tampilan_borang3.1.3.php',array('data'=>$data,
																'data3'=>$data3,
																'data2'=>$data2,
																'data1'=>$data1,
																'total'=>$total));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a313_model->update("where id='$id'");
	$data=array(
		"ts_4"=>$res[0]['ts_4'],
		"ts_3"=>$res[0]['ts_3'],
		"ts_2"=>$res[0]['ts_2'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
		"jml_ts_llsan"=>$res[0]['jml_ts_llsan'],
		"id"=>$res[0]['id'],
		
	);
	if ($id==1) {
		$this->load->view('Users/Butir3/edit_borang3.1.3(4).php',$data);
	}else if ($id==2) {
		$this->load->view('Users/Butir3/edit_borang3.1.3(3).php',$data);
	}else if ($id==3) {
		$this->load->view('Users/Butir3/edit_borang3.1.3(2).php',$data);
	}else if ($id==4) {
		$this->load->view('Users/Butir3/edit_borang3.1.3(1).php',$data);
	}else if ($id==5) {
		$this->load->view('Users/Butir3/edit_borang3.1.3_ts.php',$data);
	}
 	// $this->load->view('Users/Butir3/edit_borang3.1.3.php',$data);
 }

 public function do_edit(){
		$ts_4=$_POST['ts_4'];
		$ts_3=$_POST['ts_3'];
		$ts_2=$_POST['ts_2'];
		$ts_1=$_POST['ts_1'];
		$ts=$_POST['ts'];
		
		$id=$_POST['id'];
		
		$data_update=array(
			"ts_4"=>$ts_4,
			"ts_3"=>$ts_3,
			"ts_2"=>$ts_2,
			"ts_1"=>$ts_1,
			"ts"=>$ts,
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die;
		$res=$this->Aps_a313_model->rubah('data_mhs_angkatan',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a313_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 // 'a313' => $this->Aps_a313_model->listing());
 	$data=$this->Aps_a313_model->D4();
	$data3=$this->Aps_a313_model->D3();
	$data2=$this->Aps_a313_model->D2();
	$data1=$this->Aps_a313_model->D1();
	$total=$this->Aps_a313_model->jumlah();
 $this->load->view('Users/BUtir3/tampilan_borang3.1.3_excel.php',array('data'=>$data,
																	'data3'=>$data3,
																	'data2'=>$data2,
																	'data1'=>$data1,
																	'total'=>$total));
 }

}