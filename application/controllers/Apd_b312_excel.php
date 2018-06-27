<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b312_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b312_model');
 }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 3.1.2 : MAHASISWA DAN LULUSAN',
 // 'b312' => $this->apd_b312_model->listing());
 $prodi=$this->apd_b312_model->GetProdi();
 $total1=$this->apd_b312_model->total1();
 $data1=$this->apd_b312_model->listing1();
 $total2=$this->apd_b312_model->total2();
 $data2=$this->apd_b312_model->listing2();
 $total3=$this->apd_b312_model->total3();
 $data3=$this->apd_b312_model->listing3();
 $this->load->view('User/Butir3B/tampilan_borang3.1.2.php',array('prodi' => $prodi,
																'total1'=>$total1,
																'data1'=>$data1,
																'total2'=>$total2,
																'data2'=>$data2,
																'total3'=>$total3,
																'data3'=>$data3));
 }

 public function ubah(){
 	$this->load->view('User/Butir3B/edit_borang3.1.2.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1.2 : MAHASISWA DAN LULUSAN',
 'b312' => $this->apd_b312_model->listing());
 $this->load->view('User/Butir6/tampilan_borang3.1.2.php',$data);
 }

}