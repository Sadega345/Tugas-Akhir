<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b411_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_b411_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.1.1 : SUMBER DAYA MANUSIA',
 'b411' => $this->aps_b411_model->listing());
 $this->load->view('Users/Butir4B/tampilan_borang4.1.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 4.1.1 : SUMBER DAYA MANUSIA',
 'b411' => $this->aps_b411_model->listing());
 $this->load->view('Users/Butir4B/tampilan_borang4.1.1_excel.php',$data);
 }

}