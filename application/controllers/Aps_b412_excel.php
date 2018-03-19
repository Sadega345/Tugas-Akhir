<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b412_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b412_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 4.1.2 : SUMBER DAYA MANUSIA',
 'b412' => $this->aps_b412_model->listing());
 $this->load->view('vw_aps_b412',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 4.1.2 : SUMBER DAYA MANUSIA',
 'b412' => $this->aps_b412_model->listing());
 $this->load->view('vw_aps_b412_excel',$data);
 }

}