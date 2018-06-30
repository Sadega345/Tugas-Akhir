<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b312_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_b312_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 3.1.2 : MAHASISWA DAN LULUSAN',
 // 'b312' => $this->Aps_b312_model->listing());
 $prodi=$this->Aps_b312_model->GetProdi();
 $total1=$this->Aps_b312_model->total1();
 $data1=$this->Aps_b312_model->listing1();
 $total2=$this->Aps_b312_model->total2();
 $data2=$this->Aps_b312_model->listing2();
 $total3=$this->Aps_b312_model->total3();
 $data3=$this->Aps_b312_model->listing3();
 $this->load->view('Users/Butir3B/tampilan_borang3.1.2.php',array('prodi' => $prodi,
																'total1'=>$total1,
																'data1'=>$data1,
																'total2'=>$total2,
																'data2'=>$data2,
																'total3'=>$total3,
																'data3'=>$data3));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_b312_model->update("where id='$id'");
	
	$data=array(
		"j_tot_reg_bkn_trf"=>$res[0]['j_tot_reg_bkn_trf'],
		"j_maba_trf"=>$res[0]['j_maba_trf'],
		"j_maba_reg_bkn_trf"=>$res[0]['j_maba_reg_bkn_trf'],
		"id"=>$res[0]['id'],
		
	);

	// $data2=array(
	// 	"j_maba_trf"=>$res[0]['j_maba_trf'],
	// 	"id"=>$res[0]['id'],
	// );

	// $data3=array(
	// 	"j_maba_reg_bkn_trf"=>$res[0]['j_maba_reg_bkn_trf'],
	// 	"id"=>$res[0]['id'],
	// );

	if ($id==1) {
		$this->load->view('Users/Butir3B/edit_borang3.1.2.php',$data);
	}else if ($id==5) {
		$this->load->view('Users/Butir3B/edit_borang3.1.2(2).php',$data);
	}else if ($id==3) {
		$this->load->view('Users/Butir3B/edit_borang3.1.2(3).php',$data);
	}
 	
 }

 public function do_edit(){
		$j_tot_reg_bkn_trf=$_POST['j_tot_reg_bkn_trf'];
		$j_maba_reg_bkn_trf=$_POST['j_maba_reg_bkn_trf'];
		$j_maba_trf=$_POST['j_maba_trf'];
		$id=$_POST['id'];
		
		$data_update=array(
			"j_tot_reg_bkn_trf"=>$j_tot_reg_bkn_trf,
			"j_maba_reg_bkn_trf"=>$j_maba_reg_bkn_trf,
			"j_maba_trf"=>$j_maba_trf,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_b312_model->rubah('data_mhs',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_b312_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
  $prodi=$this->Aps_b312_model->GetProdi();
 $total1=$this->Aps_b312_model->total1();
 $data1=$this->Aps_b312_model->listing1();
 $total2=$this->Aps_b312_model->total2();
 $data2=$this->Aps_b312_model->listing2();
 $total3=$this->Aps_b312_model->total3();
 $data3=$this->Aps_b312_model->listing3();
 $this->load->view('Users/Butir3B/tampilan_borang3.1.2_excel.php',array('prodi' => $prodi,
																'total1'=>$total1,
																'data1'=>$data1,
																'total2'=>$total2,
																'data2'=>$data2,
																'total3'=>$total3,
																'data3'=>$data3));
 }

}