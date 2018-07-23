<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a622_excel extends CI_Controller {

// Load database

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.2 : DANA UNTUK KEGIATAN PENELITIAN',
 // 'a622' => $this->Aps_a622_model->listing());
 $data=$this->Aps_a622_model->listing();
 $totaldana=$this->Aps_a622_model->totdana();
 $datalist=$this->Aps_a622_model->listed();
 $this->load->view('Users/Butir6/tampilan_borang6.2.2.php',array('data'=>$data,
																'totdana'=>$totaldana,
																'datalist'=>$datalist));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a622_model->update("where id='$id'");
	$data=array(
		"tahun"=>$res[0]['tahun'],
		"id"=>$res[0]['id'],
		"judul_penelitian"=>$res[0]['judul_penelitian'],
		"sumber_dana"=>$res[0]['sumber_dana'],
		"jml_dana"=>$res[0]['jml_dana'],
		"jns_dana"=>$res[0]['jns_dana'],
		
	);
 	$this->load->view('Users/Butir6/edit_borang6.2.2.php',$data);
 }

 public function do_edit(){
		$tahun=$_POST['tahun'];
		$id=$_POST['id'];
		$judul_penelitian=$_POST['judul_penelitian'];
		$sumber_dana=$_POST['sumber_dana'];
		$jml_dana=$_POST['jml_dana'];
		$jns_dana=$_POST['jns_dana'];
		
		$data_update=array(
			"id"=>$id,
			"tahun"=>$tahun,
			"judul_penelitian"=>$judul_penelitian,
			"sumber_dana"=>$sumber_dana,
			"jml_dana"=>$jml_dana,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a622_model->rubah('dana_penelitian',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a622_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}
 public function tambah(){
 	$this->model_squrity->getsqurity();
 	$this->load->view('Users/Butir6/inputan_borang6.2.2.php');
 }

public function do_tambah(){
		$this->model_squrity->getsqurity();
		$kdprodi = $this->session->userdata('kd_prodi');
		$id=$_POST['id'];
		$tahun=$_POST['tahun'];
		$judul_penelitian=$_POST['judul_penelitian'];
		$jns_dana=$_POST['jns_dana'];
		$sumber_dana=$_POST['sumber_dana'];
		$jml_dana=$_POST['jml_dana'];
		
		$data_insert=array(
			'jns_dana'=>$jns_dana,
			'id'=>$id,
			'tahun'=>$tahun,
			'kd_prodi'=>$kdprodi,
			'judul_penelitian' => $judul_penelitian,
			'sumber_dana' => $sumber_dana,
			'jml_dana' => $jml_dana,

		);
		// print_r($data_insert);die();
		$res=$this->Aps_a622_model->insert('dana_penelitian',$data_insert);
		if ($res>=1) {
			redirect('Aps_a622_excel');
		}else {
			alert('Gagal Insert');
		}
}

public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Aps_a622_model->Delete('dana_penelitian',$where);
		if($res>=1){
			redirect('Aps_a622_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.2 : DANA UNTUK KEGIATAN PENELITIAN',
 // 'a622' => $this->Aps_a622_model->listing());
 $data=$this->Aps_a622_model->listing();
 $totaldana=$this->Aps_a622_model->totdana();
 $datalist=$this->Aps_a622_model->listed();
 $this->load->view('Users/Butir6/tampilan_borang6.2.2_excel.php',array('data'=>$data,
																'totdana'=>$totaldana,
																'datalist'=>$datalist));
 
 }

}