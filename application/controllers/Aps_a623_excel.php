<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a623_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a623_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 'a623' => $this->aps_a623_model->listing());
 $this->load->view('vw_aps_a623',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 'a623' => $this->aps_a623_model->listing());
 $this->load->view('vw_aps_a623_excel',$data);
 }

}