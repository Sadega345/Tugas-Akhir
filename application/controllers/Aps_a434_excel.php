<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a434_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a434_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.4 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS  ',
 // 'a434' => $this->Aps_a434_model->listing());
$data=$this->Aps_a434_model->listing();
$jumlah=$this->Aps_a434_model->hitung();
$jumlah2=$this->Aps_a434_model->hitung2();
 $this->load->view('Users/Butir4/tampilan_borang4.3.4.php',array('data'=>$data,
 																'jumlah'=>$jumlah,
 																'jumlah2'=>$jumlah2));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
		$res=$this->Aps_a434_model->update("where id='$id'");
		$data=array(
			"nama_dosen"=>$res[0]['nama_dosen'],
			"bid_keahlian"=>$res[0]['bid_keahlian'],
			"kode_mk"=>$res[0]['kode_mk'],
			"nama_mk"=>$res[0]['nama_mk'],
			"jum_kls"=>$res[0]['jum_kls'],
			"jp_rencana"=>$res[0]['jp_rencana'],
			"jp_dilaksanakan"=>$res[0]['jp_dilaksanakan'],
			"id"=>$res[0]['id']
		);
 	$this->load->view('Users/Butir4/edit_borang4.3.4.php',$data);
 }

 public function do_edit(){
		// $nama_dosen=$_POST['nama_dosen'];
		$bid_keahlian=$_POST['bid_keahlian'];
		$kode_mk=$_POST['kode_mk'];
		$id=$_POST['id'];
		$nama_mk=$_POST['nama_mk'];
		$jum_kls=$_POST['jum_kls'];
		$jp_rencana=$_POST['jp_rencana'];
		$jp_dilaksanakan=$_POST['jp_dilaksanakan'];
		$data_update=array(
			// "nama_dosen"=>$nama_dosen,
			"bid_keahlian"=>$bid_keahlian,
			"kode_mk"=>$kode_mk,
			"nama_mk"=>$nama_mk,
			"jum_kls"=>$jum_kls,
			"jp_rencana"=>$jp_rencana,
			"jp_dilaksanakan"=>$jp_dilaksanakan,
		);
		// print_r($data_update);die;
		$where=array('id'=>$id);
		$res=$this->Aps_a434_model->rubah('aktivitas_mengajar',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a434_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => '  TABEL DATA BUTIR 4.3.4 : AKTIVITAS MENGAJAR DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS  ',
 // 'a434' => $this->Aps_a434_model->listing());
 $data=$this->Aps_a434_model->listing();
 $jumlah=$this->Aps_a434_model->hitung();
 $jumlah2=$this->Aps_a434_model->hitung2();
 $this->load->view('Users/Butir4/tampilan_borang4.3.4_excel.php',array('data'=>$data,
 																	  'jumlah'=>$jumlah,
 																	  'jumlah2'=>$jumlah2));
 }

  public function tambah(){
		$this->load->view('Users/Butir4/inputan_borang4.3.4.php');
 }

 	public function do_tambah(){
		$this->model_squrity->getsqurity();
		$id_dosen=$_POST['id_dosen'];
		$bid_keahlian=$_POST['bid_keahlian'];
		$kode_mk=$_POST['kode_mk'];
		$nama_mk=$_POST['nama_mk'];
		$jum_kls=$_POST['jum_kls'];
		$jp_rencana=$_POST['jp_rencana'];
		$jp_dilaksanakan=$_POST['jp_dilaksanakan'];
		$data_insert=array(
			'id_dosen' => $id_dosen,
			'bid_keahlian' => $bid_keahlian,
			'kode_mk'=>$kode_mk,
			'nama_mk'=>$nama_mk,
			'jum_kls'=>$jum_kls,
			'jp_rencana' => $jp_rencana,
			'jp_dilaksanakan' => $jp_dilaksanakan
		);
		// print_r($data_insert);die();
		$res=$this->Aps_a434_model->insert('aktivitas_mengajar',$data_insert);
		if ($res>=1) {
			redirect('Aps_a434_excel');
		}else {
			alert('Gagal Insert');
		}
	}
public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Aps_a434_model->Delete('aktivitas_mengajar',$where);
		if($res>=1){
			redirect('Aps_a434_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

}