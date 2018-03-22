<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a652_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a652_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.5.2 : AKSESIBILITAS TIAP JENIS DATA',
 'a652' => $this->aps_a652_model->listing());
 $this->load->view('Users/Butir6/tampilan_borang6.5.2.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.5.2 : AKSESIBILITAS TIAP JENIS DATA',
 'a652' => $this->aps_a652_model->listing());
 $this->load->view('Users/Butir6/tampilan_borang6.5.2_excel.php',$data);
 }

}