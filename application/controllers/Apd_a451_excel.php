<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a451_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_a451_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.5.1 : KEGIATAN TENAGA AHLI/PAKAR (TIDAK TERMASUK DOSEN TETAP)',
 'a451' => $this->apd_a451_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.5.1.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir4/edit_borang4.5.1.php');	
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.5.1 : KEGIATAN TENAGA AHLI/PAKAR (TIDAK TERMASUK DOSEN TETAP)',
 'a451' => $this->apd_a451_model->listing());
 $this->load->view('User/Butir4/tampilan_borang4.5.1_excel.php',$data);
 }

}