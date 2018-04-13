<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosen_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('data_dosen_model');
 // }

public function index() { 
	// $data = array( 'title' => ' TABEL DATA DOSEN',
 // 'dosen_tbl' => $this->Data_dosen_model->listing());
 // $this->load->view('User/DataDosen/tampilan_dosen.php',array('data'=>$data));
 $data = $this->Data_dosen_model->listing();
 $this->load->view('User/DataDosen/tampilan_dosen.php',array('data'=>$data));
}

public function export_excel(){
 $data = $this->Data_dosen_model->listing();
 $this->load->view('User/DataDosen/tampilan_dosen_excel.php',array('data'=>$data));
 }

}