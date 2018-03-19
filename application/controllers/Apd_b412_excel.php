<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b412_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b412_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 4.1.2 : SUMBER DAYA MANUSIA',
 'b412' => $this->apd_b412_model->listing());
 $this->load->view('User/Butir4B/tampilan_borang4.1.2.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 4.1.2 : SUMBER DAYA MANUSIA',
 'b412' => $this->apd_b412_model->listing());
 $this->load->view('User/Butir4B/tampilan_borang4.1.2_excel.php',$data);
 }

}