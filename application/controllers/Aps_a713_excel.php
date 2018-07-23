<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a713_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a713_model');
 }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 7.1.2 : JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU',
 // 'a712' => $this->Aps_a713_model->listing());
 $data=$this->Aps_a713_model->listing();
 $lokal=$this->Aps_a713_model->lokal();
 $nasional=$this->Aps_a713_model->nasional();
 $internasional=$this->Aps_a713_model->internasional();

 $this->load->view('Users/Butir7/tampilan_borang7.1.3.php',array('data'=>$data,
																'lokal'=>$lokal,
																'nasional'=>$nasional,
																'internasional'=>$internasional));

 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
 	$res=$this->Aps_a713_model->update("where id='$id'");
 	
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
 	$this->load->view('Users/Butir7/edit_borang7.1.3.php',$data);
 }

 public function do_edit(){
		$JUDUL=$_POST['JUDUL'];
		$nama_dosen=$_POST['nama_dosen'];
		$publikasi=$_POST['publikasi'];
		$thn_publikasi=$_POST['thn_publikasi'];
		// $lokal=$_POST['lokal'];
		$lokal =  $_POST['lokal'];
		$nasional= $_POST['nasional'];
		$internasional= $_POST['internasional'];
		$id=$_POST['id'];
		
		$data_update=array(
			// "NAMA_DOSEN"=>$NAMA_DOSEN,
			"nama_dosen"=>$nama_dosen,
			"publikasi"=>$publikasi,
			"thn_publikasi"=>$thn_publikasi,
			"lokal"=>$lokal,
			"nasional"=>$nasional,
			"internasional"=>$internasional,
			"id"=>$id,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a713_model->rubah('artikel_ilmiah',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a713_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

	public function tambah(){
	 	$this->model_squrity->getsqurity();
	 	$this->load->view('Users/Butir7/inputan_borang7.1.3.php');
	 }

 public function do_tambah(){
		$this->model_squrity->getsqurity();
		$kdprodi = $this->session->userdata('kd_prodi');
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
			'kd_prodi'=>$kdprodi,
			'nama_dosen' => $nama_dosen,
			'publikasi' => $publikasi,
			'thn_publikasi' => $thn_publikasi,
			'lokal' => $lokal,
			'nasional' => $nasional,
			'internasional' => $internasional,

		);
		// print_r($data_insert);die();
		$res=$this->Aps_a713_model->insert('artikel_ilmiah',$data_insert);
		if ($res>=1) {
			redirect('Aps_a713_excel');
		}else {
			alert('Gagal Insert');
		}
}

public function export_excel(){
 $data=$this->Aps_a713_model->listing();
 $lokal=$this->Aps_a713_model->lokal();
 $nasional=$this->Aps_a713_model->nasional();
 $internasional=$this->Aps_a713_model->internasional();

 $this->load->view('Users/Butir7/tampilan_borang7.1.3_excel.php',array('data'=>$data,
																'lokal'=>$lokal,
																'nasional'=>$nasional,
																'internasional'=>$internasional));
 
 }

}