<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_b642_excel extends CI_Controller {

// Load database
 // public function __construct() {
 // parent::__construct();
 // $this->load->model('apd_b642_model');
 // }

public function index() {

 $data1=$this->Apd_b642_model->listing1();
 
 $totalmanual=$this->Apd_b642_model->totmanual();
 $totalkomp=$this->Apd_b642_model->totkomp();
 $totallan=$this->Apd_b642_model->totlan();
 $totalwan=$this->Apd_b642_model->totwan();
 $this->load->view('User/Butir6B/tampilan_borang6.4.2.php',array('data1'=>$data1,
 																
 																'totmanual'=>$totalmanual,
																'totkomp'=>$totalkomp,
																'totlan'=>$totallan,
																'totwan'=>$totalwan));
 }

  public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_b642_model->update("where id='$id'");
	$data=array(
		"manual"=>$res[0]['manual'],
		"id"=>$res[0]['id'],
		"komp_tnp_jar"=>$res[0]['komp_tnp_jar'],
		"lan"=>$res[0]['lan'],
		"wan"=>$res[0]['wan'],
		"jenis_data"=>$res[0]['jenis_data'],
		
	);
 	$this->load->view('User/Butir6B/edit_borang6.4.2.php',$data);
 }

 public function do_edit(){
		
		// $manual=implode(',', $_POST['manual']);
		// $komp_tnp_jar=implode(',', $_POST['komp_tanpa_jaringan']);
		// $lan = implode(',', $_POST['lan']);
		// $wan =implode(',', $_POST['wan']) ;
 		$manual = $_POST['manual'];
 		$komp_tanpa_jaringan = $_POST['komp_tanpa_jaringan'];
 		$lan = $_POST['lan'];
 		$wan = $_POST['wan'];
		$id=$_POST['id'];
		
		$data_update=array(
			// "NAMA_DOSEN"=>$NAMA_DOSEN,
			"manual"=>$manual,
			"komp_tnp_jar"=>$komp_tanpa_jaringan,
			"lan"=>$lan,
			"wan"=>$wan,
			// "id"=>$id,
			
		);
		$where=array('id'=>$id);
		// print_r($data_update);die;
		$res=$this->Apd_b642_model->rubah('aksesbilitas_data',$data_update,$where);
		
		if ($res>=1) {
			redirect('Apd_b642_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){

	$data1=$this->Apd_b642_model->listing1();
 
 $totalmanual=$this->Apd_b642_model->totmanual();
 $totalkomp=$this->Apd_b642_model->totkomp();
 $totallan=$this->Apd_b642_model->totlan();
 $totalwan=$this->Apd_b642_model->totwan();
 $this->load->view('User/Butir6B/tampilan_borang6.4.2_excel.php',array('data1'=>$data1,
 																
 																'totmanual'=>$totalmanual,
																'totkomp'=>$totalkomp,
																'totlan'=>$totallan,
																'totwan'=>$totalwan));
 
}

}