<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a721_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a721_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 7.2.1 : KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT (PKM)',
 // 'a721' => $this->apd_a721_model->listing());
 $data=$this->Apd_a721_model->dosen();
 $bersangkutan=$this->Apd_a721_model->bersangkutan();
 $kemristekdikti=$this->Apd_a721_model->kemristekdikti();
 $luarkemristekdikti=$this->Apd_a721_model->luarkemristekdikti();
 $luarnegeri=$this->Apd_a721_model->luarnegeri();
 $jml=$this->Apd_a721_model->jml();
 $this->load->view('User/Butir7/tampilan_borang7.2.1.php',array('data'=>$data,
																'bersangkutan'=>$bersangkutan,
																'kemristekdikti'=>$kemristekdikti,
																'luarkemristekdikti'=>$luarkemristekdikti,
																'luarnegeri'=>$luarnegeri,
																'jml'=>$jml));
 }

 public function ubah($KD_JNS){
 	$this->model_squrity->getsqurity();
 	$res=$this->Apd_a721_model->update("where KD_JNS='$KD_JNS'");
 	$data=array(
			"TS_2"=>$res[0]['TS_2'],
			"TS_1"=>$res[0]['TS_1'],
			"TS"=>$res[0]['TS'],
			"JML"=>$res[0]['JML'],
			"KD_JNS"=>$res[0]['KD_JNS'],
			
		);
 	if ($KD_JNS == 1) {
 		$this->load->view('User/Butir7/edit_borang7.2.1.php',$data);
 	}else if ($KD_JNS == 2) {
 		$this->load->view('User/Butir7/edit_borang7.2.1(2).php',$data);
 	}else if ($KD_JNS == 3) {
 		$this->load->view('User/Butir7/edit_borang7.2.1(3).php',$data);
 	}else if ($KD_JNS == 4) {
 		$this->load->view('User/Butir7/edit_borang7.2.1(4).php',$data);
 	}else if ($KD_JNS == 5) {
 		$this->load->view('User/Butir7/edit_borang7.2.1(5).php',$data);
 	}
 	// $this->load->view('User/Butir7/edit_borang7.2.1.php',$data);
 }

 public function do_edit(){
		$TS_2=$_POST['TS_2'];
		$TS_1=$_POST['TS_1'];
		$TS=$_POST['TS'];
		$JML=$_POST['JML'];
		$KD_JNS=$_POST['KD_JNS'];
		
		$data_update=array(
			
			"TS_2"=>$TS_2,
			"TS_1"=>$TS_1,
			"TS"=>$TS,
			"KD_JNS"=>$KD_JNS,
			
		);
		$where=array('KD_JNS'=>$KD_JNS);
		$res=$this->Apd_a721_model->rubah('kegiatan_pkm',$data_update,$where);
		if ($res>=1) {
			redirect('Apd_a721_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

	public function tambah(){
	 	$this->model_squrity->getsqurity();
	 	$this->load->view('User/Butir7/inputan_721.php');
	 }

 public function do_tambah(){
		$this->model_squrity->getsqurity();
		
		$id=$_POST['id'];
		$tahun=$_POST['tahun'];
		$judul_penelitian=$_POST['judul_penelitian'];

		$sumber_dana=$_POST['sumber_dana'];
		$jml_dana=$_POST['jml_dana'];
		
		$data_insert=array(
			
			'id'=>$id,
			'tahun'=>$tahun,
			'kd_prodi'=>'P001',
			'judul_penelitian' => $judul_penelitian,
			'sumber_dana' => $sumber_dana,
			'jml_dana' => $jml_dana,

		);
		// print_r($data_insert);die();
		$res=$this->Apd_a721_model->insert('dana_penelitian',$data_insert);
		if ($res>=1) {
			redirect('Apd_a721_excel');
		}else {
			alert('Gagal Insert');
		}
}


public function export_excel(){
 $data=$this->Apd_a721_model->dosen();
 $bersangkutan=$this->Apd_a721_model->bersangkutan();
 $kemristekdikti=$this->Apd_a721_model->kemristekdikti();
 $luarkemristekdikti=$this->Apd_a721_model->luarkemristekdikti();
 $luarnegeri=$this->Apd_a721_model->luarnegeri();
 $jml=$this->Apd_a721_model->jml();
 $this->load->view('User/Butir7/tampilan_borang7.2.1_excel.php',array('data'=>$data,
																'bersangkutan'=>$bersangkutan,
																'kemristekdikti'=>$kemristekdikti,
																'luarkemristekdikti'=>$luarkemristekdikti,
																'luarnegeri'=>$luarnegeri,
																'jml'=>$jml)); 
 }

}