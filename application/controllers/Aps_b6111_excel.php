<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6111_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b6111_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.1 : PEMBIAYAAN',
 'b6111' => $this->aps_b6111_model->listing());
 $this->load->view('vw_aps_b6111',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.1 : PEMBIAYAAN',
 'b6111' => $this->aps_b6111_model->listing());
 $this->load->view('vw_aps_b6111_excel',$data);
 }

}