<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a313_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a313_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a313' => $this->apd_a313_model->listing());
 $this->load->view('User/BUtir3/tampilan_borang3.1.3.php',$data);
 }

public function ubah(){
 	$this->load->view('User/Butir3/edit_borang3.1.3.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a313' => $this->apd_a313_model->listing());
 $this->load->view('User/Butir3/tampilan_borang3.1.3_excel.php',$data);
 }

}