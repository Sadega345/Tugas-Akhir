<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a441_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a441_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.4.1 : DATA DOSEN TIDAK TETAP',
 'a441' => $this->aps_a441_model->listing());
 $this->load->view('vw_aps_a441',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.4.1 : DATA DOSEN TIDAK TETAP',
 'a441' => $this->aps_a441_model->listing());
 $this->load->view('vw_aps_a441_excel',$data);
 }

}