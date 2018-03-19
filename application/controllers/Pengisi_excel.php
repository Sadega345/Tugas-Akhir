<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengisi_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('pengisi_model');
 }

public function index() {
 $data = array( 'title' => 'IDENTITAS PENGISI BORANG PROGRAM STUDI',
 'pengisi' => $this->pengisi_model->listing());
 $this->load->view('vw_pengisi',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'IDENTITAS PENGISI BORANG PROGRAM STUDI',
 'pengisi' => $this->pengisi_model->listing());
 $this->load->view('vw_pengisi_excel',$data);
 }

}