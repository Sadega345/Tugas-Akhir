<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b642_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b642_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.4.2 : AKSESIBILITAS TIAP JENIS DATA',
 'b642' => $this->aps_b642_model->listing());
 $this->load->view('vw_aps_b642',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 6.4.2 : AKSESIBILITAS TIAP JENIS DATA',
 'b642' => $this->aps_b642_model->listing());
 $this->load->view('vw_aps_b642_excel',$data);
 }

}