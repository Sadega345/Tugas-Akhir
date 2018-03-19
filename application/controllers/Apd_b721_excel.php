<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b721_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b721_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 7.2.1 : KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 'b721' => $this->apd_b721_model->listing());
 $this->load->view('User/Butir7B/tampilan_borang7.2.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 7.2.1 : KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 'b721' => $this->apd_b721_model->listing());
 $this->load->view('User/Butir7B/tampilan_borang7.2.1_excel.php',$data);
 }

}