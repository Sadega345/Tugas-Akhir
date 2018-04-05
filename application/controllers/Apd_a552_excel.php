<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a552_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a552_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir',
 'a552' => $this->apd_a552_model->listing());
 $this->load->view('User/Butir5/tampilan_borang5.5.2.php',$data);
 }

  public function ubah(){
 	$this->load->view('User/Butir5/tampilan_borang5.5.2.php');	
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : Pelaksanaan pembimbingan karya/tugas akhir',
 'a552' => $this->apd_a552_model->listing());
 $this->load->view('User/Butir5/tampilan_borang5.5.2_excel.php',$data);
 }

}