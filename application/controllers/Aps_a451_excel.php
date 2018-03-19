<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a451_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a451_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.5.1 : KEGIATAN TENAGA AHLI/PAKAR (TIDAK TERMASUK DOSEN TETAP)',
 'a451' => $this->aps_a451_model->listing());
 $this->load->view('vw_aps_a451',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.5.1 : KEGIATAN TENAGA AHLI/PAKAR (TIDAK TERMASUK DOSEN TETAP)',
 'a451' => $this->aps_a451_model->listing());
 $this->load->view('vw_aps_a451_excel',$data);
 }

}