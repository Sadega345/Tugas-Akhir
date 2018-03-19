<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b42_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b42_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.2 : TENAGA KEPENDIDIKAN',
 'b42' => $this->aps_b42_model->listing());
 $this->load->view('vw_aps_b42',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.2 : TENAGA KEPENDIDIKAN',
 'b42' => $this->aps_b42_model->listing());
 $this->load->view('vw_aps_b42_excel',$data);
 }

}