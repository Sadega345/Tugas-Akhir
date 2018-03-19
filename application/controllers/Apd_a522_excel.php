<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a522_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a522_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 5.2.2 : Waktu Pelaksanaan Real Proses Belajar Mengajar',
 'a522' => $this->apd_a522_model->listing());
 $this->load->view('User/Butir5/tampilan_borang5.2.2.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 5.2.2 : Waktu Pelaksanaan Real Proses Belajar Mengajar',
 'a522' => $this->apd_a522_model->listing());
 $this->load->view('User/Butir5/tampilan_borang5.2.2_excel',$data);
 }

}