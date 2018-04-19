<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a435_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a435_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS',
 // 'a435' => $this->apd_a435_model->listing());
 $data=$this->Apd_a435_model->listing();
 $tot_pertemuan=$this->Apd_a435_model->tot_pertemuan();
 $tot_dilaksanakan=$this->Apd_a435_model->tot_dilaksanakan();
 $this->load->view('User/Butir4/tampilan_borang4.3.5.php',array('data' => $data,
																'total'=>$tot_pertemuan,
																'totdilaksanakan'=>$tot_dilaksanakan));
 }

 public function ubah(){
 	$this->load->view('User/Butir4/edit_borang4.3.5.php');	
 }

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS',
 // 'a435' => $this->apd_a435_model->listing());
 // echo "Masuk";
 $data=$this->Apd_a435_model->listing();
 $tot_pertemuan=$this->Apd_a435_model->tot_pertemuan();
 $tot_dilaksanakan=$this->Apd_a435_model->tot_dilaksanakan();
 $this->load->view('User/Butir4/tampilan_borang4.3.5_excel.php',array('data' => $data,
																'total'=>$tot_pertemuan,
																'totdilaksanakan'=>$tot_dilaksanakan));
 
 }

}