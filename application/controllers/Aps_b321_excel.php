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
		// "rata_masa_std"=>$res[0]['rata_masa_std'],
		// "rata_ipk"=>$res[0]['rata_ipk'],
		"keterangan"=>$res[0]['keterangan'],
		"id"=>$res[0]['id'],
		
	);
 	$this->load->view('Users/Butir3B/edit_borang3.2.1.php',$data);
 }

  public function do_edit(){
		$keterangan=$_POST['keterangan'];
		$id=$_POST['id'];
		
		$data_update=array(
			"keterangan"=>$keterangan,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_b321_model->rubah('masastudi_ipk',$data_update,$where);
		// print_r($data_update);die;
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