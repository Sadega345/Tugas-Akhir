<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a711_excel extends CI_Controller {

// Load database 

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 7.1.1 : PENELITIAN DOSEN TETAP',
 // 'a711' => $this->Aps_a711_model->listing());
 $data=$this->Aps_a711_model->listing();
 $totTs2=$this->Aps_a711_model->totTs2();
 $totTs1=$this->Aps_a711_model->totTs1();
 $totTs=$this->Aps_a711_model->totTs();

 $peneliti=$this->Aps_a711_model->peneliti();
 $bersangkutan=$this->Aps_a711_model->bersangkutan();
 $kemristekdikti=$this->Aps_a711_model->kemristekdikti();
 $dalam=$this->Aps_a711_model->dalam();
 $luar=$this->Aps_a711_model->luar();
 $this->load->view('Users/Butir7/tampilan_borang7.1.1.php',array('data'=>$data,
																'totTs2'=>$totTs2,
																'totTs1'=>$totTs1,
																'totTs'=>$totTs,
																'peneliti'=>$peneliti,
																'bersangkutan'=>$bersangkutan,
																'kemristekdikti'=>$kemristekdikti,
																'dalam'=>$dalam,
																'luar'=>$luar));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a711_model->update("where id='$id'");
	$data=array(
		"TS_2"=>$res[0]['TS_2'],
		"TS_1"=>$res[0]['TS_1'],
		"TS"=>$res[0]['TS'],
		"sumber_pembiayaan"=>$res[0]['sumber_pembiayaan'],
		"id"=>$res[0]['id'],
		
	);
 	
 	$this->load->view('Users/Butir7/edit_borang7.1.1.php',$data);
 }

 public function do_edit(){
		$TS_2=$_POST['TS_2'];
		$TS_1=$_POST['TS_1'];
		$TS=$_POST['TS'];
		$id=$_POST['id'];
		
		$data_update=array(
			"TS_2"=>$TS_2,
			"TS_1"=>$TS_1,
			"TS"=>$TS,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a711_model->rubah('penelitian_dosen',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a711_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 $data=$this->Aps_a711_model->listing();
 $totTs2=$this->Aps_a711_model->totTs2();
 $totTs1=$this->Aps_a711_model->totTs1();
 $totTs=$this->Aps_a711_model->totTs();

 $peneliti=$this->Aps_a711_model->peneliti();
 $bersangkutan=$this->Aps_a711_model->bersangkutan();
 $kemristekdikti=$this->Aps_a711_model->kemristekdikti();
 $dalam=$this->Aps_a711_model->dalam();
 $luar=$this->Aps_a711_model->luar();
 $this->load->view('Users/Butir7/tampilan_borang7.1.1_excel.php',array('data'=>$data,
																'totTs2'=>$totTs2,
																'totTs1'=>$totTs1,
																'totTs'=>$totTs,
																'peneliti'=>$peneliti,
																'bersangkutan'=>$bersangkutan,
																'kemristekdikti'=>$kemristekdikti,
																'dalam'=>$dalam,
																'luar'=>$luar));
 }

}