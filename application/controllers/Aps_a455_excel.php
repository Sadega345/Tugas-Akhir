<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a455_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a455_model');
 }

public function index() {
 $data = array( 'title' => ' TABEL DATA BUTIR 4.5.5 : KEIKUTSERTAAN DOSEN TETAP DALAM ORGANISASI KEILMUAN/PROFESI',
 'a455' => $this->aps_a455_model->listing());
 $this->load->view('Users/Butir4/tampilan_borang4.5.5.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 4.5.5 : KEIKUTSERTAAN DOSEN TETAP DALAM ORGANISASI KEILMUAN/PROFESI',
 'a455' => $this->aps_a455_model->listing());
 $this->load->view('Users/Butir4/tampilan_borang4.5.5_excel.php',$data);
 }

}