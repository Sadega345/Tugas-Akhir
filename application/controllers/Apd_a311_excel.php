<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a311_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a311_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a311' => $this->apd_a311_model->listing());
 $this->load->view('User/Butir3/tampilan_borang3.1.1.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir3/edit_borang3.1.1.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a311' => $this->apd_a311_model->listing());
 $this->load->view('User/Butir3/tampilan_borang3.1.1_excel.php',$data);
}

}