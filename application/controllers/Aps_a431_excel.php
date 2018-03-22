<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a431_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a431_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.3.1 : DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI BIDANG PS',
 'a431' => $this->aps_a431_model->listing());
 $this->load->view('Users/Butir4/tampilan_borang4.3.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.3.1 : DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI BIDANG PS',
 'a431' => $this->aps_a431_model->listing());
 $this->load->view('Users/Butir4/tampilan_borang4.3.1_excel.php',$data);
 }

}