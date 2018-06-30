<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b6112_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('Aps_b6112_model');
 }

public function index() {
 $dana1=$this->Aps_b6112_model->listing1();
 $dana2=$this->Aps_b6112_model->listing2();
 $dana3=$this->Aps_b6112_model->listing3();
 $dana4=$this->Aps_b6112_model->listing4();
 $dana5=$this->Aps_b6112_model->listing5();
 $dana6=$this->Aps_b6112_model->listing6();
 $jmldanaopr=$this->Aps_b6112_model->jmldanaopr();
 $jmldanainv=$this->Aps_b6112_model->jmldanainv();
 $jmldanagab=$this->Aps_b6112_model->jmldanagab();
 $this->load->view('Users/Butir6B/tampilan_borang6.1.1.2.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jmldanaopr'=>$jmldanaopr,
 																  'jmldanainv'=>$jmldanainv,
 																  'jmldanagab'=>$jmldanagab
																  )); 

 }

 public function ubah(){
 	$this->load->view('Users/Butir6B/tampilan_borang6.1.1.2.php');
 }


public function export_excel(){
 $dana1=$this->Aps_b6112_model->listing1();
 $dana2=$this->Aps_b6112_model->listing2();
 $dana3=$this->Aps_b6112_model->listing3();
 $dana4=$this->Aps_b6112_model->listing4();
 $dana5=$this->Aps_b6112_model->listing5();
 $dana6=$this->Aps_b6112_model->listing6();
 $jmldanaopr=$this->Aps_b6112_model->jmldanaopr();
 $jmldanainv=$this->Aps_b6112_model->jmldanainv();
 $jmldanagab=$this->Aps_b6112_model->jmldanagab();
 $this->load->view('Users/Butir6B/tampilan_borang6.1.1.2_excel.php',array('dana1'=>$dana1,
 																  'dana2'=>$dana2,
 																  'dana3'=>$dana3,
 																  'dana4'=>$dana4,
 																  'dana5'=>$dana5,
 																  'dana6'=>$dana6,
 																  'jmldanaopr'=>$jmldanaopr,
 																  'jmldanainv'=>$jmldanainv,
 																  'jmldanagab'=>$jmldanagab
																  )); 
 }

}