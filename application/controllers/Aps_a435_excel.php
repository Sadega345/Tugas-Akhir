<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a435_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a435_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS',
 'a435' => $this->aps_a435_model->listing());
 $this->load->view('vw_aps_a435',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS',
 'a435' => $this->aps_a435_model->listing());
 $this->load->view('vw_aps_a435_excel',$data);
 }

}