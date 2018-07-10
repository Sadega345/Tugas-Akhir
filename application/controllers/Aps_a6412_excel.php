<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6412_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('aps_a6412_model');
 // }

public function index() {
$row1=$this->Aps_a6412_model->row1();
$row2=$this->Aps_a6412_model->row2();
$data1=$this->Aps_a6412_model->data1();
$data2=$this->Aps_a6412_model->data2();
$this->load->view('Users/Butir6/tampilan_borang6.4.1.2.php',array('row1' => $row1,
																  'row2'=>$row2,
																  'data1'=>$data1,
																  'data2'=>$data2));
 }

public function export_excel(){
 
 $row1=$this->Aps_a6412_model->row1();
$row2=$this->Aps_a6412_model->row2();
$data1=$this->Aps_a6412_model->data1();
$data2=$this->Aps_a6412_model->data2();
$this->load->view('Users/Butir6/tampilan_borang6.4.1.2_excel.php',array('row1' => $row1,
																  'row2'=>$row2,
																  'data1'=>$data1,
																  'data2'=>$data2));
 }

}