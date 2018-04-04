<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b312_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b312_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1.2 : MAHASISWA DAN LULUSAN',
 'b312' => $this->apd_b312_model->listing());
 $this->load->view('User/Butir3B/tampilan_borang3.1.2.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir3B/edit_borang3.1.2.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1.2 : MAHASISWA DAN LULUSAN',
 'b312' => $this->apd_b312_model->listing());
 $this->load->view('User/Butir6/tampilan_borang3.1.2.php',$data);
 }

}