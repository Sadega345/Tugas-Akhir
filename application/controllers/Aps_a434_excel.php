<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a434_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a434_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.3.4 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS  ',
 'a434' => $this->aps_a434_model->listing());
 $this->load->view('vw_aps_a434',$data);
 }

public function export_excel(){
 $data = array( 'title' => '  TABEL DATA BUTIR 4.3.4 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS  ',
 'a434' => $this->aps_a434_model->listing());
 $this->load->view('vw_aps_a434_excel',$data);
 }

}