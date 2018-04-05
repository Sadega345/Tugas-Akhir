<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a541_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a541_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA',
 'a541' => $this->apd_a541_model->listing());
 $this->load->view('User/Butir5/tampilan_borang5.4.1.php',$data);
 }

  public function ubah(){
 	$this->load->view('User/Butir5/tampilan_borang5.4.1.php');	
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 5.4.1 : NAMA DOSEN PEMBIMBING DAN JUMLAH MAHASISWA',
 'a541' => $this->apd_a541_model->listing());
 $this->load->view('User/Butir5/tampilan_borang5.4.1_excel.php',$data);
 }

}