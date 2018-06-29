<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a345_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a345_model');
 }

public function index() {
 // $data = array( 'title' => '  TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN',
 // 'a345' => $this->apd_a345_model->listing());
 $data1=$this->Apd_a345_model->listing1();
 $jml_wsd1=$this->Apd_a345_model->jml_wsd1();
 $data2=$this->Apd_a345_model->listing2();
 $jml_wsd2=$this->Apd_a345_model->jml_wsd2();
 $data3=$this->Apd_a345_model->listing3();
 $jml_wsd3=$this->Apd_a345_model->jml_wsd3();
 $data4=$this->Apd_a345_model->listing4();
 $jml_wsd4=$this->Apd_a345_model->jml_wsd4();
 $data=$this->Apd_a345_model->listing();
 $jml_wsd=$this->Apd_a345_model->jml_wsd();
 $jmllulusan_wsd=$this->Apd_a345_model->jmllulusan_wsd();
 $jml=$this->Apd_a345_model->jml();
 $this->load->view('User/Butir3/tampilan_borang3.4.5.php',array('data1'=>$data1,
 																 'jmllulusan_wsd'=>$jmllulusan_wsd,
 																 'data2'=>$data2,
 																 'data3'=>$data3,
 																 'data4'=>$data4,
 																 'data'=>$data,
 																 'jml_wsd'=>$jml_wsd,
 																 'jml_wsd1'=>$jml_wsd1,
 																 'jml_wsd2'=>$jml_wsd2,
 																 'jml_wsd3'=>$jml_wsd3,
 																 'jml_wsd4'=>$jml_wsd4,
 																 'jml'=>$jml));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a345_model->update("where id='$id'");
	$data=array(
		"j_lulusan_psn"=>$res[0]['j_lulusan_psn'],
		"j_lulusan_terima"=>$res[0]['j_lulusan_terima'],
		"id"=>$res[0]['id'],
		"instansi"=>$res[0]['instansi'],
		
	);
 	$this->load->view('User/Butir3/edit_borang3.4.5.php',$data);
 }

 public function do_edit(){
		$instansi=$_POST['instansi'];
		$j_lulusan_psn=$_POST['j_lulusan_psn'];
		$j_lulusan_terima=$_POST['j_lulusan_terima'];
		$id=$_POST['id'];
		
		$data_update=array(
			"instansi"=>$instansi,
			"j_lulusan_psn"=>$j_lulusan_psn,
			"j_lulusan_terima"=>$j_lulusan_terima,
			
		);
		$where=array('id'=>$id);
		$res=$this->apd_a345_model->rubah('instansi_lulusan',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a345_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 $data1=$this->Apd_a345_model->listing1();
 $jml_wsd1=$this->Apd_a345_model->jml_wsd1();
 $data2=$this->Apd_a345_model->listing2();
 $jml_wsd2=$this->Apd_a345_model->jml_wsd2();
 $data3=$this->Apd_a345_model->listing3();
 $jml_wsd3=$this->Apd_a345_model->jml_wsd3();
 $data4=$this->Apd_a345_model->listing4();
 $jml_wsd4=$this->Apd_a345_model->jml_wsd4();
 $data=$this->Apd_a345_model->listing();
 $jml_wsd=$this->Apd_a345_model->jml_wsd();
 $jmllulusan_wsd=$this->Apd_a345_model->jmllulusan_wsd();
 $jml=$this->Apd_a345_model->jml();
 $this->load->view('User/Butir3/tampilan_borang3.4.5_excel.php',array('data1'=>$data1,
 																 'jmllulusan_wsd'=>$jmllulusan_wsd,
 																 'data2'=>$data2,
 																 'data3'=>$data3,
 																 'data4'=>$data4,
 																 'data'=>$data,
 																 'jml_wsd'=>$jml_wsd,
 																 'jml_wsd1'=>$jml_wsd1,
 																 'jml_wsd2'=>$jml_wsd2,
 																 'jml_wsd3'=>$jml_wsd3,
 																 'jml_wsd4'=>$jml_wsd4,
 																 'jml'=>$jml));
 }

}