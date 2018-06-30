<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a641_excel extends CI_Controller {


public function index() {
 $pustaka1=$this->Aps_a641_model->listing1();
 $totaljudul=$this->Aps_a641_model->totjudul();
 $totalkopi=$this->Aps_a641_model->totkopi();
 $this->load->view('Users/Butir6/tampilan_borang6.4.1.php',array('pustaka1'=>$pustaka1,
 																'totjudul'=>$totaljudul,
																'totkopi'=>$totalkopi));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a641_model->update("where id='$id'");
	$data=array(
		"jenis_pustaka"=>$res[0]['jenis_pustaka'],
		"id"=>$res[0]['id'],
		"jml_judul"=>$res[0]['jml_judul'],
		"jml_copy"=>$res[0]['jml_copy'],
		
	);
 	$this->load->view('Users/Butir6/edit_borang6.4.1.php',$data);
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
		$res=$this->Aps_a641_model->rubah('pustaka',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a641_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.4.1 : Pustaka ',
 // 'a641' => $this->Aps_a641_model->listing());
 $pustaka1=$this->Aps_a641_model->listing1();
 $totaljudul=$this->Aps_a641_model->totjudul();
 $totalkopi=$this->Aps_a641_model->totkopi();
 $this->load->view('Users/Butir6/tampilan_borang6.4.1_excel.php',array('pustaka1'=>$pustaka1,
 																'totjudul'=>$totaljudul,
																'totkopi'=>$totalkopi));
 
 
 }

}