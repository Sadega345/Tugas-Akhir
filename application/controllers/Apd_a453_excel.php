<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a453_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a453_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP',
 'a453' => $this->apd_a453_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.5.3.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir4/edit_borang4.5.3.php');	
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP',
 'a453' => $this->apd_a453_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.5.3_excel.php',$data);
 }

}