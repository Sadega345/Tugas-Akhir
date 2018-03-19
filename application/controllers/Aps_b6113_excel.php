<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6113_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b6113_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.3 : PENGGUNAAN DANA UNTUK TRIDARMA',
 'b6113' => $this->aps_b6113_model->listing());
 $this->load->view('vw_aps_b6113',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.3 : PENGGUNAAN DANA UNTUK TRIDARMA',
 'b6113' => $this->aps_b6113_model->listing());
 $this->load->view('vw_aps_b6113_excel',$data);
 }

}