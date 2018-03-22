<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a552_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a552_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : PENYELESAIAN TUGAS AKHIR ATAU SKRIPSI',
 'a551' => $this->aps_a551_model->listing());
 $this->load->view('Users/Butir5/tampilan_borang5.5.2.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 5.5.2 : PEMBIMBINGAN TUGAS AKHIR ATAU SKRIPSI',
 'a551' => $this->aps_a551_model->listing());
 $this->load->view('Users/Butir5/tampilan_borang5.5.1_excel.php',$data);
 }

}