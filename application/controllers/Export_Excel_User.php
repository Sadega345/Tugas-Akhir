<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export_Excel_User extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('data_dosen_model');
 // }

public function index() { 
	
 $data = $this->Data_dosen_model->listing();
 $this->load->view('User/DataDosen/tampilan_dosen.php',array('data'=>$data));
}



}