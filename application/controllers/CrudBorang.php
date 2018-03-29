
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudBorang extends CI_Controller {
	
	public function index(){
		$data=$this->model_fakultas->GetFakultas();
		$this->load->view('User/PengisiBorang/tampilan_pengisi.php',array('data'=>$data));
	}

	public function tambah(){
		$this->load->view('User/PengisiBorang/inputan_pengisi.php');
	}

	// public function do_tambah(){
	// 	$this->model_squrity->getsqurity();
	// 	$nama=$_POST['nama'];
	// 	$nidn=$_POST['nidn'];
	// 	$jabatan=$_POST['jabatan'];
	// 	$tgllahir=$_POST['tgllahir'];
	// 	$data_insert=array(
	// 		'kode_fakultas'=>$kode,
	// 		'nama_fakultas'=>$fakultas
	// 	);
	// 	$res=$this->model_dosen->insert('dosen_tbl',$data_insert);
	// 	if ($res>=1) {
	// 		redirect('User/table');
	// 	}else {
	// 		alert('Gagal Insert');
	// 	}
	// }

	// public function do_hapus($kode){
	// 	$this->model_squrity->getsqurity();
	// 	$where=array('kode_fakultas'=>$kode);
	// 	$res=$this->model_fakultas->Delete('fakultas_tbl',$where);
	// 	if($res>=1){
	// 		redirect('Admin/table');
	// 	}else {
	// 		alert('Gagal Hapus');
	// 	}
	// }

	// public function edit_data($kode){
	// 	$this->model_squrity->getsqurity();
	// 	$res=$this->model_fakultas->GetFakultas("where kode_fakultas='$kode'");
	// 	$data=array(
	// 		"kode_fakultas"=>$res[0]['kode_fakultas'],
	// 		"nama_fakultas"=>$res[0]['nama_fakultas'],
	// 	);
	// 	$this->load->view('Admin/edit_fakultas',$data);
	// }

	// public function do_edit(){
	// 	$kode=$_POST['kode'];
	// 	$fakultas=$_POST['fakultas'];
	// 	$data_update=array(
	// 		'kode_fakultas'=>$kode,
	// 		'nama_fakultas'=>$fakultas
	// 	);
	// 	$where=array('kode_fakultas'=>$kode);
	// 	$res=$this->model_fakultas->update('fakultas_tbl',$data_update,$where);
	// 	if ($res>=1) {
	// 		redirect('Admin/table');
	// 	}
	// 	// else {
	// 	// 	alert("Gagal Update") ;
	// 	// }
	// }
}
