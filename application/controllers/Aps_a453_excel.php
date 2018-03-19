<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a453_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a453_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP',
 'a453' => $this->aps_a453_model->listing());
 $this->load->view('vw_aps_a453',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 4.5.3 : KEGIATAN DOSEN TETAP',
 'a453' => $this->aps_a453_model->listing());
 $this->load->view('vw_aps_a453_excel',$data);
 }

}