<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a5122_excel extends CI_Controller {

// Load database
 public function __construct() {
 parent::__construct();
 $this->load->model('aps_a5122_model');
 }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 // 'a5121' => $this->Aps_a5122_model->listing());
 $data=$this->Aps_a5122_model->listing();
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.2.php',array('data'=>$data));
 }

public function tambah(){
	$this->load->view('Users/Butir5/inputan_borang5122.php');
}
public function do_tambah(){
		$kdprodi = $this->session->userdata('kd_prodi');
		$this->model_squrity->getsqurity();
		$kode_mk=$_POST['kode_mk'];
		$jns_mk=$_POST['jns_mk'];
		$smt=$_POST['smt'];
		$nama_mk=$_POST['nama_mk'];
		$bobot_sks=$_POST['bobot_sks'];
		$sks_inti=$_POST['sks_inti'];
		$sks_institusi=$_POST['sks_institusi'];
		$bobot_tgs=$_POST['bobot_tgs'];
		$deskripsi=$_POST['deskripsi'];
		$silabus=$_POST['silabus'];
		$sap=$_POST['sap'];
		$penyelenggara=$_POST['penyelenggara'];
		$data_insert=array(
			'kd_prodi' => $kdprodi,
			'kode_mk'=>$kode_mk,
			'jns_mk'=>$jns_mk,
			'smt' => $smt,
			'nama_mk' => $nama_mk,
			'bobot_sks'=>$bobot_sks,
			'sks_inti' => $sks_inti,
			'sks_institusi' => $sks_institusi,
			'bobot_tgs' => $bobot_tgs,
			'deskripsi' => $deskripsi,
			'silabus' => $silabus,
			'sap' => $sap,
			'penyelenggara' => $penyelenggara,

		);
		$res=$this->Aps_a5122_model->insert('struktur_kurikulum',$data_insert);
		if ($res>=1) {
			redirect('Aps_a5122_excel');
		}else {
			alert('Gagal Insert');
		}
}

	public function ubah($id){
 	$this->model_squrity->getsqurity();
		$res=$this->Aps_a5122_model->update("where id='$id'");
		$data=array(
			"id"=>$res[0]['id'],
			"smt"=>$res[0]['smt'],
			"kode_mk"=>$res[0]['kode_mk'],
			"nama_mk"=>$res[0]['nama_mk'],
			"bobot_sks"=>$res[0]['bobot_sks'],
			"sks_inti"=>$res[0]['sks_inti'],
			"sks_institusi"=>$res[0]['sks_institusi'],
			"bobot_tgs"=>$res[0]['bobot_tgs'],
			"deskripsi"=>$res[0]['deskripsi'],
			"silabus"=>$res[0]['silabus'],
			"sap"=>$res[0]['sap'],
			"penyelenggara"=>$res[0]['penyelenggara'],
		);
		// print_r($data);die;
 	$this->load->view('Users/Butir5/edit_borang5.1.2.2.php',$data);

 }

 public function do_edit(){

		// $kode_mk=$_POST['kode_mk'];
		// $nama_mk=$_POST['nama_mk'];
		$bobot_sks=$_POST['bobot_sks'];
		$id=$_POST['id'];
		
		$sks_inti = $_POST['sks_inti'];
		$sks_institusi = $_POST['sks_institusi'];
		$bobot_tgs = $_POST['bobot_tgs'];
		
		$deskripsi= $_POST['deskripsi'];
		$silabus= $_POST['silabus'];
		$sap= $_POST['sap'];
		$penyelenggara=$_POST['penyelenggara'];
		
		$data_update=array(
			"bobot_sks"=>$bobot_sks,
			"sks_inti"=>$sks_inti,
			"sks_institusi"=>$sks_institusi,
			"bobot_tgs"=>$bobot_tgs,
			"deskripsi"=>$deskripsi,
			"silabus"=>$silabus,

			"sap"=>$sap,
			"penyelenggara"=>$penyelenggara
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die();
		$res=$this->Aps_a5122_model->rubah('struktur_kurikulum',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a5122_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Aps_a5122_model->Delete('struktur_kurikulum',$where);
		if($res>=1){
			redirect('Aps_a5122_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 5.1.2.1 : STRUKTUR KURIKULUM BERDASARKAN URUTAN MK',
 // 'a5121' => $this->Aps_a5122_model->listing());
 $data=$this->Aps_a5122_model->listing();
 $this->load->view('Users/Butir5/tampilan_borang5.1.2.2_excel.php',array('data'=>$data));
 }

}