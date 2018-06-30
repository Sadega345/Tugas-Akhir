<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_a433_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('Aps_a433_model');
 // }

public function index() {
 // $data = array( 'title' => '  TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS',
 // 'a433' => $this->Aps_a433_model->listing());
 $data=$this->Aps_a433_model->listing();
 $hitung=$this->Aps_a433_model->hitung();
 $ptsendiri=$this->Aps_a433_model->jumlah_ps_lain_pt_sendiri();
 $ptlain=$this->Aps_a433_model->jumlah_ptlain();
 $penelitian=$this->Aps_a433_model->jumlah_penelitian();
 $pengabdian=$this->Aps_a433_model->sks_pengabdian();
 $jumsks=$this->Aps_a433_model->jum_sks();
 $manptlain=$this->Aps_a433_model->man_ptlain();
 $totsks=$this->Aps_a433_model->tot_sks();
 $ratapssendiri=$this->Aps_a433_model->rata_ps_sendiri();
 $rataprlain=$this->Aps_a433_model->rata_prlain();
 $rataptlain=$this->Aps_a433_model->rata_ptlain();
 $ratapenelitian=$this->Aps_a433_model->rata_penelitian();
 $ratapengmas=$this->Aps_a433_model->rata_pengmas();
 $rataman=$this->Aps_a433_model->rata_manptsendiri();
 $ratamanlain=$this->Aps_a433_model->rata_manptlain();
 $ratajum=$this->Aps_a433_model->rata_jumsks();
 $this->load->view('Users/Butir4/tampilan_borang4.3.3.php',array('data'=>$data,
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
 																'rataman'=>$rataman,
 																'manlain'=>$ratamanlain,
 																'ratajumsks'=>$ratajum));
 // print_r($data);die;
 // $this->load->view('Users/Butir4/tampilan_borang4.3.3.php',array('data'=>$jum));
 }

public function ubah($id){
	$this->model_squrity->getsqurity();
	$res=$this->Aps_a433_model->update("where id='$id'");
		$data=array(
			"NAMA_DOSEN"=>$res[0]['NAMA_DOSEN'],
			"SKS_PSS"=>$res[0]['SKS_PSS'],
			"SKS_PSL_PTS"=>$res[0]['SKS_PSL_PTS'],
			"SKS_PTL"=>$res[0]['SKS_PTL'],
			"SKS_PENELITIAN"=>$res[0]['SKS_PENELITIAN'],
			"SKS_PP_MAS"=>$res[0]['SKS_PP_MAS'],
			"SKS_MAN_PTS"=>$res[0]['SKS_MAN_PTS'],
			"SKS_MAN_PTL"=>$res[0]['SKS_MAN_PTL'],
			"total"=>$res[0]['total'],
			"id"=>$res[0]['id'],
		);
 	$this->load->view('Users/Butir4/edit_borang4.3.3.php',$data);
 }

 public function do_edit(){
		$NAMA_DOSEN=$_POST['NAMA_DOSEN'];
		$SKS_PSS=$_POST['SKS_PSS'];
		$SKS_PSL_PTS=$_POST['SKS_PSL_PTS'];
		$SKS_PTL=$_POST['SKS_PTL'];
		$SKS_PENELITIAN=$_POST['SKS_PENELITIAN'];
		$SKS_PP_MAS=$_POST['SKS_PP_MAS'];
		$SKS_MAN_PTS=$_POST['SKS_MAN_PTS'];
		$SKS_MAN_PTL=$_POST['SKS_MAN_PTL'];
		$id=$_POST['id'];
		
		$data_update=array(
			// "NAMA_DOSEN"=>$NAMA_DOSEN,
			"SKS_PSS"=>$SKS_PSS,
			"SKS_PSL_PTS"=>$SKS_PSL_PTS,
			"SKS_PTL"=>$SKS_PTL,
			"SKS_PENELITIAN"=>$SKS_PENELITIAN,
			"SKS_PP_MAS"=>$SKS_PP_MAS,
			"SKS_MAN_PTS"=>$SKS_MAN_PTS,
			"SKS_MAN_PTL"=>$SKS_MAN_PTL,
			
		);
		$where=array('id'=>$id);
		$res=$this->Aps_a433_model->rubah('aktivitas_dosen',$data_update,$where);
		if ($res>=1) {
			redirect('Aps_a433_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

public function export_excel(){
 // $data = array( 'title' => '  TABEL DATA BUTIR 4.3.3 : AKTIVITAS DOSEN TETAP YANG BIDANG KEAHLIANNYA SESUAI DENGAN PS',
 // 'a433' => $this->Aps_a433_model->listing());
 $data=$this->Aps_a433_model->listing();
 $hitung=$this->Aps_a433_model->hitung();
 $ptsendiri=$this->Aps_a433_model->jumlah_ps_lain_pt_sendiri();
 $ptlain=$this->Aps_a433_model->jumlah_ptlain();
 $penelitian=$this->Aps_a433_model->jumlah_penelitian();
 $pengabdian=$this->Aps_a433_model->sks_pengabdian();
 $jumsks=$this->Aps_a433_model->jum_sks();
 $manptlain=$this->Aps_a433_model->man_ptlain();
 $totsks=$this->Aps_a433_model->tot_sks();
 $ratapssendiri=$this->Aps_a433_model->rata_ps_sendiri();
 $rataprlain=$this->Aps_a433_model->rata_prlain();
 $rataptlain=$this->Aps_a433_model->rata_ptlain();
 $ratapenelitian=$this->Aps_a433_model->rata_penelitian();
 $ratapengmas=$this->Aps_a433_model->rata_pengmas();
 $rataman=$this->Aps_a433_model->rata_manptsendiri();
 $ratamanlain=$this->Aps_a433_model->rata_manptlain();
 $ratajum=$this->Aps_a433_model->rata_jumsks();
 $this->load->view('Users/Butir4/tampilan_borang4.3.3_excel.php',array('data'=>$data,
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
	 																'rataman'=>$rataman,
	 																'manlain'=>$ratamanlain,
	 																'ratajumsks'=>$ratajum));
 }

}