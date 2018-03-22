<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a513_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a513_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 5.1.3 : MATA KULIAH PILIHAN',
 'a513' => $this->aps_a513_model->listing());
 $this->load->view('Users/Butir5/tampilan_borang5.1.3.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 5.1.3 : MATA KULIAH PILIHAN',
 'a513' => $this->aps_a513_model->listing());
 $this->load->view('Users/Butir5/tampilan_borang5.1.3_excel.php',$data);
 }

}