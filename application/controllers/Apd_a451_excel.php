<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a451_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a451_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.1 : KEGIATAN TENAGA AHLI/PAKAR (TIDAK TERMASUK DOSEN TETAP)',
 // 'a451' => $this->apd_a451_model->listing());
	$data=$this->Apd_a451_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.5.1.php',array('data'=>$data));
 }

 public function ubah($nama_pakar){
 	$this->model_squrity->getsqurity();
		$res=$this->Apd_a451_model->update("where nama_pakar='$nama_pakar'");
		$data=array(
			"nama_pakar"=>$res[0]['nama_pakar'],
			"instansi"=>$res[0]['instansi'],
			"judul_keg"=>$res[0]['judul_keg'],
			"pelaksanaan"=>$res[0]['pelaksanaan'],
			
		);
 	$this->load->view('User/Butir4/edit_borang4.5.1.php',$data);
 }

 public function do_edit(){
		// $nama_dosen=$_POST['nama_dosen'];
		$nama_pakar=$_POST['nama_pakar'];
		$instansi=$_POST['instansi'];
		$judul_keg=$_POST['judul_keg'];
		$pelaksanaan=$_POST['pelaksanaan'];
		
		$data_update=array(
			"nama_pakar"=>$nama_pakar,
			"instansi"=>$instansi,
			"judul_keg"=>$judul_keg,
			"pelaksanaan"=>$pelaksanaan
			
		);
		$where=array('nama_pakar'=>$nama_pakar);
		$res=$this->Apd_a451_model->rubah('kegiatan_ahli',$data_update,$where);
		if ($res>=1) {
			redirect('Apd_a451_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.1 : KEGIATAN TENAGA AHLI/PAKAR (TIDAK TERMASUK DOSEN TETAP)',
 // 'a451' => $this->apd_a451_model->listing());
 $data=$this->Apd_a451_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.5.1_excel.php',array('data'=>$data));
 }

}