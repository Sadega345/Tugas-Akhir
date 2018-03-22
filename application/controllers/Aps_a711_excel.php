<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a711_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a711_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.1 DAN 7.1.2 : PENELITIAN DOSEN TETAP',
 'a711' => $this->aps_a711_model->listing());
 $this->load->view('Users/Butir7/tampilan_borang7.1.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.1 DAN 7.1.2 : PENELITIAN DOSEN TETAP',
 'a711' => $this->aps_a711_model->listing());
 $this->load->view('Users/Butir7/tampilan_borang7.1.1_excel.php',$data);
 }

}