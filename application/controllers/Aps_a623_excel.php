<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a623_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a623_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 // 'a623' => $this->Aps_a623_model->listing());
 $data=$this->Aps_a623_model->listing();
 $totaldana=$this->Aps_a623_model->totdana();
 $datalist=$this->Aps_a623_model->listed();
 $this->load->view('Users/Butir6/tampilan_borang6.2.3.php',array('data'=>$data,
																'totdana'=>$totaldana,
																'datalist'=>$datalist));
 
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a623_model->update("where id='$id'");
	$data=array(
		"TAHUN"=>$res[0]['TAHUN'],
		"judul_kegiatan"=>$res[0]['judul_kegiatan'],
		"SUMBER_DANA"=>$res[0]['SUMBER_DANA'],
		"JUMLAH_DANA"=>$res[0]['JUMLAH_DANA'],
		"id"=>$res[0]['id'],
		"jns_dana"=>$res[0]['id'],
		
	);
 	$this->load->view('Users/Butir6/edit_borang6.2.3.php',$data);
 }

 public function do_edit(){
		$TAHUN=$_POST['TAHUN'];
		$judul_kegiatan=$_POST['judul_kegiatan'];
		$SUMBER_DANA=$_POST['SUMBER_DANA'];
		$JUMLAH_DANA=$_POST['JUMLAH_DANA'];
		$id=$_POST['id'];
		$jns_dana=$_POST['jns_dana'];
		
		$data_update=array(
			"TAHUN"=>$TAHUN,
			"judul_kegiatan"=>$judul_kegiatan,
			"SUMBER_DANA"=>$SUMBER_DANA,
			"JUMLAH_DANA"=>$JUMLAH_DANA,
			"id"=>$id,
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a623_model->rubah('dana_pengmas',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a623_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function tambah(){
 	$this->model_squrity->getsqurity();
 	$this->load->view('Users/Butir6/inputan_borang6.2.3.php');
 }

public function do_tambah(){
		$this->model_squrity->getsqurity();
		$kdprodi = $this->session->userdata('kd_prodi');
		$id=$_POST['id'];
		$tahun=$_POST['tahun'];
		$judul_kegiatan=$_POST['judul_kegiatan'];
		$jns_dana=$_POST['jns_dana'];
		$sumber_dana=$_POST['sumber_dana'];
		$jumlah_dana=$_POST['jumlah_dana'];
		
		$data_insert=array(
			'jns_dana'=>$jns_dana,
			'id'=>$id,
			'tahun'=>$tahun,
			'kd_prodi'=>$kdprodi,
			'judul_kegiatan' => $judul_kegiatan,
			'sumber_dana' => $sumber_dana,
			'jumlah_dana' => $jumlah_dana,

		);
		// print_r($data_insert);die();
		$res=$this->Aps_a623_model->insert('dana_pengmas',$data_insert);
		if ($res>=1) {
			redirect('Aps_a623_excel');
		}else {
			alert('Gagal Insert');
		}
}

public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Aps_a623_model->Delete('dana_pengmas',$where);
		if($res>=1){
			redirect('Aps_a623_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 // 'a623' => $this->Aps_a623_model->listing());
 $data=$this->Aps_a623_model->listing();
 $totaldana=$this->Aps_a623_model->totdana();
 $this->load->view('Users/Butir6/tampilan_borang6.2.3_excel.php',array('data'=>$data,
																'totdana'=>$totaldana));
 
 }

}