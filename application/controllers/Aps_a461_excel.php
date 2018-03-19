<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a461_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a461_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN',
 'a461' => $this->aps_a461_model->listing());
 $this->load->view('vw_aps_a461',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN',
 'a461' => $this->aps_a461_model->listing());
 $this->load->view('vw_aps_a461_excel',$data);
 }

}