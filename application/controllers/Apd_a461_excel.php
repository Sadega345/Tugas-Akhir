<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a461_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a461_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN',
 // 'a461' => $this->apd_a461_model->listing());
 $data=$this->Apd_a461_model->listing();
 $totals3=$this->Apd_a461_model->tots3();
 $totals2=$this->Apd_a461_model->tots2();
 $totals1=$this->Apd_a461_model->tots1();
 $totald4=$this->Apd_a461_model->totd4();
 $totald3=$this->Apd_a461_model->totd3();
 $totald2=$this->Apd_a461_model->totd2();
 $totald1=$this->Apd_a461_model->totd1();
 $totalsma=$this->Apd_a461_model->totsma();
 $this->load->view('User/Butir4/tampilan_borang4.6.1.php',array('data'=>$data,
																'tots3'=>$totals3,
																'tots2'=>$totals2,
																'tots1'=>$totals1,
																'totd4'=>$totald4,
																'totd3'=>$totald3,
																'totd2'=>$totald2,
																'totd1'=>$totald1,
																'totsma'=>$totalsma));
 }

 public function ubah($kd_jns){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a461_model->update("where kd_jns='$kd_jns'");
	$data=array(
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
		"kd_jns"=>$res[0]['kd_jns']
		
	);
	 $this->load->view('User/Butir4/edit_borang4.6.1.php',$data);
 }

 public function do_edit(){
		$s3=$_POST['s3'];
		$s2=$_POST['s2'];
		$s1=$_POST['s1'];
		$d4=$_POST['d4'];
		$d3=$_POST['d3'];
		$d2=$_POST['d2'];
		$d1=$_POST['d1'];
		$sma=$_POST['sma'];
		$unit_kerja=$_POST['unit_kerja'];
		$kd_jns=$_POST['kd_jns'];

		
		$data_update=array(
			"s3"=>$s3,
			"s2"=>$s2,
			"s1"=>$s1,
			"d4"=>$d4,
			"d3"=>$d3,
			"d2"=>$d2,
			"d1"=>$d1,
			"sma"=>$sma,
			"unit_kerja"=>$unit_kerja,
			// "kd_jns" => $kd_jns
		);
		$where=array('kd_jns'=>$kd_jns);
		// print_r($data_update);die;
		$res=$this->Apd_a461_model->rubah('tenaga_kepend',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a461_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function tambah(){
		$this->load->view('User/Butir4/inputan_borang4.6.1.php');
}

	public function do_tambah(){
		$this->model_squrity->getsqurity();
		$id_dosen=$_POST['id_dosen'];
		$jenjang_pend=$_POST['jenjang_pend'];
		$bid_studi=$_POST['bid_studi'];
		$perguruan_tinggi=$_POST['perguruan_tinggi'];
		$negara=$_POST['negara'];
		$thn_mulai_std=$_POST['thn_mulai_std'];
		$data_insert=array(
			'id_dosen' => $id_dosen,
			'jenjang_pend' => $jenjang_pend,
			'bid_studi'=>$bid_studi,
			'perguruan_tinggi'=>$perguruan_tinggi,
			'negara' => $negara,
			'thn_mulai_std' => $thn_mulai_std
		);
		$res=$this->Apd_a461_model->insert('pkdt_tgs_belajar',$data_insert);
		if ($res>=1) {
			redirect('Apd_a461_excel');
		}else {
			alert('Gagal Insert');
		}
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.6.1 : STATISTIK TENAGA KEPENDIDIKAN',
 // 'a461' => $this->apd_a461_model->listing());
 $data=$this->Apd_a461_model->listing();
 $totals3=$this->Apd_a461_model->tots3();
 $totals2=$this->Apd_a461_model->tots2();
 $totals1=$this->Apd_a461_model->tots1();
 $totald4=$this->Apd_a461_model->totd4();
 $totald3=$this->Apd_a461_model->totd3();
 $totald2=$this->Apd_a461_model->totd2();
 $totald1=$this->Apd_a461_model->totd1();
 $totalsma=$this->Apd_a461_model->totsma();
 $this->load->view('User/Butir4/tampilan_borang4.6.1_excel.php',array('data'=>$data,
																'tots3'=>$totals3,
																'tots2'=>$totals2,
																'tots1'=>$totals1,
																'totd4'=>$totald4,
																'totd3'=>$totald3,
																'totd2'=>$totald2,
																'totd1'=>$totald1,
																'totsma'=>$totalsma));
 }

}