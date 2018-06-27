<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b412_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b412_model');
 }

public function index() {
$total1=$this->Apd_b412_model->total1();
$total2=$this->Apd_b412_model->total2();
$banyak1=$this->Apd_b412_model->banyak1();
$banyak2=$this->Apd_b412_model->banyak2();
$prodi=$this->Apd_b412_model->getprodi();
$this->load->view('User/Butir4B/tampilan_borang4.1.2.php',array('total1'=>$total1,
																'total2'=>$total2,
																'banyak1'=>$banyak1,
																'banyak2'=>$banyak2,
																'prodi'=>$prodi));
 }

public function ubah(){
 	$this->load->view('User/Butir4B/tampilan_borang4.1.2.php');
 }

public function export_excel(){
 $data = array( 'title' => 'TABEL DATA BUTIR 4.1.2 : SUMBER DAYA MANUSIA',
 'b412' => $this->apd_b412_model->listing());
 $this->load->view('User/Butir4B/tampilan_borang4.1.2_excel.php',$data);
 }

}