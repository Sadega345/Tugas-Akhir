<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a454_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a454_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 4.5.4 : PENCAPAIAN PRESTASI/REPUTASI DOSEN',
 'a454' => $this->aps_a454_model->listing());
 $this->load->view('vw_aps_a454',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 4.5.4 : PENCAPAIAN PRESTASI/REPUTASI DOSEN',
 'a454' => $this->aps_a454_model->listing());
 $this->load->view('vw_aps_a454_excel',$data);
 }

}