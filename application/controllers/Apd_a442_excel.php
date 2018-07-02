<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a442_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a442_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP ',
 // 'a442' => $this->apd_a442_model->listing());
 $data=$this->Apd_a442_model->listing();
 $tot_pertemuan=$this->Apd_a442_model->tot_pertemuan();
 $tot_dilaksanakan=$this->Apd_a442_model->tot_dilaksanakan();
 $this->load->view('User/Butir4/tampilan_borang4.4.2.php',array('data'=>$data,
																'total'=>$tot_pertemuan,
																'totdilaksanakan'=>$tot_dilaksanakan));
 }

 public function ubah($kode_mk){
 	$this->model_squrity->getsqurity();
		$res=$this->Apd_a442_model->update("where kode_mk='$kode_mk'");
		$data=array(
			"nama_dosen"=>$res[0]['nama_dosen'],
			"kode_mk"=>$res[0]['kode_mk'],
			"nama_mk"=>$res[0]['nama_mk'],
			"jml_sks"=>$res[0]['jml_sks'],
			"jp_rencana"=>$res[0]['jp_rencana'],
			"jp_dilaksanakan"=>$res[0]['jp_dilaksanakan'],
			
		);
 	$this->load->view('User/Butir4/edit_borang4.4.2.php',$data);
 }

 public function do_edit(){
		// $nama_dosen=$_POST['nama_dosen'];
		$kode_mk=$_POST['kode_mk'];
		$nama_mk=$_POST['nama_mk'];
		$jml_sks=$_POST['jml_sks'];
		$jp_rencana=$_POST['jp_rencana'];
		$jp_dilaksanakan=$_POST['jp_dilaksanakan'];
		
		$data_update=array(
			"kode_mk"=>$kode_mk,
			"nama_mk"=>$nama_mk,
			"jml_sks"=>$jml_sks,
			"jp_rencana"=>$jp_rencana,
			"jp_dilaksanakan"=>$jp_dilaksanakan
			
		);
		$where=array('kode_mk'=>$kode_mk);
		$res=$this->Apd_a442_model->rubah('aktivitas_mengajar',$data_update,$where);
		if ($res>=1) {
			redirect('Apd_a442_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP ',
 // 'a442' => $this->apd_a442_model->listing());
 $data=$this->Apd_a442_model->listing();
 $tot_pertemuan=$this->Apd_a442_model->tot_pertemuan();
 $tot_dilaksanakan=$this->Apd_a442_model->tot_dilaksanakan();
 $this->load->view('User/Butir4/tampilan_borang4.4.2_excel.php',array('data'=>$data,
																'total'=>$tot_pertemuan,
																'totdilaksanakan'=>$tot_dilaksanakan));
 }

  public function tambah(){
		$this->load->view('User/Butir4/inputan_borang4.4.2.php');
 }

	public function do_tambah(){
		$this->model_squrity->getsqurity();
		//$id=$_POST['id'];
		$id_dosen=$_POST['id_dosen'];
		$kode_mk=$_POST['kode_mk'];
		$nama_mk=$_POST['nama_mk'];
		$jml_sks=$_POST['jml_sks'];
		$jp_rencana=$_POST['jp_rencana'];
		$jp_dilaksanakan=$_POST['jp_dilaksanakan'];
		$data_insert=array(
			'id_dosen' => $id_dosen,
			'kode_mk' => $kode_mk,
			'nama_mk'=>$nama_mk,
			'jml_sks'=>$jml_sks,
			'jp_rencana' => $jp_rencana,
			'jp_dilaksanakan' => $jp_dilaksanakan,
		);
		// print_r($data_insert);die();
		$res=$this->Apd_a442_model->insert('aktivitas_mengajar',$data_insert);
		if ($res>=1) {
			redirect('Apd_a442_excel');
		}else {
			alert('Gagal Insert');
		}
	}
public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Apd_a442_model->Delete('aktivitas_mengajar',$where);
		if($res>=1){
			redirect('Apd_a442_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

}