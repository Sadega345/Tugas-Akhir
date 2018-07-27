<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosen_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('data_dosen_model');
 // }

public function index() { 
	// $data = array( 'title' => ' TABEL DATA DOSEN',
 // 'dosen_tbl' => $this->Data_dosen_model->listing());
 // $this->load->view('User/DataDosen/tampilan_dosen.php',array('data'=>$data));
 $data = $this->Data_dosen_model->listing();
 $this->load->view('User/DataDosen/tampilan_dosen.php',array('data'=>$data));
}

public function load(){
 	$data=$this->Data_dosen_model->loadlisting();
	// $data=$this->Apd_a431_model->listing();
	$this->load->view('User/DataDosen/load_tampilan_dosen.php',array('data'=>$data));
 }

public function ubahload($nidn){
 	$this->model_squrity->getsqurity();
	$res=$this->Data_dosen_model->updateload("where nidn='$nidn'");
	$data=array(
		"nameLecturer"=>$res[0]['nameLecturer'],
		"nidn"=>$res[0]['nidn'],
		"birthdate"=>$res[0]['birthdate'],
		"state"=>$res[0]['state'],
		"nameUniversity1"=>$res[0]['nameUniversity1'],
		"degree1"=>$res[0]['degree1'],
		"studyProgram1"=>$res[0]['studyProgram1'],
		"nameUniversity2"=>$res[0]['nameUniversity2'],
		"degree2"=>$res[0]['degree2'],
		"studyProgram2"=>$res[0]['studyProgram2'],
		"nameUniversity3"=>$res[0]['nameUniversity3'],
		"degree3"=>$res[0]['degree3'],
		"studyProgram3"=>$res[0]['studyProgram3'],
	);
 	$this->load->view('User/DataDosen/edit_dosenload.php',$data);
 }

 public function do_editload(){
		$nameLecturer=$_POST['nameLecturer'];
		$nidn=$_POST['nidn'];
		$birthdate=$_POST['birthdate'];
		$kd_jab=$_POST['kd_jab'];
		$state=$_POST['state'];
		$degree1=$_POST['degree1'];
		$nameUniversity1=$_POST['nameUniversity1'];
		$studyProgram1=$_POST['studyProgram1'];
		$degree2=$_POST['degree2'];
		$nameUniversity2=$_POST['nameUniversity2'];
		$studyProgram2=$_POST['studyProgram2'];
		$degree3=$_POST['degree3'];
		$nameUniversity3=$_POST['nameUniversity3'];
		$studyProgram3=$_POST['studyProgram3'];
		$GELAR=$_POST['GELAR'];
		$PENGAKUAN=$_POST['PENGAKUAN'];
		$BID_KEAHLIAN=$_POST['BID_KEAHLIAN'];
		$data_update=array(
			"nama_dosen"=>$nameLecturer,
			"nidn"=>$nidn,
			"tgl_lhr"=>$birthdate,
			"kd_jab"=>$kd_jab,
			// "sertifikasi"=>$state,
			"GELAR_S1"=>$degree1,
			"ASAL_PT_S1"=>$nameUniversity1,
			"BID_KEAHLIAN_S1"=>$studyProgram1,
			"GELAR_S2"=>$degree2,
			"ASAL_PT_S2"=>$nameUniversity2,
			"BID_KEAHLIAN_S2"=>$studyProgram2,
			"GELAR_S3"=>$degree3,
			"ASAL_PT_S3"=>$nameUniversity3,
			"BID_KEAHLIAN_S3"=>$studyProgram3,
			"GELAR"=>$GELAR,
			"PENGAKUAN"=>$PENGAKUAN,
			"BID_KEAHLIAN"=>$BID_KEAHLIAN
		);
		$where=array('nidn'=>$nidn);
		$res=$this->Data_dosen_model->rubah('dosen_tbl',$data_update,$where);
		 // print_r($data_update);die;
		if ($res>=1) {
			redirect('Data_dosen_excel');
		}
	}

public function ubah($NIDN){
 	$this->model_squrity->getsqurity();
		$res=$this->Data_dosen_model->update("where NIDN='$NIDN'");
		$data=array(
			"NAMA_DOSEN"=>$res[0]['NAMA_DOSEN'],
			"NIDN"=>$res[0]['NIDN'],
			"TGL_LHR"=>$res[0]['TGL_LHR'],
			"NM_JAB_AKD"=>$res[0]['NM_JAB_AKD'],

			"GELAR_S1"=>$res[0]['GELAR_S1'],
			"ASAL_PT_S1"=>$res[0]['ASAL_PT_S1'],
			"BID_KEAHLIAN_S1"=>$res[0]['BID_KEAHLIAN_S1'],

			"GELAR_S2"=>$res[0]['GELAR_S2'],
			"ASAL_PT_S2"=>$res[0]['ASAL_PT_S2'],
			"BID_KEAHLIAN_S2"=>$res[0]['BID_KEAHLIAN_S2'],


			"GELAR_S3"=>$res[0]['GELAR_S3'],
			"ASAL_PT_S3"=>$res[0]['ASAL_PT_S3'],
			"BID_KEAHLIAN_S3"=>$res[0]['BID_KEAHLIAN_S3'],

			
		);
 	$this->load->view('User/DataDosen/edit_dosen.php',$data);
 }

 public function do_edit(){
		$NAMA_DOSEN=$_POST['NAMA_DOSEN'];
		$NIDN=$_POST['NIDN'];
		$TGL_LHR=$_POST['TGL_LHR'];
		// $NM_JAB_AKD=$_POST['NM_JAB_AKD'];

		$GELAR_S1=$_POST['GELAR_S1'];
		$ASAL_PT_S1=$_POST['ASAL_PT_S1'];
		$BID_KEAHLIAN_S1=$_POST['BID_KEAHLIAN_S1'];

		$GELAR_S2=$_POST['GELAR_S2'];
		$ASAL_PT_S2=$_POST['ASAL_PT_S2'];
		$BID_KEAHLIAN_S2=$_POST['BID_KEAHLIAN_S2'];

		$GELAR_S3=$_POST['GELAR_S3'];
		$ASAL_PT_S3=$_POST['ASAL_PT_S3'];
		$BID_KEAHLIAN_S3=$_POST['BID_KEAHLIAN_S3'];

		
		$data_update=array(
			"NAMA_DOSEN"=>$NAMA_DOSEN,
			"NIDN"=>$NIDN,
			"TGL_LHR"=>$TGL_LHR,
			// "NM_JAB_AKD"=>$NM_JAB_AKD,

			"GELAR_S1"=>$GELAR_S1,
			"ASAL_PT_S1"=>$ASAL_PT_S1,
			"BID_KEAHLIAN_S1"=>$BID_KEAHLIAN_S1,

			"GELAR_S2"=>$GELAR_S2,
			"ASAL_PT_S2"=>$ASAL_PT_S2,
			"BID_KEAHLIAN_S2"=>$BID_KEAHLIAN_S2,

			"GELAR_S3"=>$GELAR_S3,
			"ASAL_PT_S3"=>$ASAL_PT_S3,
			"BID_KEAHLIAN_S3"=>$BID_KEAHLIAN_S3,
			
		);
		$where=array('NIDN'=>$NIDN);
		$res=$this->Data_dosen_model->rubah('dosen_tbl',$data_update,$where);
		if ($res>=1) {
			redirect('Data_dosen_excel');
		}
 		// echo "Masuk";
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 $data = $this->Data_dosen_model->listing();
 $this->load->view('User/DataDosen/tampilan_dosen_excel.php',array('data'=>$data));
 }

public function tambah_load(){
		$data = $this->Data_dosen_model->loadlisting();
		$idLecturer = count($data)+1;
		// echo $convert;die;
		// print_r($data);
		return $this->load->view('User/DataDosen/inputan_dosenload.php',array('id_dosen' => $kd_dosen));
	}

	public function do_tambahload(){
		$this->model_squrity->getsqurity();
		$id_dosen=$_POST['id_dosen'];
		$kd_prodi=$_POST['kd_prodi'];
		$nidn=$_POST['nidn'];
		$nama_dosen=$_POST['nama_dosen'];
		$tgl_lhr=$_POST['tgl_lhr'];
		$kd_jab=$_POST['kd_jab'];
		$kd_jns_dosen=$_POST['kd_jns_dosen'];
		$sertifikasi=$_POST['sertifikasi'];
		$gelar_s1=$_POST['gelar_s1'];
		$asal_pt_s1=$_POST['asal_pt_s1'];
		$bid_keahlian_s1=$_POST['bid_keahlian_s1'];
		$gelar_s2=$_POST['gelar_s2'];
		$asal_pt_s2=$_POST['asal_pt_s2'];
		$bid_keahlian_s2=$_POST['bid_keahlian_s2'];
		$gelar_s3=$_POST['gelar_s3'];
		$asal_pt_s3=$_POST['asal_pt_s3'];
		$bid_keahlian_s3=$_POST['bid_keahlian_s3'];
		$gelar=$_POST['gelar'];
		$pengakuan=$_POST['pengakuan'];
		$bid_keahlian=$_POST['bid_keahlian'];
		$sts_ahli=$_POST['sts_ahli'];
		$this->form_validation->set_rules('nidn', 'NIDN', 'required');
		$this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
		$data_insert=array(
			'id_dosen'=>$id_dosen,
			'kd_prodi'=>$kd_prodi,
			'nidn'=>$nidn,
			'nama_dosen'=>$nama_dosen,
			'tgl_lhr'=>$tgl_lhr,
			//'kd_jab'=>$kd_jab,
			'kd_jns_dosen'=>$kd_jns_dosen,
			'sertifikasi'=>$sertifikasi,
			'gelar_s1'=>$gelar_s1,
			'asal_pt_s1'=>$asal_pt_s1,
			'bid_keahlian_s1'=>$bid_keahlian_s1,
			'gelar_s2'=>$gelar_s2,
			'asal_pt_s2'=>$asal_pt_s2,
			'bid_keahlian_s2'=>$bid_keahlian_s2,
			'gelar_s3'=>$gelar_s3,
			'asal_pt_s3'=>$asal_pt_s3,
			'bid_keahlian_s3'=>$bid_keahlian_s3,
			'gelar'=>$gelar,
			'pengakuan'=>$pengakuan,
			'bid_keahlian'=>$bid_keahlian,
			'sts_ahli'=>$sts_ahli,
		);
		$res=$this->Data_dosen_model->insert('dosen_tbl',$data_insert);
		if ($res>=1) {
			redirect('Data_dosen_excel');
		}else {
			alert('Gagal Insert');
		}
	}

public function tambah(){
		$data = $this->Data_dosen_model->listing();
		$kd_dosen = count($data)+1;
		// echo $convert;die;
		// print_r($data);
		return $this->load->view('User/DataDosen/inputan_dosen.php',array('id_dosen' => $kd_dosen));
	}

	public function do_tambah(){
		$this->model_squrity->getsqurity();
		$id_dosen=$_POST['id_dosen'];
		$kd_prodi=$_POST['kd_prodi'];
		$nidn=$_POST['nidn'];
		$nama_dosen=$_POST['nama_dosen'];
		$tgl_lhr=$_POST['tgl_lhr'];
		$kd_jab=$_POST['kd_jab'];
		$kd_jns_dosen=$_POST['kd_jns_dosen'];
		$sertifikasi=$_POST['sertifikasi'];
		$gelar_s1=$_POST['gelar_s1'];
		$asal_pt_s1=$_POST['asal_pt_s1'];
		$bid_keahlian_s1=$_POST['bid_keahlian_s1'];
		$gelar_s2=$_POST['gelar_s2'];
		$asal_pt_s2=$_POST['asal_pt_s2'];
		$bid_keahlian_s2=$_POST['bid_keahlian_s2'];
		$gelar_s3=$_POST['gelar_s3'];
		$asal_pt_s3=$_POST['asal_pt_s3'];
		$bid_keahlian_s3=$_POST['bid_keahlian_s3'];
		$gelar=$_POST['gelar'];
		$pengakuan=$_POST['pengakuan'];
		$bid_keahlian=$_POST['bid_keahlian'];
		$sts_ahli=$_POST['sts_ahli'];
		$this->form_validation->set_rules('nidn', 'NIDN', 'required');
		$this->form_validation->set_rules('nama_dosen', 'Nama Dosen', 'required');
		$data_insert=array(
			'id_dosen'=>$id_dosen,
			'kd_prodi'=>$kd_prodi,
			'nidn'=>$nidn,
			'nama_dosen'=>$nama_dosen,
			'tgl_lhr'=>$tgl_lhr,
			//'kd_jab'=>$kd_jab,
			'kd_jns_dosen'=>$kd_jns_dosen,
			'sertifikasi'=>$sertifikasi,
			'gelar_s1'=>$gelar_s1,
			'asal_pt_s1'=>$asal_pt_s1,
			'bid_keahlian_s1'=>$bid_keahlian_s1,
			'gelar_s2'=>$gelar_s2,
			'asal_pt_s2'=>$asal_pt_s2,
			'bid_keahlian_s2'=>$bid_keahlian_s2,
			'gelar_s3'=>$gelar_s3,
			'asal_pt_s3'=>$asal_pt_s3,
			'bid_keahlian_s3'=>$bid_keahlian_s3,
			'gelar'=>$gelar,
			'pengakuan'=>$pengakuan,
			'bid_keahlian'=>$bid_keahlian,
			'sts_ahli'=>$sts_ahli,
		);
		$res=$this->Data_dosen_model->insert('dosen_tbl',$data_insert);
		if ($res>=1) {
			redirect('Data_dosen_excel');
		}else {
			alert('Gagal Insert');
		}
	}

public function do_hapus($nidn){
		$this->model_squrity->getsqurity();
		$where=array('NIDN'=>$nidn);
		$res=$this->Data_dosen_model->Delete('dosen_tbl',$where);
		if($res>=1){
			redirect('Data_dosen_excel');
		}else {
			alert('Gagal Hapus');
		}
	}

}