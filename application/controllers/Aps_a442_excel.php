<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a442_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a442_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP ',
 // 'a442' => $this->Aps_a442_model->listing());
 $data=$this->Aps_a442_model->listing();
 $tot_pertemuan=$this->Aps_a442_model->tot_pertemuan();
 $tot_dilaksanakan=$this->Aps_a442_model->tot_dilaksanakan();
 $this->load->view('Users/Butir4/tampilan_borang4.4.2.php',array('data'=>$data,
																'total'=>$tot_pertemuan,
																'totdilaksanakan'=>$tot_dilaksanakan));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
		$res=$this->Aps_a442_model->update("where id='$id'");
		$data=array(
			"nama_dosen"=>$res[0]['nama_dosen'],
			"kode_mk"=>$res[0]['kode_mk'],
			"nama_mk"=>$res[0]['nama_mk'],
			"jml_sks"=>$res[0]['jml_sks'],
			"jp_rencana"=>$res[0]['jp_rencana'],
			"jp_dilaksanakan"=>$res[0]['jp_dilaksanakan'],
			"id"=>$res[0]['id'],
			
		);
 	$this->load->view('Users/Butir4/edit_borang4.4.2.php',$data);
 }

 public function do_edit(){
		$nama_dosen=$_POST['nama_dosen'];
		$kode_mk=$_POST['kode_mk'];
		$nama_mk=$_POST['nama_mk'];
		$jml_sks=$_POST['jml_sks'];
		$jp_rencana=$_POST['jp_rencana'];
		$jp_dilaksanakan=$_POST['jp_dilaksanakan'];
		$id=$_POST['id'];
		
		$data_update=array(
			// "kode_mk"=>$kode_mk,
			// "nama_mk"=>$nama_mk,
			"jml_sks"=>$jml_sks,
			"jp_rencana"=>$jp_rencana,
			"jp_dilaksanakan"=>$jp_dilaksanakan, 	
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a442_model->rubah('aktivitas_mengajar',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a442_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.4.2 : AKTIVITAS MENGAJAR DATA DOSEN TIDAK TETAP ',
 // 'a442' => $this->Aps_a442_model->listing());
 $data=$this->Aps_a442_model->listing();
 $tot_pertemuan=$this->Aps_a442_model->tot_pertemuan();
 $tot_dilaksanakan=$this->Aps_a442_model->tot_dilaksanakan();
 $this->load->view('Users/Butir4/tampilan_borang4.4.2_excel.php',array('data'=>$data,
																'total'=>$tot_pertemuan,
																'totdilaksanakan'=>$tot_dilaksanakan));
 }

  public function tambah(){
		$this->load->view('Users/Butir4/inputan_borang4.4.2.php');
 }

 	public function do_tambah(){
		$this->model_squrity->getsqurity();
		$id_dosen=$_POST['id_dosen'];
		$kode_mk=$_POST['kode_mk'];
		$nama_mk=$_POST['nama_mk'];
		$jml_sks=$_POST['jml_sks'];
		$jp_rencana=$_POST['jp_rencana'];
		$jp_dilaksanakan=$_POST['jp_dilaksanakan'];
		$data_insert=array(
			'id_dosen' => $id_dosen,
			'kode_mk'=>$kode_mk,
			'nama_mk'=>$nama_mk,
			'jml_sks'=>$jml_sks,
			'jp_rencana' => $jp_rencana,
			'jp_dilaksanakan' => $jp_dilaksanakan
		);
		// print_r($data_insert);die();
		$res=$this->Aps_a434_model->insert('aktivitas_mengajar',$data_insert);
		if ($res>=1) {
			redirect('Aps_a442_excel');
		}else {
			alert('Gagal Insert');
		}
	}
public function do_hapus($id){
		$this->model_squrity->getsqurity();
		$where=array('id'=>$id);
		$res=$this->Aps_a434_model->Delete('aktivitas_mengajar',$where);
		if($res>=1){
			redirect('Aps_a442_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

}