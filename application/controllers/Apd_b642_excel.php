<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b642_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b642_model');
 }

public function index() {
 $data = array( 'title' => 'TABEL DATA BUTIR 6.4.2 : AKSESIBILITAS TIAP JENIS DATA',
 'b642' => $this->apd_b642_model->listing());
 $this->load->view('User/Butir6B/tampilan_borang6.4.2.php',$data);
 }

 public function ubah(){
 	$this->load->view('User/Butir6B/tampilan_borang6.4.2.php');
 }


public function export_excel(){
 $data = array( 'title' => ' TABEL DATA BUTIR 6.4.2 : AKSESIBILITAS TIAP JENIS DATA',
 'b642' => $this->apd_b642_model->listing());
 $this->load->view('User/Butir6B/tampilan_borang6.4.2.php',$data);
 }

}