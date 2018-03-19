<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a442_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a442_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP ',
 'a442' => $this->apd_a442_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.4.2.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP ',
 'a442' => $this->apd_a442_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.4.2_excel.php',$data);
 }

}