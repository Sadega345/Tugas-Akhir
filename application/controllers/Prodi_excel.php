<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('prodi_model');
 }

public function index() {
 $data = array( 'title' => 'Data Prodi',
 'prodi' => $this->prodi_model->listing());
 $this->load->view('vw_prodi',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'Laporan Data Prodi',
 'prodi' => $this->prodi_model->listing());
 $this->load->view('vw_prodi_excel',$data);
 }

}