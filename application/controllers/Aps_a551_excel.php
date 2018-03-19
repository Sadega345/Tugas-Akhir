<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a551_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a551_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 5.5.1 : PEMBIMBINGAN TUGAS AKHIR ATAU SKRIPSI',
 'a551' => $this->aps_a551_model->listing());
 $this->load->view('vw_aps_a551',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 5.5.1 : PEMBIMBINGAN TUGAS AKHIR ATAU SKRIPSI',
 'a551' => $this->aps_a551_model->listing());
 $this->load->view('vw_aps_a551_excel',$data);
 }

}