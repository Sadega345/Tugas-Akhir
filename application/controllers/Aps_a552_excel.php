<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a552_excel extends CI_Controller {

// Load database
 

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir',
 // 'a552' => $this->Aps_a552_model->listing());
 $data=$this->Aps_a552_model->listing();
 $totalmahasiswa=$this->Aps_a552_model->totmahasiswa();
 $this->load->view('Users/Butir5/tampilan_borang5.5.2.php',array('data'=>$data,
																'totmahasiswa'=>$totalmahasiswa));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a552_model->update("where id='$id'");
	$data=array(
		"nama_dosen"=>$res[0]['nama_dosen'],
		"jml_mhs"=>$res[0]['jml_mhs'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('Users/Butir5/edit_borang5.5.2.php',$data);
 }

  public function do_edit(){
		$nama_dosen=$_POST['nama_dosen'];
		$jml_mhs=$_POST['jml_mhs'];
		$id=$_POST['id'];
		
		$data_update=array(
			
			"jml_mhs"=>$jml_mhs,
			"id"=>$id,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a552_model->rubah('pembimbing_skripsi',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a552_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir',
 // 'a552' => $this->Aps_a552_model->listing());
 $data=$this->Aps_a552_model->listing();
 $totalmahasiswa=$this->Aps_a552_model->totmahasiswa();
 $this->load->view('Users/Butir5/tampilan_borang5.5.2_excel.php',array('data'=>$data,
																'totmahasiswa'=>$totalmahasiswa));
 
 }

}