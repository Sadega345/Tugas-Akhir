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

 // public function ubah(){
 // 	$data=$this->Apd_a311_model->listing();

	// $jumdtampung=$this->Apd_a311_model->jumdtampung();
	// $iseleksi=$this->Apd_a311_model->iseleksi();

	// $barutransfer=$this->Apd_a311_model->barutransfer();
	// $totbukantransfer=$this->Apd_a311_model->totbukantransfer();

	// $tottransfer=$this->Apd_a311_model->tottransfer();
	// $lulusanregbukantransfer=$this->Apd_a311_model->lulusanregbukantransfer();

	// $jumlulusantransfer=$this->Apd_a311_model->jumlulusantransfer();

	// $this->load->view('User/Butir3/edit_borang3.1.1.php',array('data'=>$data,

 // 																'jumdtampung'=>$jumdtampung,
 // 																'iseleksi'=>$iseleksi,

 // 																'barutransfer'=>$barutransfer,
 // 																'totbukantransfer'=>$totbukantransfer,

 // 																'tottransfer'=>$tottransfer,
 // 																'lulusanregbukantransfer'=>$lulusanregbukantransfer,
 // 																'jumlulusantransfer'=>$jumlulusantransfer));

 	
 // }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a311_model->update("where id='$id'");
	$data=array(
		"dy_tampung"=>$res[0]['dy_tampung'],
		"jc_mhs_ikt_seleksi"=>$res[0]['jc_mhs_ikt_seleksi'],
		"jc_mhs_lls_seleksi"=>$res[0]['jc_mhs_lls_seleksi'],
		"j_maba_reg_bkn_trf"=>$res[0]['j_maba_reg_bkn_trf'],
		"j_maba_trf"=>$res[0]['j_maba_trf'],
		"j_tot_reg_bkn_trf"=>$res[0]['j_tot_reg_bkn_trf'],
		"j_tot_trf"=>$res[0]['j_tot_trf'],
		"j_llsn_reg_bkn_trf"=>$res[0]['j_llsn_reg_bkn_trf'],
		"j_llsn_trf"=>$res[0]['j_llsn_trf'],
		"ipk_min"=>$res[0]['ipk_min'],
		"ipk_rat"=>$res[0]['ipk_rat'],
		"ipk_mak"=>$res[0]['ipk_mak'],
		"PRSN_IPK1"=>$res[0]['PRSN_IPK1'],
		"PRSN_IPK2"=>$res[0]['PRSN_IPK2'],
		"PRSN_IPK3"=>$res[0]['PRSN_IPK3'],
		"id"=>$res[0]['id'],
	);
 	$this->load->view('User/Butir3/edit_borang3.1.1.php',$data);
 }

 public function do_edit(){
		$dy_tampung=$_POST['dy_tampung'];
		$jc_mhs_ikt_seleksi=$_POST['jc_mhs_ikt_seleksi'];
		$jc_mhs_lls_seleksi=$_POST['jc_mhs_lls_seleksi'];
		$j_maba_reg_bkn_trf=$_POST['j_maba_reg_bkn_trf'];
		$j_maba_trf=$_POST['j_maba_trf'];
		$j_tot_reg_bkn_trf=$_POST['j_tot_reg_bkn_trf'];
		$j_tot_trf=$_POST['j_tot_trf'];

		$j_llsn_reg_bkn_trf=$_POST['j_llsn_reg_bkn_trf'];
		$j_llsn_trf=$_POST['j_llsn_trf'];
		$ipk_min=$_POST['ipk_min'];
		$ipk_rat=$_POST['ipk_rat'];
		$ipk_mak=$_POST['ipk_mak'];
		$PRSN_IPK1=$_POST['PRSN_IPK1'];
		$PRSN_IPK2=$_POST['PRSN_IPK2'];
		$PRSN_IPK3=$_POST['PRSN_IPK3'];
		$id=$_POST['id'];
		
		$data_update=array(
			"dy_tampung"=>$dy_tampung,
			"jc_mhs_ikt_seleksi"=>$jc_mhs_ikt_seleksi,
			"jc_mhs_lls_seleksi"=>$jc_mhs_lls_seleksi,
			"j_maba_reg_bkn_trf"=>$j_maba_reg_bkn_trf,
			"j_maba_trf"=>$j_maba_trf,
			"j_tot_reg_bkn_trf"=>$j_tot_reg_bkn_trf,
			"j_tot_trf"=>$j_tot_trf,

			"j_llsn_reg_bkn_trf"=>$j_llsn_reg_bkn_trf,
			"j_llsn_trf"=>$j_llsn_trf,
			"ipk_min"=>$ipk_min,
			"ipk_rat"=>$ipk_rat,
			"ipk_mak"=>$ipk_mak,
			"PRSN_IPK1"=>$PRSN_IPK1,
			"PRSN_IPK2"=>$PRSN_IPK2,
			"PRSN_IPK3"=>$PRSN_IPK3
		);
		$where=array('id'=>$id);
		$res=$this->Apd_a311_model->rubah('DATA_MHS',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a311_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}

 // public function do_edit(){
	// 	$this->model_squrity->getsqurity();
	// 	$count=1;
		
	// 	// $totData=$_POST['totData'];
	// 	// echo $totData;die;
	// 	while ($count !=1 ) {
	// 		$count++;
	// 		$tmp="dy_tampung".$count;
	// 		$dy_tampung=$_POST[$tmp];
	// 		echo $dy_tampung;die;
	// 	}
	// 	// $dy_tampung=$_POST[$tmp];
	// 	// echo $dy_tampung;die;
	// 	$jc_mhs_ikt_seleksi=$_POST['jc_mhs_ikt_seleksi'];

	// 	$jc_mhs_lls_seleksi=$_POST['jc_mhs_lls_seleksi'];
	// 	$j_maba_reg_bkn_trf=$_POST['j_maba_reg_bkn_trf'];

	// 	$j_maba_trf=$_POST['j_maba_trf'];
	// 	$j_tot_reg_bkn_trf=$_POST['j_tot_reg_bkn_trf'];

	// 	$j_tot_trf=$_POST['j_tot_trf'];
	// 	$j_llsn_reg_bkn_trf=$_POST['j_llsn_reg_bkn_trf'];

	// 	$j_llsn_trf=$_POST['j_llsn_trf'];
	// 	$ipk_min=$_POST['ipk_min'];

	// 	$ipk_rat=$_POST['ipk_rat'];
	// 	$ipk_mak=$_POST['ipk_mak'];

	// 	$PRSN_IPK1=$_POST['PRSN_IPK1'];
	// 	$PRSN_IPK2=$_POST['PRSN_IPK2'];

	// 	$PRSN_IPK3=$_POST['PRSN_IPK3'];		

	// 	$data_insert=array(
	// 		'dy_tampung'=>$dy_tampung,
	// 		'jc_mhs_ikt_seleksi'=>$jc_mhs_ikt_seleksi,

	// 		'jc_mhs_lls_seleksi'=>$jc_mhs_lls_seleksi,
	// 		'j_maba_reg_bkn_trf'=>$j_maba_reg_bkn_trf,

	// 		'j_maba_trf'=>$j_maba_trf,
	// 		'j_tot_reg_bkn_trf'=>$j_tot_reg_bkn_trf,

	// 		'j_tot_trf'=>$j_tot_trf,
	// 		'j_llsn_reg_bkn_trf'=>$j_llsn_reg_bkn_trf,

	// 		'j_llsn_trf'=>$j_llsn_trf,
	// 		'ipk_min'=>$ipk_min,

	// 		'ipk_rat'=>$ipk_rat,
	// 		'ipk_mak'=>$ipk_mak,

	// 		'PRSN_IPK1'=>$PRSN_IPK1,
	// 		'PRSN_IPK2'=>$PRSN_IPK2,

	// 		'PRSN_IPK3'=>$PRSN_IPK3
	// 	);
	// 	$res=$this->Apd_a311_model->insert('DATA_MHS',$data_insert);
	// 	if ($res>=1) {
	// 		redirect('Apd_a311_excel');
	// 	}else {
	// 		alert('Gagal Insert');
	// 	}	
	// }

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