<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a652_excel extends CI_Controller {


public function index() {
 $data1=$this->Apd_a652_model->listing1();
 $data2=$this->Apd_a652_model->listing2();
 $data3=$this->Apd_a652_model->listing3();
 $data4=$this->Apd_a652_model->listing4();
 $data5=$this->Apd_a652_model->listing5();
 $data6=$this->Apd_a652_model->listing6();
 $data7=$this->Apd_a652_model->listing7();
 $data8=$this->Apd_a652_model->listing8();
 $data9=$this->Apd_a652_model->listing9();
 $data10=$this->Apd_a652_model->listing10();
 $data11=$this->Apd_a652_model->listing11();
 $totalmanual=$this->Apd_a652_model->totmanual();
 $totalkomp=$this->Apd_a652_model->totkomp();
 $totallan=$this->Apd_a652_model->totlan();
 $totalwan=$this->Apd_a652_model->totwan();
 $this->load->view('User/Butir6/tampilan_borang6.5.2.php',array('data1'=>$data1,
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
 																'totmanual'=>$totalmanual,
																'totkomp'=>$totalkomp,
																'totlan'=>$totallan,
																'totwan'=>$totalwan));
 }

 public function ubah(){
 	$this->load->view('User/Butir6/tampilan_borang6.5.2.php');
 }

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.5.2 : AKSESIBILITAS TIAP JENIS DATA',
 // 'a652' => $this->apd_a652_model->listing());
 $totalmanual=$this->Apd_a652_model->totmanual();
 $totalkomp=$this->Apd_a652_model->totkomp();
 $totallan=$this->Apd_a652_model->totlan();
 $totalwan=$this->Apd_a652_model->totwan();
 $this->load->view('User/Butir6/tampilan_borang6.5.2_excel.php',array('totmanual'=>$totalmanual,
																'totkomp'=>$totalkomp,
																'totlan'=>$totallan,
																'totwan'=>$totalwan));
 
 }

}