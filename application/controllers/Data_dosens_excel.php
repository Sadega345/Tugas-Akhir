<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosens_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('data_dosens_model');
 }

public function index() {
 $data = array( 'title' => 'IDENTITAS PENGISI BORANG PROGRAM STUDI',
 'dosen' => $this->data_dosens_model->listing());
 $this->load->view('Users/DataDosen/tampilan_dosen.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'IDENTITAS PENGISI BORANG PROGRAM STUDI',
 'dosen' => $this->data_dosens_model->listing());
 $this->load->view('Users/DataDosen/tampilan_dosen_excel.php',$data);
 }

}