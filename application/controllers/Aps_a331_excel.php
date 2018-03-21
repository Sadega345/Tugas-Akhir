<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a331_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a331_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 3.3 : EVALUASI LULUSAN',
 'a331' => $this->aps_a331_model->listing());
 $this->load->view('Users/Butir3/tampilan_borang3.3.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 3.3 : EVALUASI LULUSAN',
 'a331' => $this->aps_a331_model->listing());
 $this->load->view('Users/Butir3/tampilan_borang3.3.1_excel.php',$data);
 }

}