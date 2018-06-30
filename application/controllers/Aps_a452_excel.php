<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a452_excel extends CI_Controller {

// Load database
 

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR',
 // 'a452' => $this->Aps_a452_model->listing());
 $data=$this->Aps_a452_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.5.2.php',array('data'=>$data));

 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
		$res=$this->Aps_a452_model->update("where id='$id'");
		$data=array(
			"nama_dosen"=>$res[0]['nama_dosen'],
			"jenjang_pend"=>$res[0]['jenjang_pend'],
			"bid_studi"=>$res[0]['bid_studi'],
			"perguruan_tinggi"=>$res[0]['perguruan_tinggi'],
			"negara"=>$res[0]['negara'],
			"thn_mulai_std"=>$res[0]['thn_mulai_std'],
			"id"=>$res[0]['id'],
			
		);
		// print_r($data);die;
 	$this->load->view('Users/Butir4/edit_borang4.5.2.php',$data);

 }

 public function do_edit(){
		// $nama_dosen=$_POST['nama_dosen'];
		$jenjang_pend=$_POST['jenjang_pend'];
		$bid_studi=$_POST['bid_studi'];
		$perguruan_tinggi=$_POST['perguruan_tinggi'];
		$negara=$_POST['negara'];
		$thn_mulai_std=$_POST['thn_mulai_std'];
		$id=$_POST['id'];
		
		$data_update=array(
			"jenjang_pend"=>$jenjang_pend,
			"bid_studi"=>$bid_studi,
			"perguruan_tinggi"=>$perguruan_tinggi,
			"negara"=>$negara,
			"thn_mulai_std"=>$thn_mulai_std
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a452_model->rubah('pkdt_tgs_belajar',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a452_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR',
 // 'a452' => $this->Aps_a452_model->listing());
 $data=$this->Aps_a452_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.5.2_excel.php',array('data'=>$data));
 }

}