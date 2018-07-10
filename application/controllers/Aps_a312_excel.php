<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a312_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a312_model');
 }

public function index() {
 $data=$this->aps_a312_model->listing();
 $jml_tampung=$this->aps_a312_model->jml_tampung();
 $jml_ikutseleksi=$this->aps_a312_model->jml_ikutseleksi();
 $jml_lulusseleksi=$this->aps_a312_model->jml_lulusseleksi();
 $j_maba_nonreg=$this->aps_a312_model->j_maba_nonreg();
 $j_maba_trf=$this->aps_a312_model->j_maba_trf();
 $j_tot_nonreg=$this->aps_a312_model->j_tot_nonreg();
 $j_tot_trf=$this->aps_a312_model->j_tot_trf();
 $this->load->view('Users/Butir3/tampilan_borang3.1.2.php',array('data'=>$data,
																 'jml_tampung'=>$jml_tampung,
																 'jml_ikutseleksi'=>$jml_ikutseleksi,
																 'jml_lulusseleksi'=>$jml_lulusseleksi,
																 'j_maba_nonreg'=>$j_maba_nonreg,
																 'j_maba_trf'=>$j_maba_trf,
																 'j_tot_nonreg'=>$j_tot_nonreg,
																 'j_tot_trf'=>$j_tot_trf));
 
 }

public function export_excel(){
$data=$this->aps_a312_model->listing();
 $jml_tampung=$this->aps_a312_model->jml_tampung();
 $jml_ikutseleksi=$this->aps_a312_model->jml_ikutseleksi();
 $jml_lulusseleksi=$this->aps_a312_model->jml_lulusseleksi();
 $j_maba_nonreg=$this->aps_a312_model->j_maba_nonreg();
 $j_maba_trf=$this->aps_a312_model->j_maba_trf();
 $j_tot_nonreg=$this->aps_a312_model->j_tot_nonreg();
 $j_tot_trf=$this->aps_a312_model->j_tot_trf();
 $this->load->view('Users/Butir3/tampilan_borang3.1.2_excel.php',array('data'=>$data,
																 'jml_tampung'=>$jml_tampung,
																 'jml_ikutseleksi'=>$jml_ikutseleksi,
																 'jml_lulusseleksi'=>$jml_lulusseleksi,
																 'j_maba_nonreg'=>$j_maba_nonreg,
																 'j_maba_trf'=>$j_maba_trf,
																 'j_tot_nonreg'=>$j_tot_nonreg,
																 'j_tot_trf'=>$j_tot_trf));
}

  public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->aps_a312_model->update("where id='$id'");
	$data=array(
		"dy_tampung"=>$res[0]['dy_tampung'],
		"jml_ikutseleksi"=>$res[0]['jc_mhs_ikt_seleksi'],
		"jml_lulusseleksi"=>$res[0]['jc_mhs_lls_seleksi'],
		"j_maba_nonreg"=>$res[0]['j_maba_nonreg'],
		"j_maba_trf"=>$res[0]['j_maba_trf'],
		"j_tot_nonreg"=>$res[0]['j_tot_nonreg'],
		"j_tot_trf"=>$res[0]['j_tot_trf'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('Users/Butir3/edit_borang3.1.2.php',$data);
 }

 public function do_edit(){
		$dy_tampung=$_POST['dy_tampung'];
		$jml_ikutseleksi=$_POST['jml_ikutseleksi'];
		$jml_lulusseleksi=$_POST['jml_lulusseleksi'];
		$j_maba_nonreg=$_POST['j_maba_nonreg'];
		$j_maba_trf=$_POST['j_maba_trf'];
		$j_tot_nonreg=$_POST['j_tot_nonreg'];
		$j_tot_trf=$_POST['j_tot_trf'];
		$id=$_POST['id'];
		
		$data_update=array(
			"dy_tampung"=>$dy_tampung,
			"jc_mhs_ikt_seleksi"=>$jml_ikutseleksi,
			"jc_mhs_lls_seleksi"=>$jml_lulusseleksi,
			"j_maba_nonreg"=>$j_maba_nonreg,
			"j_maba_trf"=>$j_maba_trf,
			"j_tot_nonreg"=>$j_tot_nonreg,
			"j_tot_trf"=>$j_tot_trf,

		);
		$where=array('id'=>$id);
		$res=$this->aps_a312_model->ubah('DATA_MHS',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_a312_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


}