<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a311_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a311_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a311' => $this->aps_a311_model->listing());
 $this->load->view('vw_aps_a311',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 'a311' => $this->aps_a311_model->listing());
 $this->load->view('vw_aps_a311_excel',$data);
 }

}