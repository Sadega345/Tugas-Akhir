<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6211_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a6211_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6211' => $this->aps_a6211_model->listing());
 $this->load->view('Users/Butir6/tampilan_borang6.2.1.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 'a6211' => $this->aps_a6211_model->listing());
 $this->load->view('Users/Butir6/tampilan_borang6.2.1.php',$data);
 }

}