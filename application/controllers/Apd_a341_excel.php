<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a341_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a341_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN',
 'a341' => $this->apd_a341_model->listing());
 $this->load->view('User/Butir3/tampilan_borang3.4.1.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir3/edit_borang341.php');
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 3.4 : EVALUASI LULUSAN',
 'a341' => $this->apd_a341_model->listing());
 $this->load->view('User/Butir3/tampilan_borang3.4.1_excel.php',$data);
 }

}