<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a623_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a623_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 // 'a623' => $this->apd_a623_model->listing());
 $data=$this->Apd_a623_model->listing();
 $totaldana=$this->Apd_a623_model->totdana();
 $this->load->view('User/Butir6/tampilan_borang6.2.3.php',array('data'=>$data,
																'totdana'=>$totaldana));
 
 }

public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.2.3.php');
 }

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.3 : DANA PELAYANAN/PENGABDIAN KEPADA MASYARAKAT',
 // 'a623' => $this->apd_a623_model->listing());
 $data=$this->Apd_a623_model->listing();
 $totaldana=$this->Apd_a623_model->totdana();
 $this->load->view('User/Butir6/tampilan_borang6.2.3_excel.php',array('data'=>$data,
																'totdana'=>$totaldana));
 
 }

}