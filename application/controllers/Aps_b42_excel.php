<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b42_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('Aps_b42_model');
 }

public function index() {
 $data=$this->Aps_b42_model->getdata();
 $total=$this->Aps_b42_model->gettotal();
 $this->load->view('Users/Butir4B/tampilan_borang4.2.php',array('data'=>$data, 'total'=>$total));
 }

public function ubah(){
 	$this->load->view('Users/Butir4B/tampilan_borang4.2.php');
 }

public function export_excel(){
 $data=$this->Aps_b42_model->getdata();
 $total=$this->Aps_b42_model->gettotal();
 $this->load->view('Users/Butir4B/tampilan_borang4.2_excel.php',array('data'=>$data, 'total'=>$total));
 }

}