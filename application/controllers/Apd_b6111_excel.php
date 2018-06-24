<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b6111_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_b6111_model');
 // }

public function index() {
 $dana1=$this->Apd_b6111_model->listing1();
 $dana2=$this->Apd_b6111_model->listing2();
 $dana3=$this->Apd_b6111_model->listing3();
 $jml1=$this->Apd_b6111_model->jml1();
 $dana4=$this->Apd_b6111_model->listing4();
 $dana5=$this->Apd_b6111_model->listing5();
 $dana6=$this->Apd_b6111_model->listing6();
 $jml2=$this->Apd_b6111_model->jml2();
 $dana7=$this->Apd_b6111_model->listing7();
 $dana8=$this->Apd_b6111_model->listing8();
 $dana9=$this->Apd_b6111_model->listing9();
 $jml4=$this->Apd_b6111_model->jml4();
 $total=$this->Apd_b6111_model->total();
 $this->load->view('User/Butir6B/tampilan_borang6.1.1.1.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'jml1'=>$jml1,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jml2'=>$jml2,
 																  'dana7'=>$dana7,
 																  'dana8'=>$dana8,
 																  'dana9'=>$dana9,
 																  'jml4'=>$jml4,
 																  'total'=>$total,
																  ));
 }


 public function ubah(){
 	$this->load->view('User/Butir6B/tampilan_borang6.1.1.1.php');
 }

public function export_excel(){
 $dana1=$this->Apd_b6111_model->listing1();
 $dana2=$this->Apd_b6111_model->listing2();
 $dana3=$this->Apd_b6111_model->listing3();
 $jml1=$this->Apd_b6111_model->jml1();
 $dana4=$this->Apd_b6111_model->listing4();
 $dana5=$this->Apd_b6111_model->listing5();
 $dana6=$this->Apd_b6111_model->listing6();
 $jml2=$this->Apd_b6111_model->jml2();
 $dana7=$this->Apd_b6111_model->listing7();
 $dana8=$this->Apd_b6111_model->listing8();
 $dana9=$this->Apd_b6111_model->listing9();
 $jml4=$this->Apd_b6111_model->jml4();
 $total=$this->Apd_b6111_model->total();
 $this->load->view('User/Butir6B/tampilan_borang6.1.1.1_excel.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'jml1'=>$jml1,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jml2'=>$jml2,
 																  'dana7'=>$dana7,
 																  'dana8'=>$dana8,
 																  'dana9'=>$dana9,
 																  'jml4'=>$jml4,
 																  'total'=>$total,
																  ));
 }

}