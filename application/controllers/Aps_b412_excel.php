<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b412_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('Aps_b412_model');
 }

public function index() {
$total1=$this->Aps_b412_model->total1();
$total2=$this->Aps_b412_model->total2();
$banyak1=$this->Aps_b412_model->banyak1();
$banyak2=$this->Aps_b412_model->banyak2();
$prodi=$this->Aps_b412_model->getprodi();
$total=$this->Aps_b412_model->total();
$banyak=$this->Aps_b412_model->banyak();
$this->load->view('Users/Butir4B/tampilan_borang4.1.2.php',array('total1'=>$total1,
																'total2'=>$total2,
																'banyak1'=>$banyak1,
																'banyak2'=>$banyak2,
																'prodi'=>$prodi,
																'total'=>$total,
																'banyak'=>$banyak));
 }

public function ubah(){
 	$this->load->view('Users/Butir4B/tampilan_borang4.1.2.php');
 }

public function export_excel(){
$total1=$this->Aps_b412_model->total1();
$total2=$this->Aps_b412_model->total2();
$banyak1=$this->Aps_b412_model->banyak1();
$banyak2=$this->Aps_b412_model->banyak2();
$prodi=$this->Aps_b412_model->getprodi();
$this->load->view('Users/Butir4B/tampilan_borang4.1.2_excel.php',array('total1'=>$total1,
																'total2'=>$total2,
																'banyak1'=>$banyak1,
																'banyak2'=>$banyak2,
																'prodi'=>$prodi));
 }

}