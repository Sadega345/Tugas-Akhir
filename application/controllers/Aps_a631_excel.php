<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a631_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a631_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP',
 'a631' => $this->aps_a631_model->listing());
 $this->load->view('vw_aps_a631',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.3.1 : DATA RUANG KERJA DOSEN TETAP',
 'a631' => $this->aps_a631_model->listing());
 $this->load->view('vw_aps_a631_excel',$data);
 }

}