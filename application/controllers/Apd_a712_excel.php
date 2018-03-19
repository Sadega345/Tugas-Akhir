<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a712_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a712_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.2 : JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU',
 'a712' => $this->apd_a712_model->listing());
 $this->load->view('User/Butir7/tampilan_borang7.1.2.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.2 : JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU',
 'a712' => $this->apd_a712_model->listing());
 $this->load->view('User/Butir7/tampilan_borang7.1.2_excel.php',$data);
 }

}