<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6411_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a6411_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.4.1.1 : Pustaka ',
 'a6411' => $this->aps_a6411_model->listing());
 $this->load->view('Users/Butir6/tampilan_borang6.4.1.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.4.1.1 : Pustaka ',
 'a6411' => $this->aps_a6411_model->listing());
 $this->load->view('Users/Butir6/tampilan_borang6.4.1.1_excel.php',$data);
 }

}