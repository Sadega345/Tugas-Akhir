<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b711_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b711_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.1 : PENELITIAN',
 'b711' => $this->apd_b711_model->listing());
 $this->load->view('User/Butir7B/tampilan_borang7.1.1.php',$data);
 }

  public function ubah(){
 	$this->load->view('User/Butir7B/tampilan_borang7.1.1.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.1 : PENELITIAN',
 'b711' => $this->apd_b711_model->listing());
 $this->load->view('User/Butir7B/tampilan_borang7.1.1_excel.php',$data);
 }

}