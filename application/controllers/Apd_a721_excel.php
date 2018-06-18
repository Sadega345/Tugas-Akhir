<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a721_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a721_model');
 // }

public function index() {
 // $data = array( 'title' => 'TABEL DATA BUTIR 7.2.1 : KEGIATAN PELAYANAN/PENGABDIAN KEPADA MASYARAKAT (PKM)',
 // 'a721' => $this->apd_a721_model->listing());
 $data=$this->Apd_a721_model->dosen();
 $bersangkutan=$this->Apd_a721_model->bersangkutan();
 $kemristekdikti=$this->Apd_a721_model->kemristekdikti();
 $luarkemristekdikti=$this->Apd_a721_model->luarkemristekdikti();
 $luarnegeri=$this->Apd_a721_model->luarnegeri();

 $this->load->view('User/Butir7/tampilan_borang7.2.1.php',array('data'=>$data,
																'bersangkutan'=>$bersangkutan,
																'kemristekdikti'=>$kemristekdikti,
																'luarkemristekdikti'=>$luarkemristekdikti,
																'luarnegeri'=>$luarnegeri));
 }

 public function ubah(){
 	$this->load->view('User/Butir7/tampilan_borang7.2.1.php');
 }

public function export_excel(){
 $data=$this->Apd_a721_model->dosen();
 $bersangkutan=$this->Apd_a721_model->bersangkutan();
 $kemristekdikti=$this->Apd_a721_model->kemristekdikti();
 $luarkemristekdikti=$this->Apd_a721_model->luarkemristekdikti();
 $luarnegeri=$this->Apd_a721_model->luarnegeri();

 $this->load->view('User/Butir7/tampilan_borang7.2.1_excel.php',array('data'=>$data,
																'bersangkutan'=>$bersangkutan,
																'kemristekdikti'=>$kemristekdikti,
																'luarkemristekdikti'=>$luarkemristekdikti,
																'luarnegeri'=>$luarnegeri));
 
 }

}