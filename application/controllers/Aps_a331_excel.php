<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a331_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a331_model');
 // }

public function index() {
	$data=$this->Aps_a331_model->listing();
	$sangatbaik=$this->Aps_a331_model->sangatbaik();
	$baik=$this->Aps_a331_model->baik();
	$cukup=$this->Aps_a331_model->cukup();
	$kurang=$this->Aps_a331_model->kurang();
	$waktu=$this->Aps_a331_model->waktu();
	$persen=$this->Aps_a331_model->persen();

 $this->load->view('Users/Butir3/tampilan_borang3.3.1.php',array('data'=>$data,
																'sangatbaik'=>$sangatbaik,
																'baik'=>$baik,
																'cukup'=>$cukup,
																'kurang'=>$kurang,
																'waktu'=>$waktu,
																'persen'=>$persen));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a331_model->update("where id='$id'");
	$data=array(
		"sangat_baik"=>$res[0]['sangat_baik'],
		"baik"=>$res[0]['baik'],
		"cukup"=>$res[0]['cukup'],
		"kurang"=>$res[0]['kurang'],
		"rencana"=>$res[0]['rencana'],
		"jenis_kemampuan"=>$res[0]['jenis_kemampuan'],
		"id"=>$res[0]['id'],
		
	);
 	$this->load->view('Users/Butir3/edit_borang3.3.1.php',$data);
 }

 public function do_edit(){
		$rencana=$_POST['rencana'];
		$id=$_POST['id'];
		$data_update=array(
			"rencana"=>$rencana,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a331_model->rubah('evaluasi_lulusan',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a331_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}
public function ubahwaktu($id_prodi){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a331_model->updatewaktu("where id_prodi='$id_prodi'");
	$data=array(
		"waktu"=>$res[0]['waktu'],
		"id_prodi"=>$res[0]['id_prodi'],
	);
 	$this->load->view('Users/Butir3/edit_borang3.3.1_waktu.php',$data);
 }

public function do_editwaktu(){
		$waktu=$_POST['waktu'];
		$id=$_POST['id_prodi'];
		
		$data_update=array(
			"waktu"=>$waktu,
			
			
		);
		$where=array('id_prodi'=>$id_prodi);
		$res=$this->Aps_a331_model->rubah('wkt_tunggu_llsn',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a331_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function ubahpersen($id_prodi){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a331_model->updatepersen("where id_prodi='$id_prodi'");
	$data=array(
		"persen"=>$res[0]['persen'],
		"id_prodi"=>$res[0]['id_prodi'],
	);
 	$this->load->view('Users/Butir3/edit_borang3.3.1_persen.php',$data);
 }

public function do_editpersen(){
		$persen=$_POST['persen'];
		$id=$_POST['id_prodi'];
		
		$data_update=array(
			"persen"=>$persen,
			
			
		);
		$where=array('id_prodi'=>$id_prodi);
		$res=$this->Aps_a331_model->rubah('persentase_llsn',$data_update,$where);
		 print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a331_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
	$data=$this->Aps_a331_model->listing();
	$sangatbaik=$this->Aps_a331_model->sangatbaik();
	$baik=$this->Aps_a331_model->baik();
	$cukup=$this->Aps_a331_model->cukup();
	$kurang=$this->Aps_a331_model->kurang();
	$waktu=$this->Aps_a331_model->waktu();
	$persen=$this->Aps_a331_model->persen();

 $this->load->view('Users/Butir3/tampilan_borang3.3.1_excel.php',array('data'=>$data,
																'sangatbaik'=>$sangatbaik,
																'baik'=>$baik,
																'cukup'=>$cukup,
																'kurang'=>$kurang,
																'waktu'=>$waktu,
																'persen'=>$persen));
 }


}