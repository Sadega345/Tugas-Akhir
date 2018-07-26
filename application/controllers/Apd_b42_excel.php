<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b42_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('apd_b42_model');
 }

public function index() {
 $data=$this->Apd_b42_model->getdata();
 $total=$this->Apd_b42_model->gettotal();
 $this->load->view('User/Butir4B/tampilan_borang4.2.php',array('data'=>$data, 'total'=>$total));
 }

public function ubah($id){
		$this->model_squrity->getsqurity();
		$res=$this->Apd_b42_model->update("where id=$id");
		$data=array(
			"id"=>$res[0]['id'],
			"jns_tng_kepend"=>$res[0]['jns_tng_kepend'],
			"s3"=>$res[0]['s3'],
			"s2"=>$res[0]['s2'],
			"s1"=>$res[0]['s1'],
			"d4"=>$res[0]['d4'],
			"d3"=>$res[0]['d3'],
			"d2"=>$res[0]['d2'],
			"d1"=>$res[0]['d1'],
			"sma"=>$res[0]['sma'],
			"unit_kerja"=>$res[0]['unit_kerja'],
		);
		$this->load->view('User/Butir4B/edit_borang4.2.php',$data);
	}

	public function do_edit(){
		$id=$_POST['id'];
		$jns_tng_kepend=$_POST['jns_tng_kepend'];
		$s3=$_POST['s3'];
		$s2=$_POST['s2'];
		$s1=$_POST['s1'];
		$d4=$_POST['d4'];
		$d3=$_POST['d3'];
		$d2=$_POST['d2'];
		$d1=$_POST['d1'];
		$sma=$_POST['sma'];
		$unit_kerja=$_POST['unit_kerja'];
		$data_update=array(
			's3' => $s3,
			's2' => $s2,
			's1' => $s1,
			'd4'=> $d4,
			'd3' => $d3,
			'd2' => $d2,
			'd1' => $d1,
			'sma' => $sma,
			'unit_kerja' => $unit_kerja,
		);
		$where=array('id'=>$id);
		$res=$this->Apd_b42_model->rubah('tenaga_kepend',$data_update,$where);
		if ($res>=1) {
			redirect('Apd_b42_excel');
		}
		else {
			alert("Gagal Update") ;
		}
	}

public function export_excel(){
 $data=$this->Apd_b42_model->getdata();
 $total=$this->Apd_b42_model->gettotal();
 $this->load->view('User/Butir4B/tampilan_borang4.2_excel.php',array('data'=>$data, 'total'=>$total));
 }

}