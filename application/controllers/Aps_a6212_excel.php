<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6212_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a6212_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6212' => $this->aps_a6212_model->listing());
 $this->load->view('vw_aps_a6212',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6212' => $this->aps_a6212_model->listing());
 $this->load->view('vw_aps_a6212_excel',$data);
 }

}