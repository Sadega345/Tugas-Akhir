<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b711_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b711_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.1 : PENELITIAN',
 'b711' => $this->aps_b711_model->listing());
 $this->load->view('vw_aps_b711',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.1 : PENELITIAN',
 'b711' => $this->aps_b711_model->listing());
 $this->load->view('vw_aps_b711_excel',$data);
 }

}