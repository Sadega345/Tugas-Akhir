<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a6211_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a6211_model');
 // }

public function index() {
 $dana1=$this->Apd_a6211_model->listing1();
 $dana2=$this->Apd_a6211_model->listing2();
 $dana3=$this->Apd_a6211_model->listing3();
 $jml1=$this->Apd_a6211_model->jml1();
 $dana4=$this->Apd_a6211_model->listing4();
 $dana5=$this->Apd_a6211_model->listing5();
 $dana6=$this->Apd_a6211_model->listing6();
 $jml2=$this->Apd_a6211_model->jml2();
 $dana7=$this->Apd_a6211_model->listing7();
 $dana8=$this->Apd_a6211_model->listing8();
 $dana9=$this->Apd_a6211_model->listing9();
 $jml4=$this->Apd_a6211_model->jml4();
 $total=$this->Apd_a6211_model->total();
 $this->load->view('User/Butir6/tampilan_borang6.2.1.1.php',array('dana1'=>$dana1,
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
 	$this->load->view('User/Butir6/tampilan_borang6.2.1.1.php');
 }

public function export_excel(){
 $dana1=$this->Apd_a6211_model->listing1();
 $dana2=$this->Apd_a6211_model->listing2();
 $dana3=$this->Apd_a6211_model->listing3();
 $jml1=$this->Apd_a6211_model->jml1();
 $dana4=$this->Apd_a6211_model->listing4();
 $dana5=$this->Apd_a6211_model->listing5();
 $dana6=$this->Apd_a6211_model->listing6();
 $jml2=$this->Apd_a6211_model->jml2();
 $dana7=$this->Apd_a6211_model->listing7();
 $dana8=$this->Apd_a6211_model->listing8();
 $dana9=$this->Apd_a6211_model->listing9();
 $jml4=$this->Apd_a6211_model->jml4();
 $total=$this->Apd_a6211_model->total();
 $this->load->view('User/Butir6/tampilan_borang6.2.1.1_excel.php',array('dana1'=>$dana1,
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