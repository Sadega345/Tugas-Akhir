<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a5121_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a5121_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 // 'a5121' => $this->Aps_a5121_model->listing());
 $data1=$this->Aps_a5121_model->listing1();
 $data2=$this->Aps_a5121_model->listing2();
 $total=$this->Aps_a5121_model->total();
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.1.php',array('data1'=>$data1,
																  'data2'=>$data2,
																  'total'=>$total));
 }

// public function tambah(){
// 	$this->load->view('Users/Butir5/inputan_5121.php');
// }


public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 // 'a5121' => $this->Aps_a5121_model->listing());
 $data=$this->Aps_a5121_model->listing();
 $totalkuliah=$this->Aps_a5121_model->totkuliah();
 $totalpraktikum=$this->Aps_a5121_model->totpraktikum();
 $totaltugas=$this->Aps_a5121_model->tottugas();
 $totalskripsi=$this->Aps_a5121_model->totskripsi();
 $totalsilabus=$this->Aps_a5121_model->totsilabus();
 $totalsap=$this->Aps_a5121_model->totsap();
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.1_excel.php',array('data'=>$data,
																  'totkuliah'=>$totalkuliah,
																  'totpraktikum'=>$totalpraktikum,
																  'tottugas'=>$totaltugas,
																  'totskripsi'=>$totalskripsi,
																  'totalsap'=>$totalsap));
 }

}