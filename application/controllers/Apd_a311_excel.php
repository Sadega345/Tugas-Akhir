<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a311_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a311_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 // 'a311' => $this->apd_a311_model->listing());
 $data=$this->Apd_a311_model->listing();

 $jumdtampung=$this->Apd_a311_model->jumdtampung();
$iseleksi=$this->Apd_a311_model->iseleksi();

$barutransfer=$this->Apd_a311_model->barutransfer();
$totbukantransfer=$this->Apd_a311_model->totbukantransfer();

$tottransfer=$this->Apd_a311_model->tottransfer();
$lulusanregbukantransfer=$this->Apd_a311_model->lulusanregbukantransfer();

$jumlulusantransfer=$this->Apd_a311_model->jumlulusantransfer();

 $this->load->view('User/Butir3/tampilan_borang3.1.1.php',array('data'=>$data,

 																'jumdtampung'=>$jumdtampung,
 																'iseleksi'=>$iseleksi,

 																'barutransfer'=>$barutransfer,
 																'totbukantransfer'=>$totbukantransfer,

 																'tottransfer'=>$tottransfer,
 																'lulusanregbukantransfer'=>$lulusanregbukantransfer,
 																'jumlulusantransfer'=>$jumlulusantransfer));
 }

 public function ubah(){
 	$this->load->view('User/Butir3/edit_borang3.1.1.php');
 }

public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 3.1 : PROFIL MAHASISWA DAN LULUSAN',
 // 'a311' => $this->apd_a311_model->listing());
 $data=$this->Apd_a311_model->listing();

 $jumdtampung=$this->Apd_a311_model->jumdtampung();
$iseleksi=$this->Apd_a311_model->iseleksi();

$barutransfer=$this->Apd_a311_model->barutransfer();
$totbukantransfer=$this->Apd_a311_model->totbukantransfer();

$tottransfer=$this->Apd_a311_model->tottransfer();
$lulusanregbukantransfer=$this->Apd_a311_model->lulusanregbukantransfer();

$jumlulusantransfer=$this->Apd_a311_model->jumlulusantransfer();

 $this->load->view('User/Butir3/tampilan_borang3.1.1_excel.php',array('data'=>$data,

 																'jumdtampung'=>$jumdtampung,
 																'iseleksi'=>$iseleksi,

 																'barutransfer'=>$barutransfer,
 																'totbukantransfer'=>$totbukantransfer,

 																'tottransfer'=>$tottransfer,
 																'lulusanregbukantransfer'=>$lulusanregbukantransfer,
 																'jumlulusantransfer'=>$jumlulusantransfer));
}

}