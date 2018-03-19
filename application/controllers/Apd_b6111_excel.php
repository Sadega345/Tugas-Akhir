<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b6111_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b6111_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.1 : PEMBIAYAAN',
 'b6111' => $this->apd_b6111_model->listing());
 $this->load->view('User/Butir6B/tampilan_borang6.1.1.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.1 : PEMBIAYAAN',
 'b6111' => $this->apd_b6111_model->listing());
 $this->load->view('User/Butir6B/tampilan_borang6.1.1.1_excel.php',$data);
 }

}