<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a455_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a455_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.5 : KEIKUTSERTAAN DOSEN TETAP DALAM ORGANISASI KEILMUAN/PROFESI',
 // 'a455' => $this->apd_a455_model->listing());
 $data=$this->Apd_a455_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.5.5.php',array('data'=>$data));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
		$res=$this->Apd_a455_model->update("where id='$id'");
		$data=array(
			"id"=>$res[0]['id'],
			"nama_dosen"=>$res[0]['nama_dosen'],
			"nm_organisasi"=>$res[0]['nm_organisasi'],
			"thn_awal"=>$res[0]['thn_awal'],
			"thn_akhir"=>$res[0]['thn_akhir'],
			"internasional"=>$res[0]['internasional'],
			"nasional"=>$res[0]['nasional'],
			"lokal"=>$res[0]['lokal'],
			
		);
 	$this->load->view('User/Butir4/edit_borang4.5.5.php',$data);
 }

 public function do_edit(){
		$id=$_POST['id'];
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
		$where=array('id'=>$id);
		// print_r($data_update);die();
		$res=$this->Apd_a455_model->rubah('keikutsertaan_org',$data_update,$where);
		if ($res>=1) {
			redirect('Apd_a455_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

	public function tambah(){
		$this->load->view('User/Butir4/inputan_borang4.5.5.php');
  }

	public function do_tambah(){
		$this->model_squrity->getsqurity();
		$id_dosen=$_POST['id_dosen'];
		$nm_organisasi=$_POST['nm_organisasi'];
		$thn_awal=$_POST['thn_awal'];
		$thn_akhir=$_POST['thn_akhir'];
		$internasional=$_POST['internasional'];
		$nasional=$_POST['nasional'];
		$lokal=$_POST['lokal'];
		$data_insert=array(
			'id_dosen' => $id_dosen,
			'nm_organisasi' => $nm_organisasi,
			'thn_awal'=>$thn_awal,
			'thn_akhir'=>$thn_akhir,
			'internasional' => $internasional,
			'nasional' => $nasional,
			'lokal' => $lokal,
		);
		$res=$this->Apd_a452_model->insert('keikutsertaan_org',$data_insert);
		if ($res>=1) {
			redirect('Apd_a455_excel');
		}else {
			alert('Gagal Insert');
		}
	}

public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Apd_a452_model->Delete('keikutsertaan_org',$where);
		if($res>=1){
			redirect('Apd_a455_excel');
		}else {
			alert('Gagal Hapus');
		}
}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.5 : KEIKUTSERTAAN DOSEN TETAP DALAM ORGANISASI KEILMUAN/PROFESI',
 // 'a455' => $this->apd_a455_model->listing());
 $data=$this->Apd_a455_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.5.5_excel.php',array('data'=>$data));
 }

}