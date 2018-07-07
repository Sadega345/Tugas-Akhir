<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a714_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a714_model');
 }

public function index() {
 $data = $this->Aps_a714_model->listing();
 $this->load->view('Users/Butir7/tampilan_borang7.1.4.php',array('data'=>$data));
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 7.1.4 : HAK ATAS KEKAYAAN INTELEKTUAL  ',
 'a714' => $this->aps_a714_model->listing());
 $this->load->view('Users/Butir7/tampilan_borang7.1.4_excel.php',$data);
 }

}