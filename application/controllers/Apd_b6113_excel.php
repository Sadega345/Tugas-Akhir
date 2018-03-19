<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b6113_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b6113_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.3 : PENGGUNAAN DANA UNTUK TRIDARMA',
 'b6113' => $this->apd_b6113_model->listing());
 $this->load->view('User/Butir6B/tampilan_borang6.1.1.3.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.3 : PENGGUNAAN DANA UNTUK TRIDARMA',
 'b6113' => $this->apd_b6113_model->listing());
 $this->load->view('User/Butir6B/tampilan_borang6.1.1.3.php',$data);
 }

}