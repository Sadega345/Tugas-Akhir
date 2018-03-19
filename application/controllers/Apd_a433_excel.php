<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a433_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a433_model');
 }

public function index() {
 $data = array( 'title' => '  TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS',
 'a433' => $this->apd_a433_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.3.3.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => '  TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS',
 'a433' => $this->apd_a433_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.3.3_excel.php',$data);
 }

}