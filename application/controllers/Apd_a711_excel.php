<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a711_excel extends CI_Controller {

// Load database 

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 7.1.1 : PENELITIAN DOSEN TETAP',
 // 'a711' => $this->apd_a711_model->listing());
 $data1=$this->Apd_a711_model->listing1();
 $data2=$this->Apd_a711_model->listing2();
 $data3=$this->Apd_a711_model->listing3();
 $data4=$this->Apd_a711_model->listing4();
 $data5=$this->Apd_a711_model->listing5();
 $totTs2=$this->Apd_a711_model->totTs2();
 $totTs1=$this->Apd_a711_model->totTs1();
 $totTs=$this->Apd_a711_model->totTs();
 $jml=$this->Apd_a711_model->jml();
 $this->load->view('User/Butir7/tampilan_borang7.1.1.php',array('data1'=>$data1,
 																'data2'=>$data2,
 																'data3'=>$data3,
 																'data4'=>$data4,
 																'data5'=>$data5,
																'totTs2'=>$totTs2,
																'totTs1'=>$totTs1,
																'totTs'=>$totTs,
																'jml'=>$jml));
 }


 public function ubah($id,$kd_jns){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a711_model->update("where id='$id' and kd_jns='$kd_jns'");
	$data=array(
		"sumber_pembiayaan"=>$res[0]['sumber_pembiayaan'],
		"id"=>$res[0]['id'],
		"kd_jns"=>$res[0]['kd_jns'],
		"ts_2"=>$res[0]['ts_2'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
		"jml"=>$res[0]['jml'],
	);

 	$this->load->view('User/Butir7/edit_borang7.1.1.php',$data);
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
		// print_r($data_update);die();
		$res=$this->Apd_a711_model->rubah('penelitian_dosen',$data_update,$where);
		
		if ($res>=1) {
			redirect('Apd_a711_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
$data1=$this->Apd_a711_model->listing1();
 $data2=$this->Apd_a711_model->listing2();
 $data3=$this->Apd_a711_model->listing3();
 $data4=$this->Apd_a711_model->listing4();
 $data5=$this->Apd_a711_model->listing5();
 $totTs2=$this->Apd_a711_model->totTs2();
 $totTs1=$this->Apd_a711_model->totTs1();
 $totTs=$this->Apd_a711_model->totTs();
 $jml=$this->Apd_a711_model->jml();

 $this->load->view('User/Butir7/tampilan_borang7.1.1.php',array('data1'=>$data1,
 																'data2'=>$data2,
 																'data3'=>$data3,
 																'data4'=>$data4,
 																'data5'=>$data5,
																'totTs2'=>$totTs2,
																'totTs1'=>$totTs1,
																'totTs'=>$totTs,
																'jml'=>$jml));
 }

}