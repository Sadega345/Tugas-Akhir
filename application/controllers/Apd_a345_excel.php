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
 $row1=$this->Apd_a345_model->row1();
 $row2=$this->Apd_a345_model->row2();
 $row3=$this->Apd_a345_model->row3();
 $row4=$this->Apd_a345_model->row4();
 $row5=$this->Apd_a345_model->row5();
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
 																 'jml'=>$jml,
 																 'row1'=>$row1,
 																 'row2'=>$row2,
 																 'row3'=>$row3,
 																 'row4'=>$row4,
 																 'row5'=>$row5));
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
 $row1=$this->Apd_a345_model->row1();
  $row2=$this->Apd_a345_model->row2();
 $row3=$this->Apd_a345_model->row3();
 $row4=$this->Apd_a345_model->row4();
 $row5=$this->Apd_a345_model->row5();
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
 																 'jml'=>$jml,
 																 'row1'=>$row1,
 																 'row2'=>$row2,
 																 'row3'=>$row3,
 																 'row4'=>$row4,
 																 'row5'=>$row5));
 }

  public function tambah(){
		$this->load->view('User/Butir3/inputan_borang3.4.5.php');
 }

 public function do_tambah(){
		$this->model_squrity->getsqurity();
		//$id=$_POST['id'];
		$id_ts=$_POST['tahun'];
		$instansi=$_POST['instansi'];
		$j_lulusan_psn=$_POST['j_lulusan_psn'];
		$j_lulusan_terima=$_POST['j_lulusan_terima'];
		$data_insert=array(
			//'id' => $id,
			'id_ts' => $id_ts,
			'instansi' =>$instansi,
			'j_lulusan_psn'=>$j_lulusan_psn,
			'j_lulusan_terima'=>$j_lulusan_terima,
		);
		$res=$this->Apd_a345_model->insert('instansi_lulusan',$data_insert);
		if ($res>=1) {
			redirect('Apd_a345_excel');
		}else {
			alert('Gagal Insert');
		}
	}

	public function do_hapus($kode){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$kode);
		$res=$this->Apd_a345_model->Delete('instansi_lulusan',$where);
		if($res>=1){
			redirect('Apd_a345_excel');
		}else {
			alert('Gagal Hapus');
		}
	}


}