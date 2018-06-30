<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a341_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a341_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN',
 // 'a341' => $this->apd_a341_model->listing());
	$data=$this->Apd_a341_model->listing();
	$sangatbaik=$this->Apd_a341_model->sangatbaik();
	$baik=$this->Apd_a341_model->baik();
	$cukup=$this->Apd_a341_model->cukup();
	$kurang=$this->Apd_a341_model->kurang();
	$waktu=$this->Apd_a341_model->waktu();
	$persen=$this->Apd_a341_model->persen();

 $this->load->view('User/Butir3/tampilan_borang3.4.1.php',array('data'=>$data,
																'sangatbaik'=>$sangatbaik,
																'baik'=>$baik,
																'cukup'=>$cukup,
																'kurang'=>$kurang,
																'waktu'=>$waktu,
																'persen'=>$persen));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a341_model->update("where id='$id'");
	$data=array(
		"sangat_baik"=>$res[0]['sangat_baik'],
		"baik"=>$res[0]['baik'],
		"cukup"=>$res[0]['cukup'],
		"kurang"=>$res[0]['kurang'],
		"rencana"=>$res[0]['rencana'],
		"jenis_kemampuan"=>$res[0]['jenis_kemampuan'],
		"id"=>$res[0]['id'],
		
	);
 	$this->load->view('User/Butir3/edit_borang3.4.1.php',$data);
 }

 public function do_edit(){
		$rencana=$_POST['rencana'];
		$id=$_POST['id'];
		$data_update=array(
			"rencana"=>$rencana,
			
		);
		$where=array('id'=>$id);
		$res=$this->Apd_a341_model->rubah('evaluasi_lulusan',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a341_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}
public function ubahwaktu($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a341_model->updatewaktu("where id='$id'");
	$data=array(
		"waktu"=>$res[0]['waktu'],
		"id_prodi"=>$res[0]['id_prodi'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('User/Butir3/edit_borang3.4.1_waktu.php',$data);
 }

public function do_editwaktu(){
		$waktu=$_POST['waktu'];
		$id=$_POST['id'];
		
		$data_update=array(
			"waktu"=>$waktu,
			
			
		);
		$where=array('id'=>$id);
		$res=$this->Apd_a341_model->rubah('wkt_tunggu_llsn',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a341_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function ubahpersen($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a341_model->updatepersen("where id='$id'");
	$data=array(
		"persen"=>$res[0]['persen'],
		"id_prodi"=>$res[0]['id_prodi'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('User/Butir3/edit_borang3.4.1_persen.php',$data);
 }

public function do_editpersen(){
		$persen=$_POST['persen'];
		$id=$_POST['id'];
		
		$data_update=array(
			"persen"=>$persen,
			
			
		);
		$where=array('id'=>$id);
		$res=$this->Apd_a341_model->rubah('persentase_llsn',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a341_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN',
 // 'a341' => $this->apd_a341_model->listing());
	$data=$this->Apd_a341_model->listing();
	$sangatbaik=$this->Apd_a341_model->sangatbaik();
	$baik=$this->Apd_a341_model->baik();
	$cukup=$this->Apd_a341_model->cukup();
	$kurang=$this->Apd_a341_model->kurang();
	$waktu=$this->Apd_a341_model->waktu();
	$persen=$this->Apd_a341_model->persen();

 $this->load->view('User/Butir3/tampilan_borang3.4.1_excel.php',array('data'=>$data,
																'sangatbaik'=>$sangatbaik,
																'baik'=>$baik,
																'cukup'=>$cukup,
																'kurang'=>$kurang,
																'waktu'=>$waktu,
																'persen'=>$persen));
 }

}