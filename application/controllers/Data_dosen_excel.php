<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosen_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('data_dosen_model');
 }

public function index() {
 $data = array( 'title' => 'IDENTITAS PENGISI BORANG PROGRAM STUDI',
 'dosen' => $this->data_dosen_model->listing());
 $this->load->view('vw_data_dosen',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'IDENTITAS PENGISI BORANG PROGRAM STUDI',
 'dosen' => $this->data_dosen_model->listing());
 $this->load->view('vw_data_dosen_excel',$data);
 }

}