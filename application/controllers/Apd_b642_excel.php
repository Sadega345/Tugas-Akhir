<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b642_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_b642_model');
 // }

public function index() {
 $data1=$this->Apd_b642_model->listing1();
 $data2=$this->Apd_b642_model->listing2();
 $data3=$this->Apd_b642_model->listing3();
 $data4=$this->Apd_b642_model->listing4();
 $data5=$this->Apd_b642_model->listing5();
 $data6=$this->Apd_b642_model->listing6();
 $data7=$this->Apd_b642_model->listing7();
 $data8=$this->Apd_b642_model->listing8();
 $data9=$this->Apd_b642_model->listing9();
 $data10=$this->Apd_b642_model->listing10();
 $data11=$this->Apd_b642_model->listing11();
 $data12=$this->Apd_b642_model->listing12();
 $totalmanual=$this->Apd_b642_model->totmanual();
 $totalkomp=$this->Apd_b642_model->totkomp();
 $totallan=$this->Apd_b642_model->totlan();
 $totalwan=$this->Apd_b642_model->totwan();
 $this->load->view('User/Butir6B/tampilan_borang6.4.2.php',array('data1'=>$data1,
 																'data2'=>$data2,
 																'data3'=>$data3,
 																'data4'=>$data4,
 																'data5'=>$data5,
 																'data6'=>$data6,
 																'data7'=>$data7,
 																'data8'=>$data8,
 																'data9'=>$data9,
 																'data10'=>$data10,
 																'data11'=>$data11,
 																'data12'=>$data12,
 																'totmanual'=>$totalmanual,
																'totkomp'=>$totalkomp,
																'totlan'=>$totallan,
																'totwan'=>$totalwan));
 }

 public function ubah(){
 	$this->load->view('User/Butir6B/tampilan_borang6.4.2.php');
 }


public function export_excel(){
 $data1=$this->Apd_b642_model->listing1();
 $data2=$this->Apd_b642_model->listing2();
 $data3=$this->Apd_b642_model->listing3();
 $data4=$this->Apd_b642_model->listing4();
 $data5=$this->Apd_b642_model->listing5();
 $data6=$this->Apd_b642_model->listing6();
 $data7=$this->Apd_b642_model->listing7();
 $data8=$this->Apd_b642_model->listing8();
 $data9=$this->Apd_b642_model->listing9();
 $data10=$this->Apd_b642_model->listing10();
 $data11=$this->Apd_b642_model->listing11();
 $data12=$this->Apd_b642_model->listing12();
 $totalmanual=$this->Apd_b642_model->totmanual();
 $totalkomp=$this->Apd_b642_model->totkomp();
 $totallan=$this->Apd_b642_model->totlan();
 $totalwan=$this->Apd_b642_model->totwan();
 $this->load->view('User/Butir6B/tampilan_borang6.4.2_excel.php',array('data1'=>$data1,
 																'data2'=>$data2,
 																'data3'=>$data3,
 																'data4'=>$data4,
 																'data5'=>$data5,
 																'data6'=>$data6,
 																'data7'=>$data7,
 																'data8'=>$data8,
 																'data9'=>$data9,
 																'data10'=>$data10,
 																'data11'=>$data11,
 																'data12'=>$data12,
 																'totmanual'=>$totalmanual,
																'totkomp'=>$totalkomp,
																'totlan'=>$totallan,
																'totwan'=>$totalwan));
 }

}