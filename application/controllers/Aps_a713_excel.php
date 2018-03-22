<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a713_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a713_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.3 : JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU ',
 'a713' => $this->aps_a713_model->listing());
 $this->load->view('Users/Butir7/tampilan_borang7.1.3.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.3 : JUDUL ARTIKEL ILMIAH/KARYA ILMIAH/KARYA SENI/BUKU ',
 'a713' => $this->aps_a713_model->listing());
 $this->load->view('Users/Butir7/tampilan_borang7.1.3_excel.php',$data);
 }

}