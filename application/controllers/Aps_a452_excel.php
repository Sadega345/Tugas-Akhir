<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a452_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a452_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR',
 'a452' => $this->aps_a452_model->listing());
 $this->load->view('vw_aps_a452',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.5.2 : PENINGKATAN KEMAMPUAN DOSEN TETAP MELALUI TUGAS BELAJAR',
 'a452' => $this->aps_a452_model->listing());
 $this->load->view('vw_aps_a452_excel',$data);
 }

}