<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6412_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a6412_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.4.1 : Pustaka ',
 'a6412' => $this->aps_a6412_model->listing());
 $this->load->view('vw_aps_a6412',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.4.1 : Pustaka ',
 'a6412' => $this->aps_a6412_model->listing());
 $this->load->view('vw_aps_a6412_excel',$data);
 }

}