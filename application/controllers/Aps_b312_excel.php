<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b312_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b312_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1.2 : MAHASISWA DAN LULUSAN',
 'b312' => $this->aps_b312_model->listing());
 $this->load->view('vw_aps_b312',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1.2 : MAHASISWA DAN LULUSAN',
 'b312' => $this->aps_b312_model->listing());
 $this->load->view('vw_aps_b312_excel',$data);
 }

}