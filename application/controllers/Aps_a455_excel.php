<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a455_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a455_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.5 : KEIKUTSERTAAN DOSEN TETAP DALAM ORGANISASI KEILMUAN/PROFESI',
 // 'a455' => $this->Aps_a455_model->listing());
 $data=$this->Aps_a455_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.5.5.php',array('data'=>$data));
 }

 public function ubah($thn_awal){
 	$this->model_squrity->getsqurity();
		$res=$this->Aps_a455_model->update("where thn_awal='$thn_awal'");
		$data=array(
			"nama_dosen"=>$res[0]['nama_dosen'],
			"nm_organisasi"=>$res[0]['nm_organisasi'],
			"thn_awal"=>$res[0]['thn_awal'],
			"thn_akhir"=>$res[0]['thn_akhir'],
			"internasional"=>$res[0]['internasional'],
			"nasional"=>$res[0]['nasional'],
			"lokal"=>$res[0]['lokal'],
			
		);
 	$this->load->view('Users/Butir4/edit_borang4.5.5.php',$data);
 }

 public function do_edit(){
		// $nama_dosen=$_POST['nama_dosen'];
		$nm_organisasi=$_POST['nm_organisasi'];
		$thn_awal=$_POST['thn_awal'];
		$thn_akhir=$_POST['thn_akhir'];
		$internasional=$_POST['internasional'];
		$nasional=$_POST['nasional'];
		$lokal=$_POST['lokal'];
		
		$data_update=array(
			"nm_organisasi"=>$nm_organisasi,
			"thn_awal"=>$thn_awal,
			"thn_akhir"=>$thn_akhir,
			"internasional"=>$internasional,
			"nasional"=>$nasional,
			"lokal"=>$lokal
			
		);
		$where=array('thn_awal'=>$thn_awal);
		$res=$this->Aps_a455_model->rubah('keikutsertaan_org',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a455_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.5 : KEIKUTSERTAAN DOSEN TETAP DALAM ORGANISASI KEILMUAN/PROFESI',
 // 'a455' => $this->Aps_a455_model->listing());
 $data=$this->Aps_a455_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.5.5_excel.php',array('data'=>$data));
 }

}