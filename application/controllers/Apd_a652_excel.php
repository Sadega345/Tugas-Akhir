<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a652_excel extends CI_Controller {


public function index() {
 $data1=$this->Apd_a652_model->listing1();
 
 $totalmanual=$this->Apd_a652_model->totmanual();
 $totalkomp=$this->Apd_a652_model->totkomp();
 $totallan=$this->Apd_a652_model->totlan();
 $totalwan=$this->Apd_a652_model->totwan();
 $this->load->view('User/Butir6/tampilan_borang6.5.2.php',array('data1'=>$data1,
 																
 																'totmanual'=>$totalmanual,
																'totkomp'=>$totalkomp,
																'totlan'=>$totallan,
																'totwan'=>$totalwan));
 }

 public function ubah($id){
 	$this->model_squrity->getsqurity();
	$res=$this->Apd_a652_model->update("where id='$id'");
	$data=array(
		"manual"=>$res[0]['manual'],
		"id"=>$res[0]['id'],
		"komp_tnp_jar"=>$res[0]['komp_tnp_jar'],
		"lan"=>$res[0]['lan'],
		"wan"=>$res[0]['wan'],
		"jenis_data"=>$res[0]['jenis_data'],
		
	);
 	$this->load->view('User/Butir6/edit_borang6.5.2.php',$data);
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
			"id"=>$id,
			
		);
		$where=array('id'=>$id);
		$res=$this->Apd_a652_model->rubah('aksesbilitas_data',$data_update,$where);
		// print_r($data_update);die;
		if ($res>=1) {
			redirect('Apd_a652_excel');
		}
		// else {
		// 	alert("Gagal Update") ;
		// }
	}


public function export_excel(){
 // $data = array( 'title' => 'TABEL DATA BUTIR 6.5.2 : AKSESIBILITAS TIAP JENIS DATA',
 // 'a652' => $this->apd_a652_model->listing());
 $data1=$this->Apd_a652_model->listing1();
 $totalmanual=$this->Apd_a652_model->totmanual();
 $totalkomp=$this->Apd_a652_model->totkomp();
 $totallan=$this->Apd_a652_model->totlan();
 $totalwan=$this->Apd_a652_model->totwan();
 $this->load->view('User/Butir6/tampilan_borang6.5.2_excel.php',array('data1'=>$data1,
 																'totmanual'=>$totalmanual,
																'totkomp'=>$totalkomp,
																'totlan'=>$totallan,
																'totwan'=>$totalwan));
 
 }

}