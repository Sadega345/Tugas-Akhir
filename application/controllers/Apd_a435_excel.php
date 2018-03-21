<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a435_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a435_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS',
 'a435' => $this->apd_a435_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.3.5.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.3.5 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA DI LUAR PS',
 'a435' => $this->apd_a435_model->listing());
 // echo "Masuk";
 $this->load->view('User/Butir4/tampilan_borang4.3.5_excel.php',$data);
 }

}