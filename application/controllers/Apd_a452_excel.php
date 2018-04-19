<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a452_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a452_model');
 }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR',
 // 'a452' => $this->apd_a452_model->listing());
 $data=$this->Apd_a452_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.5.2.php',array('data'=>$data));
 }

 public function ubah(){
 	$this->load->view('User/Butir4/edit_borang4.5.2.php');	
 }

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR',
 // 'a452' => $this->apd_a452_model->listing());
 $data=$this->Apd_a452_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.5.2_excel.php',array('data'=>$data));
 }

}