<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a312_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a312_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a312' => $this->aps_a312_model->listing());
 $this->load->view('Users/Butir3/tampilan_borang3.1.2.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a312' => $this->aps_a312_model->listing());
 $this->load->view('Users/Butir3/tampilan_borang3.1.2_excel.php',$data);
 }

}