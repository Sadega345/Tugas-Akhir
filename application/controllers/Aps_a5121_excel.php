<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a5121_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a5121_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : JUMLAH SKS PS (minimum untuk kelulusan)',
 'a5121' => $this->aps_a5121_model->listing());
 $this->load->view('vw_aps_a5121',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : JUMLAH SKS PS (minimum untuk kelulusan)',
 'a5121' => $this->aps_a5121_model->listing());
 $this->load->view('vw_aps_a5121_excel',$data);
 }

}