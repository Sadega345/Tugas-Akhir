<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a712_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a712_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 7.1.2 : JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU',
 // 'a712' => $this->apd_a712_model->listing());
 $data=$this->Apd_a712_model->listing();
 $lokal=$this->Apd_a712_model->lokal();
 $nasional=$this->Apd_a712_model->nasional();
 $internasional=$this->Apd_a712_model->internasional();

 $this->load->view('User/Butir7/tampilan_borang7.1.2.php',array('data'=>$data,
																'lokal'=>$lokal,
																'nasional'=>$nasional,
																'internasional'=>$internasional));

 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
 	$res=$this->Apd_a712_model->update("where id='$id'");
 	
 	$data=array(
			"JUDUL"=>$res[0]['JUDUL'],
			"nama_dosen"=>$res[0]['nama_dosen'],
			"publikasi"=>$res[0]['publikasi'],
			"thn_publikasi"=>$res[0]['thn_publikasi'],
			"lokal"=>$res[0]['lokal'],
			"nasional"=>$res[0]['nasional'],
			"internasional"=>$res[0]['internasional'],
			
			"id"=>$res[0]['id']
		);
 	$this->load->view('User/Butir7/edit_borang7.1.2.php',$data);
 }

 public function do_edit(){
		$JUDUL=$_POST['JUDUL'];
		$nama_dosen=$_POST['nama_dosen'];
		$publikasi=$_POST['publikasi'];
		$thn_publikasi=$_POST['thn_publikasi'];
		// $lokal=$_POST['lokal'];
		$lokal = $_POST['lokal'];
		$nasional=$_POST['nasional'];
		$internasional=$_POST['internasional'];
		// $banyak_dosen=$_POST['banyak_dosen'];
		$id=$_POST['id'];
		
		$data_update=array(
			// "NAMA_DOSEN"=>$NAMA_DOSEN,
			"JUDUL"=>$JUDUL,
			"nama_dosen"=>$nama_dosen,
			"publikasi"=>$publikasi,
			"thn_publikasi"=>$thn_publikasi,
			"lokal"=>$lokal,
			"nasional"=>$nasional,
			"internasional"=>$internasional,
			
			
		);
		$where=array('id'=>$id);
		print_r($data_update);die();
		$res=$this->Apd_a712_model->rubah('artikel_ilmiah',$data_update,$where);
		if ($res>=1) {
			redirect('Apd_a712_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

	public function tambah(){
	 	$this->model_squrity->getsqurity();
	 	$this->load->view('User/Butir7/inputan_712.php');
	 }

 public function do_tambah(){
		$this->model_squrity->getsqurity();
		
		$id=$_POST['id'];
		$judul=$_POST['judul'];
		$nama_dosen=$_POST['nama_dosen'];

		$publikasi=$_POST['publikasi'];
		$thn_publikasi=$_POST['thn_publikasi'];

		$lokal=$_POST['lokal'];
		$nasional=$_POST['nasional'];

		$internasional = $_POST['internasional'];
		
		$data_insert=array(
			
			'id'=>$id,
			'judul'=>$judul,
			'kd_prodi'=>'P001',
			'nama_dosen' => $nama_dosen,
			'publikasi' => $publikasi,
			'thn_publikasi' => $thn_publikasi,
			'lokal' => $lokal,
			'nasional' => $nasional,
			'internasional' => $internasional,

		);
		// print_r($data_insert);die();
		$res=$this->Apd_a712_model->insert('artikel_ilmiah',$data_insert);
		if ($res>=1) {
			redirect('Apd_a712_excel');
		}else {
			alert('Gagal Insert');
		}
}

public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Apd_a712_model->Delete('artikel_ilmiah',$where);
		if($res>=1){
			redirect('Apd_a712_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

public function export_excel(){
 $data=$this->Apd_a712_model->listing();
 $lokal=$this->Apd_a712_model->lokal();
 $nasional=$this->Apd_a712_model->nasional();
 $internasional=$this->Apd_a712_model->internasional();

 $this->load->view('User/Butir7/tampilan_borang7.1.2_excel.php',array('data'=>$data,
																'lokal'=>$lokal,
																'nasional'=>$nasional,
																'internasional'=>$internasional));
 
 }

}