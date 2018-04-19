<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a432_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a432_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS     ',
 // 'a432' => $this->apd_a432_model->listing());
 $data=$this->Apd_a432_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.3.2.php',array('data'=>$data));
 }

 public function ubah(){
 	$this->load->view('User/Butir4/edit_borang4.3.2.php');	
 }

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS     ',
 // 'a432' => $this->apd_a432_model->listing());
 $data=$this->Apd_a432_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.3.2_excel.php',array('data'=>$data));
 }

}