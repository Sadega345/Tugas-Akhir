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
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a312' => $this->aps_a312_model->listing());
 $this->load->view('Users/Butir3/tampilan_borang3.1.2_excel.php',$data);
 }

}