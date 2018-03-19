<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b321_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b321_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 3.2.1 : MAHASISWA DAN LULUSAN',
 'b321' => $this->aps_b321_model->listing());
 $this->load->view('vw_aps_b321',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.2.1 : MAHASISWA DAN LULUSAN',
 'b321' => $this->aps_b321_model->listing());
 $this->load->view('vw_aps_b321_excel',$data);
 }

}