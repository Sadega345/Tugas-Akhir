<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a622_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a622_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.2 : DANA UNTUK KEGIATAN PENELITIAN',
 'a622' => $this->aps_a622_model->listing());
 $this->load->view('Users/Butir6/tampilan_borang6.2.2.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 6.2.2 : DANA UNTUK KEGIATAN PENELITIAN',
 'a622' => $this->aps_a622_model->listing());
 $this->load->view('Users/Butir6/tampilan_borang6.2.2_excel.php',$data);
 }

}