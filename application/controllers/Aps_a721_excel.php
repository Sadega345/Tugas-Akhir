<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a721_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a721_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 7.2.1 : KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT (PKM)',
 'a721' => $this->aps_a721_model->listing());
 $this->load->view('Users/Butir7/tampilan_borang7.2.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 7.2.1 : KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT (PKM)',
 'a721' => $this->aps_a721_model->listing());
 $this->load->view('Users/Butir7/tampilan_borang7.2.1_excel.php',$data);
 }

}