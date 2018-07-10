<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b411_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('Aps_b411_model');
 }

public function index(){
$prodi=$this->Aps_b411_model->getprodi();
$data1=$this->Aps_b411_model->listing1();
$data2=$this->Aps_b411_model->listing2();
$data3=$this->Aps_b411_model->listing3();
$data4=$this->Aps_b411_model->listing4();
$data5=$this->Aps_b411_model->listing5();
$data6=$this->Aps_b411_model->listing6();
$data7=$this->Aps_b411_model->listing7();
$total1=$this->Aps_b411_model->total1();
$total2=$this->Aps_b411_model->total2();
$total3=$this->Aps_b411_model->total3();
$total4=$this->Aps_b411_model->total4();
$total5=$this->Aps_b411_model->total5();
$total6=$this->Aps_b411_model->total6();
$total7=$this->Aps_b411_model->total7();
$totala=$this->Aps_b411_model->totala();
$totalb=$this->Aps_b411_model->totalb();
$totalaps=$this->Aps_b411_model->totalaps();
$totalbps=$this->Aps_b411_model->totalbps();
$cols=$this->Aps_b411_model->cols();
$this->load->view('Users/Butir4B/tampilan_borang4.1.1.php',array('prodi'=>$prodi,
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

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_b411_model->update("where id='$id'");
	$data=array(
		// // "rata_masa_std"=>$res[0]['rata_masa_std'],
		// // "rata_ipk"=>$res[0]['rata_ipk'],
		// "keterangan"=>$res[0]['keterangan'],
		// "id"=>$res[0]['id'],
		
	);
 	$this->load->view('Users/Butir4B/edit_borang4.1.1.php',$data);
 }

  public function do_edit(){
		// $keterangan=$_POST['keterangan'];
		// $id=$_POST['id'];
		
		// $data_update=array(
		// 	"keterangan"=>$keterangan,
			
		// );
		$where=array('id'=>$id);
		$res=$this->Aps_b411_model->rubah('sdm',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Aps_b411_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
$prodi=$this->Aps_b411_model->getprodi();
$data1=$this->Aps_b411_model->listing1();
$data2=$this->Aps_b411_model->listing2();
$data3=$this->Aps_b411_model->listing3();
$data4=$this->Aps_b411_model->listing4();
$data5=$this->Aps_b411_model->listing5();
$data6=$this->Aps_b411_model->listing6();
$data7=$this->Aps_b411_model->listing7();
$total1=$this->Aps_b411_model->total1();
$total2=$this->Aps_b411_model->total2();
$total3=$this->Aps_b411_model->total3();
$total4=$this->Aps_b411_model->total4();
$total5=$this->Aps_b411_model->total5();
$total6=$this->Aps_b411_model->total6();
$total7=$this->Aps_b411_model->total7();
$totala=$this->Aps_b411_model->totala();
$totalb=$this->Aps_b411_model->totalb();
$totalaps=$this->Aps_b411_model->totalaps();
$totalbps=$this->Aps_b411_model->totalbps();
$this->load->view('Users/Butir4B/tampilan_borang4.1.1_excel.php',array('prodi'=>$prodi,
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