<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengisis_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('pengisis_model');
 }

public function index() {
 $data = array( 'title' => 'IDENTITAS PENGISI BORANG PROGRAM STUDI',
 'pengisi' => $this->pengisis_model->listing());
 $this->load->view('Users/PengisiBorang/tampilan_pengisi.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'IDENTITAS PENGISI BORANG PROGRAM STUDI',
 'pengisi' => $this->pengisis_model->listing());
 $this->load->view('Users/PengisiBorang/tampilan_pengisi_excel.php',$data);
 }

}