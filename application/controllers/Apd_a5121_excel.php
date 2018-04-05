<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a5121_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a5121_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 'a5121' => $this->apd_a5121_model->listing());
 $this->load->view('User/Butir5/tampilan_borang5.1.2.1.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir5/tampilan_borang5.1.2.1.php');	
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 'a5121' => $this->apd_a5121_model->listing());
 $this->load->view('User/Butir5/tampilan_borang5.1.2.1_excel.php',$data);
 }

}