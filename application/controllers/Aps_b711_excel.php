<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b711_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_b711_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 7.1.1 : PENELITIAN',
 // 'b711' => $this->Aps_b711_model->listing());
 $data=$this->Aps_b711_model->listing();
 $total=$this->Aps_b711_model->total();
 $this->load->view('Users/Butir7B/tampilan_borang7.1.1.php',array('data'=>$data,
																'total'=>$total));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
 	$res=$this->Aps_b711_model->update("where id='$id'");
 	$data=array(
 			"jurusan"=>$res[0]['jurusan'],
			"Tot_Ts2"=>$res[0]['Tot_Ts2'],
			"Tot_Ts1"=>$res[0]['Tot_Ts1'],
			"Tot_Ts"=>$res[0]['Tot_Ts'],
			"Dana_penelitian"=>$res[0]['Dana_penelitian'],
			"Jum_Dana2015"=>$res[0]['Jum_Dana2015'],
			"Jum_Dana2016"=>$res[0]['Jum_Dana2016'],
			"id"=>$res[0]['id']
		);
 	$this->load->view('Users/Butir7B/edit_borang7.1.1.php',$data);
 }

 public function do_edit(){
 		$jurusan=$_POST['jurusan'];
		$Tot_Ts2=$_POST['Tot_Ts2'];
		$Tot_Ts1=$_POST['Tot_Ts1'];
		$Tot_Ts=$_POST['Tot_Ts'];
		$Dana_penelitian=$_POST['Dana_penelitian'];
		$Jum_Dana2015=$_POST['Jum_Dana2015'];
		$Jum_Dana2016=$_POST['Jum_Dana2016'];
		$id=$_POST['id'];
		
		$data_update=array(
		
			"Tot_Ts2"=>$Tot_Ts2,
			"Tot_Ts1"=>$Tot_Ts1,
			"Tot_Ts"=>$Tot_Ts,
			"Dana_penelitian"=>$Dana_penelitian,
			"Jum_Dana2015"=>$Jum_Dana2015,
			"Jum_Dana2016"=>$Jum_Dana2016,
			"id"=>$id,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_b711_model->rubah('penelitian_dosen',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_b711_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 $data=$this->Aps_b711_model->listing();
 $total=$this->Aps_b711_model->total();
 $this->load->view('Users/Butir7B/tampilan_borang7.1.1_excel.php',array('data'=>$data,
																'total'=>$total));

 
 }

}