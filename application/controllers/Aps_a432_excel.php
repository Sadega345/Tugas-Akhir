<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a432_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a432_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS     ',
 'a432' => $this->aps_a432_model->listing());
 $this->load->view('vw_aps_a432',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.3.2 : DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS     ',
 'a432' => $this->aps_a432_model->listing());
 $this->load->view('vw_aps_a432_excel',$data);
 }

}