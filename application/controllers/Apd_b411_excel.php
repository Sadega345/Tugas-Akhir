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
// $cols=$this->Apd_b411_model->cols(); 
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
																// 'cols'=>$cols
 																 ));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_b411_model->update("where id='$id'");
	$data=array(
		"id"=>$res[0]['id'],
		"jml"=>$res[0]['id'],

	);
 	$this->load->view('User/Butir4B/tampilan_borang4.1.1.php',$data);
 }

public function do_edit(){
 		
		$jml=$_POST['jml'];
		$id=$_POST['id'];	
		$data_update=array(
		
			"jml"=>$jml,
		);
		$where=array('id'=>$id);
		$res=$this->Apd_b411_model->rubah('sdm',$data_update,$where);
		if ($res>=1) {
			redirect('Apd_b411_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
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