<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a433_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a433_model');
 // }

public function index() {
 // $data = array( 'title' => '  TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS',
 // 'a433' => $this->apd_a433_model->listing());
 $data=$this->Apd_a433_model->listing();
 $hitung=$this->Apd_a433_model->hitung();
 $ptsendiri=$this->Apd_a433_model->jumlah_ps_lain_pt_sendiri();
 $ptlain=$this->Apd_a433_model->jumlah_ptlain();
 $penelitian=$this->Apd_a433_model->jumlah_penelitian();
 $pengabdian=$this->Apd_a433_model->sks_pengabdian();
 $jumsks=$this->Apd_a433_model->jum_sks();
 $manptlain=$this->Apd_a433_model->man_ptlain();
 $totsks=$this->Apd_a433_model->tot_sks();
 $ratapssendiri=$this->Apd_a433_model->rata_ps_sendiri();
 $rataprlain=$this->Apd_a433_model->rata_prlain();
 $rataptlain=$this->Apd_a433_model->rata_ptlain();
 $ratapenelitian=$this->Apd_a433_model->rata_penelitian();
 $ratapengmas=$this->Apd_a433_model->rata_pengmas();

 $rataman=$this->Apd_a433_model->rata_manptsendiri();
 
 $ratamanlain=$this->Apd_a433_model->rata_manptlain();
 $ratajum=$this->Apd_a433_model->rata_jumsks();
 $this->load->view('User/Butir4/tampilan_borang4.3.3.php',array('data'=>$data,
 																'hitung'=>$hitung,
 																'pt'=>$ptsendiri,
 																'lain'=>$ptlain,
 																'penelitian'=>$penelitian,
 																'pengabdian'=>$pengabdian,
 																'jumsks'=>$jumsks,
 																'manptlain'=>$manptlain,
 																'totsks'=>$totsks,
 																'rata'=>$ratapssendiri,
 																'prlain'=>$rataprlain,
 																'ptlain'=>$rataptlain,
 																'ratapenelitian'=>$ratapenelitian,
 																'pengmas'=>$ratapengmas,
 																'man'=>$rataman,
 																'manlain'=>$ratamanlain,
 																'ratajumsks'=>$ratajum));
 // $this->load->view('User/Butir4/tampilan_borang4.3.3.php',array('data'=>$jum));
 }

 public function ubah(){
 	$this->load->view('User/Butir4/edit_borang4.3.3.php');
 }

public function export_excel(){
 // $data = array( 'title' => '  TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS',
 // 'a433' => $this->apd_a433_model->listing());
 $data=$this->Apd_a433_model->listing();
 $this->load->view('User/Butir4/tampilan_borang4.3.3_excel.php',array('data'=>$data));
 }

}