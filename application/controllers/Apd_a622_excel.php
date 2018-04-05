<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a622_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a622_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.2 : DANA UNTUK KEGIATAN PENELITIAN',
 'a622' => $this->apd_a622_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.2.2.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.2.2.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.2 : DANA UNTUK KEGIATAN PENELITIAN',
 'a622' => $this->apd_a622_model->listing());
 $this->load->view('User/Butir6/tampilan_borang6.2.2_excel.php',$data);
 }

}