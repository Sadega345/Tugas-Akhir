<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b321_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_b321_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 3.2.1 : MAHASISWA DAN LULUSAN',
 // 'b321' => $this->Aps_b321_model->listing());
$masastudi=$this->Aps_b321_model->masastudi();
$rata=$this->Aps_b321_model->rata();
$this->load->view('Users/Butir3B/tampilan_borang3.2.1.php',array('masastudi'=>$masastudi,
																'rata'=>$rata));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_b321_model->update("where id='$id'");
	$data=array(
		"RATA_MASA_STD"=>$res[0]['RATA_MASA_STD'],
		"RATA_IPK"=>$res[0]['RATA_IPK'],
		// "keterangan"=>$res[0]['keterangan'],
		"id"=>$res[0]['id'],
		
	);
 	$this->load->view('Users/Butir3B/edit_borang3.2.1.php',$data);
 }

  public function do_edit(){
		// $keterangan=$_POST['keterangan'];
  		$rata_masa_std=$_POST['rata_masa_std'];
  		$rata_ipk=$_POST['rata_ipk'];
		$id=$_POST['id'];
		
		$data_update=array(
			"RATA_IPK"=>$rata_ipk,
			"RATA_MASA_STD"=>$rata_masa_std,
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die;
		$res=$this->Aps_b321_model->rubah('masastudi_ipk',$data_update,$where);
		
		if ($res>=1) {
			redirect('Aps_b321_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 $masastudi=$this->Aps_b321_model->masastudi();
$rata=$this->Aps_b321_model->rata();
 $this->load->view('Users/Butir3B/tampilan_borang3.2.1_excel.php',array('masastudi'=>$masastudi,
																'rata'=>$rata));
 }

}