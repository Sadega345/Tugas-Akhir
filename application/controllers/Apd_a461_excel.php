<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a461_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a461_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN',
 'a461' => $this->apd_a461_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.6.1.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir4/edit_borang4.6.1.php');	
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN',
 'a461' => $this->apd_a461_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.6.1_excel.php',$data);
 }

}