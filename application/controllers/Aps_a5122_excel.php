<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a5122_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a5122_model');
 }

public function index() {
 $data = array( 'title' => '  TABEL DATA BUTIR 5.1.2.2 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 'a5122' => $this->aps_a5122_model->listing());
 $this->load->view('vw_aps_a5122',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.2 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 'a5122' => $this->aps_a5122_model->listing());
 $this->load->view('vw_aps_a5122_excel',$data);
 }

}