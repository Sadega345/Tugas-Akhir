<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a6212_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('Aps_a6212_model');
 }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 // 'a6212' => $this->Aps_a6212_model->listing());
 $data1=$this->Aps_a6212_model->listing1();
 $data2=$this->Aps_a6212_model->listing2();
 $data3=$this->Aps_a6212_model->listing3();
 $data4=$this->Aps_a6212_model->listing4();
 $data5=$this->Aps_a6212_model->listing5();
 $data6=$this->Aps_a6212_model->listing6();
 $data7=$this->Aps_a6212_model->listing7();
 $this->load->view('Users/Butir6/tampilan_borang6.2.1.2.php',array('data1'=>$data1,
 																  'data2'=>$data2,
 																  'data3'=>$data3,
 																  'data4'=>$data4,
 																  'data5'=>$data5,
 																  'data6'=>$data6,
 																  'data7'=>$data7
																  ));
 }

public function ubah($id,$kd_jns){
 	$this->model_squrity->getsqurity();
	$res=$this->Aps_a6212_model->update("where id='$id' and kd_jns='$kd_jns'");
	$data=array(
		"kd_jns"=>$res[0]['kd_jns'],
		"ts_2"=>$res[0]['ts_2'],
		"id"=>$res[0]['id'],
		"ts_1"=>$res[0]['ts_1'],
		"ts"=>$res[0]['ts'],
	);


	if ($kd_jns==1) {
		$this->load->view('Users/Butir6/edit_borang6.2.1.2.php',$data);
	}else if ($kd_jns==2) {
		$this->load->view('Users/Butir6/edit_borang6.2.1.2(2).php',$data);
	}else if ($kd_jns==3) {
		$this->load->view('Users/Butir6/edit_borang6.2.1.2(3).php',$data);
	}else if ($kd_jns==4) {
		$this->load->view('Users/Butir6/edit_borang6.2.1.2(4).php',$data);
	}else if ($kd_jns==5) {
		$this->load->view('Users/Butir6/edit_borang6.2.1.2(5).php',$data);
	}else if ($kd_jns==6) {
		$this->load->view('Users/Butir6/edit_borang6.2.1.2(6).php',$data);
	}else if ($kd_jns==7) {
		$this->load->view('Users/Butir6/edit_borang6.2.1.2(7).php',$data);
	}
 }

 public function do_edit(){
 		$kd_jns=$_POST['kd_jns'];
		$ts_2=$_POST['ts_2'];
		$ts_1=$_POST['ts_1'];
		$ts=$_POST['ts'];
		$id=$_POST['id'];
		
		$data_update=array(
			"ts_2"=>$ts_2,
			"ts_1"=>$ts_1,
			"ts"=>$ts,
			
		);
		$where=array('id'=>$id, 'kd_jns'=>$kd_jns);
		// print_r($data_update);die;
		$res=$this->Aps_a6212_model->rubah('penggunaan_dana',$data_update,$where);
		
		if ($res>=1) {
			redirect('Aps_a6212_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}
public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.2.1 : PEROLEHAN DAN ALOKASI DANA',
 // 'a6212' => $this->Aps_a6212_model->listing());

 $data1=$this->Aps_a6212_model->listing1();
 $data2=$this->Aps_a6212_model->listing2();
 $data3=$this->Aps_a6212_model->listing3();
 $data4=$this->Aps_a6212_model->listing4();
 $data5=$this->Aps_a6212_model->listing5();
 $data6=$this->Aps_a6212_model->listing6();
 $data7=$this->Aps_a6212_model->listing7();
 $this->load->view('Users/Butir6/tampilan_borang6.2.1.2_excel.php',array('data1'=>$data1,
 																  'data2'=>$data2,
 																  'data3'=>$data3,
 																  'data4'=>$data4,
 																  'data5'=>$data5,
 																  'data6'=>$data6,
 																  'data7'=>$data7
																  ));
 
 }

}