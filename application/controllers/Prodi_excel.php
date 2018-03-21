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
 $this->load->view('User/PengisiProdi/tampilan_pengisiprodi.php',$data);
 }

public function export_excel(){
 $data = array( 'title' => 'Laporan Data Prodi',
 'prodi' => $this->prodi_model->listing());
 $this->load->view('User/PengisiProdi/tampilan_pengisiprodi_excel.php',$data);
 }

}