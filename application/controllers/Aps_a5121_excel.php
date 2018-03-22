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
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : JUMLAH SKS PS (minimum untuk kelulusan)',
 'a5121' => $this->aps_a5121_model->listing());
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.1_excel.php',$data);
 }

}