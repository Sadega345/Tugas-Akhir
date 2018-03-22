<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6112_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b6112_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.2 : PENGGUNAAN DANA',
 'b6112' => $this->aps_b6112_model->listing());
 $this->load->view('Users/Butir6B/tampilan_borang6.1.1.2.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.1.1.2 : PENGGUNAAN DANA',
 'b6112' => $this->aps_b6112_model->listing());
 $this->load->view('Users/Butir6B/tampilan_borang6.1.1.2_excel.php',$data);
 }

}