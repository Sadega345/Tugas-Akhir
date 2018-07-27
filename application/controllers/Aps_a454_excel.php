<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a454_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a454_model');
 }

public function index() {
$data=$this->Aps_a454_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.5.4.php',array('data'=>$data));
 }

public function export_excel(){
$data=$this->Aps_a454_model->listing();
 $this->load->view('Users/Butir4/tampilan_borang4.5.4_excel.php',array('data'=>$data));
 }

}