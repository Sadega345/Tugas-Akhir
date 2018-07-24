<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6412_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('aps_a6412_model');
 // }

public function index() {
$row1=$this->Aps_a6412_model->row1();
$row2=$this->Aps_a6412_model->row2();
$data1=$this->Aps_a6412_model->data1();
$data2=$this->Aps_a6412_model->data2();
$this->load->view('Users/Butir6/tampilan_borang6.4.1.2.php',array('row1' => $row1,
																  'row2'=>$row2,
																  'data1'=>$data1,
																  'data2'=>$data2));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a6412_model->update("where id='$id'");
	$data=array(
		"nm_jurnal"=>$res[0]['nm_jurnal'],
		"id"=>$res[0]['id'],
		"rincian"=>$res[0]['rincian'],
		"jml"=>$res[0]['jml'],
		
	);
 	$this->load->view('Users/Butir6/edit_borang6.4.1.2.php',$data);
 }

 public function do_edit(){
		$nm_jurnal=$_POST['nm_jurnal'];
		$rincian=$_POST['rincian'];
		$jml=$_POST['jml'];
		$id=$_POST['id'];
		
		$data_update=array(
			"nm_jurnal"=>$nm_jurnal,
			"rincian"=>$rincian,
			"jml"=>$jml,
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die;
		$res=$this->Aps_a6412_model->rubah('jurnal',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			
			redirect('Aps_a6412_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 
 $row1=$this->Aps_a6412_model->row1();
$row2=$this->Aps_a6412_model->row2();
$data1=$this->Aps_a6412_model->data1();
$data2=$this->Aps_a6412_model->data2();
$this->load->view('Users/Butir6/tampilan_borang6.4.1.2_excel.php',array('row1' => $row1,
																  'row2'=>$row2,
																  'data1'=>$data1,
																  'data2'=>$data2));
 }

}