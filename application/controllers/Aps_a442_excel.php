<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a442_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a442_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP ',
 'a442' => $this->aps_a442_model->listing());
 $this->load->view('vw_aps_a442',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP ',
 'a442' => $this->aps_a442_model->listing());
 $this->load->view('vw_aps_a442_excel',$data);
 }

}