<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b411_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b411_model');
 }

public function index(){
$prodi=$this->Apd_b411_model->getprodi();
$data1=$this->Apd_b411_model->listing1();
$data2=$this->Apd_b411_model->listing2();
$data3=$this->Apd_b411_model->listing3();
$data4=$this->Apd_b411_model->listing4();
$data5=$this->Apd_b411_model->listing5();
$data6=$this->Apd_b411_model->listing6();
$data7=$this->Apd_b411_model->listing7();
$total1=$this->Apd_b411_model->total1();
$total2=$this->Apd_b411_model->total2();
$total3=$this->Apd_b411_model->total3();
$total4=$this->Apd_b411_model->total4();
$total5=$this->Apd_b411_model->total5();
$total6=$this->Apd_b411_model->total6();
$total7=$this->Apd_b411_model->total7();
$totala=$this->Apd_b411_model->totala();
$totalb=$this->Apd_b411_model->totalb();
$totalaps=$this->Apd_b411_model->totalaps();
$totalbps=$this->Apd_b411_model->totalbps();
$cols=$this->Apd_b411_model->cols(); 
$this->load->view('User/Butir4B/tampilan_borang4.1.1.php',array('prodi'=>$prodi,
																'data1'=>$data1,
																'data2'=>$data2,
																'data3'=>$data3,
																'data4'=>$data4,
																'data5'=>$data5,
																'data6'=>$data6,
																'data7'=>$data7,
																'total1'=>$total1,
																'total2'=>$total2,
																'total3'=>$total3,
																'total4'=>$total4,
																'total5'=>$total5,
																'total6'=>$total6,
																'total7'=>$total7,
																'totalaps'=>$totalaps,
																'totalbps'=>$totalbps,
																'totala'=>$totala,
																'totalb'=>$totalb,
																'cols'=>$cols
 																 ));
 }

 public function ubah(){
 	$this->load->view('User/Butir4B/tampilan_borang4.1.1.php');
 }

public function export_excel(){
$prodi=$this->Apd_b411_model->getprodi();
$data1=$this->Apd_b411_model->listing1();
$data2=$this->Apd_b411_model->listing2();
$data3=$this->Apd_b411_model->listing3();
$data4=$this->Apd_b411_model->listing4();
$data5=$this->Apd_b411_model->listing5();
$data6=$this->Apd_b411_model->listing6();
$data7=$this->Apd_b411_model->listing7();
$total1=$this->Apd_b411_model->total1();
$total2=$this->Apd_b411_model->total2();
$total3=$this->Apd_b411_model->total3();
$total4=$this->Apd_b411_model->total4();
$total5=$this->Apd_b411_model->total5();
$total6=$this->Apd_b411_model->total6();
$total7=$this->Apd_b411_model->total7();
$totala=$this->Apd_b411_model->totala();
$totalb=$this->Apd_b411_model->totalb();
$totalaps=$this->Apd_b411_model->totalaps();
$totalbps=$this->Apd_b411_model->totalbps();
$this->load->view('User/Butir4B/tampilan_borang4.1.1_excel.php',array('prodi'=>$prodi,
																'data1'=>$data1,
																'data2'=>$data2,
																'data3'=>$data3,
																'data4'=>$data4,
																'data5'=>$data5,
																'data6'=>$data6,
																'data7'=>$data7,
																'total1'=>$total1,
																'total2'=>$total2,
																'total3'=>$total3,
																'total4'=>$total4,
																'total5'=>$total5,
																'total6'=>$total6,
																'total7'=>$total7,
																'totalaps'=>$totalaps,
																'totalbps'=>$totalbps,
																'totala'=>$totala,
																'totalb'=>$totalb
 																 ));
 }

}