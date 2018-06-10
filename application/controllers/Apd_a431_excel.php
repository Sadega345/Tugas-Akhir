<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a431_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_a431_model');
 // }

public function index() {
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.1 : DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI BIDANG PS',
 // 'a431' => $this->apd_a431_model->listing());
 $data=$this->Apd_a431_model->listing();		
 $this->load->view('User/Butir4/tampilan_borang4.3.1.php',array('data'=>$data));
 }

 public function ubah($nidn){
 	$this->model_squrity->getsqurity();
		$res=$this->Apd_a431_model->update("where nidn='$nidn'");
		$data=array(
			"nama_dosen"=>$res[0]['nama_dosen'],
			"nidn"=>$res[0]['nidn'],
			"tgl_lhr"=>$res[0]['tgl_lhr'],
			"NM_JAB_AKD"=>$res[0]['NM_JAB_AKD'],
			"sertifikasi"=>$res[0]['sertifikasi'],
			"GELAR_S1"=>$res[0]['GELAR_S1'],
			"ASAL_PT_S1"=>$res[0]['ASAL_PT_S1'],
			"BID_KEAHLIAN_S1"=>$res[0]['BID_KEAHLIAN_S1'],
			"GELAR_S2"=>$res[0]['GELAR_S2'],
			"ASAL_PT_S2"=>$res[0]['ASAL_PT_S2'],
			"BID_KEAHLIAN_S2"=>$res[0]['BID_KEAHLIAN_S2'],
			"GELAR_S3"=>$res[0]['GELAR_S3'],
			"ASAL_PT_S3"=>$res[0]['ASAL_PT_S3'],
			"BID_KEAHLIAN_S3"=>$res[0]['BID_KEAHLIAN_S3'],
			"GELAR"=>$res[0]['GELAR'],
			"PENGAKUAN"=>$res[0]['PENGAKUAN'],
			"BID_KEAHLIAN"=>$res[0]['BID_KEAHLIAN'],
		);
 	$this->load->view('User/Butir4/edit_borang4.3.1.php',$data);
 }

 public function do_edit(){
		$nama_dosen=$_POST['nama_dosen'];
		$nidn=$_POST['nidn'];
		$tgl_lhr=$_POST['tgl_lhr'];
		$kd_jab=$_POST['kd_jab'];
		$sertifikasi=$_POST['sertifikasi'];
		$GELAR_S1=$_POST['GELAR_S1'];
		$ASAL_PT_S1=$_POST['ASAL_PT_S1'];
		$BID_KEAHLIAN_S1=$_POST['BID_KEAHLIAN_S1'];
		$GELAR_S2=$_POST['GELAR_S2'];
		$ASAL_PT_S2=$_POST['ASAL_PT_S2'];
		$BID_KEAHLIAN_S2=$_POST['BID_KEAHLIAN_S2'];
		$GELAR_S3=$_POST['GELAR_S3'];
		$ASAL_PT_S3=$_POST['ASAL_PT_S3'];
		$BID_KEAHLIAN_S3=$_POST['BID_KEAHLIAN_S3'];
		$GELAR=$_POST['GELAR'];
		$PENGAKUAN=$_POST['PENGAKUAN'];
		$BID_KEAHLIAN=$_POST['BID_KEAHLIAN'];
		$data_update=array(
			"nama_dosen"=>$nama_dosen,
			"nidn"=>$nidn,
			"tgl_lhr"=>$tgl_lhr,
			"kd_jab"=>$kd_jab,
			"sertifikasi"=>$sertifikasi,
			"GELAR_S1"=>$GELAR_S1,
			"ASAL_PT_S1"=>$ASAL_PT_S1,
			"BID_KEAHLIAN_S1"=>$BID_KEAHLIAN_S1,
			"GELAR_S2"=>$GELAR_S2,
			"ASAL_PT_S2"=>$ASAL_PT_S2,
			"BID_KEAHLIAN_S2"=>$BID_KEAHLIAN_S2,
			"GELAR_S3"=>$GELAR_S3,
			"ASAL_PT_S3"=>$ASAL_PT_S3,
			"BID_KEAHLIAN_S3"=>$BID_KEAHLIAN_S3,
			"GELAR"=>$GELAR,
			"PENGAKUAN"=>$PENGAKUAN,
			"BID_KEAHLIAN"=>$BID_KEAHLIAN
		);
		$where=array('nidn'=>$nidn);
		$res=$this->Apd_a431_model->rubah('dosen_tbl',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a431_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => ' TABEL DATA BUTIR 4.3.1 : DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI BIDANG PS',
 // 'a431' => $this->apd_a431_model->listing());
 $data=$this->Apd_a431_model->listing();		
 $this->load->view('User/Butir4/tampilan_borang4.3.1_excel.php',array('data'=>$data));
 }

 public function rubah(){
 	$data['data']=$this->Apd_a431_model->listing();	
 	// print_r($data);die;
 	$data['list']=$this->Apd_a431_model->JabAkademik();
 	 // print_r($data['list']);die;
 $this->load->view('User/Butir4/edit_borang_semua4.3.1.php',array('data'=>$data));
 }

 public function do_rubah(){
 	$count = $_POST['TotData'];
 	print_r($_POST['kd_jab1']);die;
 	for ($i=1; $i <= $count ; $i++) { 
 		
			$tmpNamaDosen="nama_dosen".$i;
			$nama_dosen=$_POST[$tmpNamaDosen];

			$tmpNidn="nidn".$i;
			$nidn=$_POST[$tmpNidn];

			$tmpTglLhr="tgl_lhr".$i;
			$tgl_lhr=$_POST[$tmpTglLhr];

			$tmpKdJab="kd_jab".$i;
			$kd_jab=$_POST[$tmpKdJab];

			$tmpSerTifikasi="sertifikasi".$i;
			$sertifikasi=$_POST[$tmpSerTifikasi];

			$tmpGELAR_S1="GELAR_S1".$i;
			$GELAR_S1=$_POST[$tmpGELAR_S1];

			$tmpASAL_PT_S1="ASAL_PT_S1".$i;
			$ASAL_PT_S1=$_POST[$tmpASAL_PT_S1];

			$tmpBID_KEAHLIAN_S1="BID_KEAHLIAN_S1".$i;
			$BID_KEAHLIAN_S1=$_POST[$tmpBID_KEAHLIAN_S1];

			$tmpGELAR_S2="GELAR_S2".$i;
			$GELAR_S2=$_POST[$tmpGELAR_S2];

			$tmpASAL_PT_S2="ASAL_PT_S2".$i;
			$ASAL_PT_S2=$_POST[$tmpASAL_PT_S2];

			$tmpBID_KEAHLIAN_S2="BID_KEAHLIAN_S2".$i;
			$BID_KEAHLIAN_S2=$_POST[$tmpBID_KEAHLIAN_S2];

			$tmpGELAR_S3="GELAR_S3".$i;
			$GELAR_S3=$_POST[$tmpGELAR_S3];

			$tmpASAL_PT_S3="ASAL_PT_S3".$i;
			$ASAL_PT_S3=$_POST[$tmpASAL_PT_S3];

			$tmpBID_KEAHLIAN_S3="BID_KEAHLIAN_S3".$i;
			$BID_KEAHLIAN_S3=$_POST[$tmpBID_KEAHLIAN_S3];

			$tmpGELAR="GELAR".$i;
			$GELAR=$_POST[$tmpGELAR];

			$tmpPENGAKUAN="PENGAKUAN".$i;
			$PENGAKUAN=$_POST[$tmpPENGAKUAN];

			$tmpBID_KEAHLIAN="BID_KEAHLIAN".$i;
			$BID_KEAHLIAN=$_POST[$tmpBID_KEAHLIAN];

			$data_update=array(
			"nama_dosen"=>$nama_dosen,
			// "nidn"=>$nidn,
			"tgl_lhr"=>$tgl_lhr,
			"kd_jab"=>$kd_jab,
			"sertifikasi"=>$sertifikasi,
			"GELAR_S1"=>$GELAR_S1,
			"ASAL_PT_S1"=>$ASAL_PT_S1,
			"BID_KEAHLIAN_S1"=>$BID_KEAHLIAN_S1,
			"GELAR_S2"=>$GELAR_S2,
			"ASAL_PT_S2"=>$ASAL_PT_S2,
			"BID_KEAHLIAN_S2"=>$BID_KEAHLIAN_S2,
			"GELAR_S3"=>$GELAR_S3,
			"ASAL_PT_S3"=>$ASAL_PT_S3,
			"BID_KEAHLIAN_S3"=>$BID_KEAHLIAN_S3,
			"GELAR"=>$GELAR,
			"PENGAKUAN"=>$PENGAKUAN,
			"BID_KEAHLIAN"=>$BID_KEAHLIAN
		);
			// print_r($data_update);die;
		$this->db->where('nidn', $nidn);
		$this->db->update('dosen_tbl', $data_update);
 	}
 	
 	// 	$nama_dosen=$_POST['nama_dosen'];
		// $nidn=$_POST['nidn'];
		// $tgl_lhr=$_POST['tgl_lhr'];
		// $kd_jab=$_POST['kd_jab'];
		// $sertifikasi=$_POST['sertifikasi'];
		// $GELAR_S1=$_POST['GELAR_S1'];
		// $ASAL_PT_S1=$_POST['ASAL_PT_S1'];
		// $BID_KEAHLIAN_S1=$_POST['BID_KEAHLIAN_S1'];
		// $GELAR_S2=$_POST['GELAR_S2'];
		// $ASAL_PT_S2=$_POST['ASAL_PT_S2'];
		// $BID_KEAHLIAN_S2=$_POST['BID_KEAHLIAN_S2'];
		// $GELAR_S3=$_POST['GELAR_S3'];
		// $ASAL_PT_S3=$_POST['ASAL_PT_S3'];
		// $BID_KEAHLIAN_S3=$_POST['BID_KEAHLIAN_S3'];
		// $GELAR=$_POST['GELAR'];
		// $PENGAKUAN=$_POST['PENGAKUAN'];
		// $BID_KEAHLIAN=$_POST['BID_KEAHLIAN'];
		$data_update=array(
			"nama_dosen"=>$nama_dosen,
			"nidn"=>$nidn,
			"tgl_lhr"=>$tgl_lhr,
			"kd_jab"=>$kd_jab,
			"sertifikasi"=>$sertifikasi,
			"GELAR_S1"=>$GELAR_S1,
			"ASAL_PT_S1"=>$ASAL_PT_S1,
			"BID_KEAHLIAN_S1"=>$BID_KEAHLIAN_S1,
			"GELAR_S2"=>$GELAR_S2,
			"ASAL_PT_S2"=>$ASAL_PT_S2,
			"BID_KEAHLIAN_S2"=>$BID_KEAHLIAN_S2,
			"GELAR_S3"=>$GELAR_S3,
			"ASAL_PT_S3"=>$ASAL_PT_S3,
			"BID_KEAHLIAN_S3"=>$BID_KEAHLIAN_S3,
			"GELAR"=>$GELAR,
			"PENGAKUAN"=>$PENGAKUAN,
			"BID_KEAHLIAN"=>$BID_KEAHLIAN
		);
		print_r($data_update);die;
		redirect('Apd_a431_excel');
 }

}