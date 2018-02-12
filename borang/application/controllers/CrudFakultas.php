<title>Pembangunan Aplikasi Pelaporan Data Kuantitatif Borang Akreditasi</title>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudFakultas extends CI_Controller {
	public function index(){
		$data=$this->model_fakultas->GetFakultas();
		$this->load->view('Admin/tampilan_fakultas.php',array('data'=>$data));
	}

	public function tambah(){
		$this->load->view('Admin/inputan_fakultas.php');
	}

	public function do_tambah(){
		$kode=$_POST['kode'];
		$fakultas=$_POST['fakultas'];
		$data_insert=array(
			'kode_fakultas'=>$kode,
			'nama_fakultas'=>$fakultas
		);
		$res=$this->model_fakultas->insert('fakultas_tbl',$data_insert);
		if ($res>=1) {
			redirect('Admin/table');
		}else {
			alert('Gagal Insert');
		}
	}

	public function do_hapus($kode){
		$where=array('kode_fakultas'=>$kode);
		$res=$this->model_fakultas->Delete('fakultas_tbl',$where);
		if($res>=1){
			redirect('Admin/table');
		}else {
			alert('Gagal Hapus');
		}
	}

	public function edit_data($kode){
		$res=$this->model_fakultas->GetFakultas("where kode_fakultas='$kode'");
		$data=array(
			"kode_fakultas"=>$res[0]['kode_fakultas'],
			"nama_fakultas"=>$res[0]['nama_fakultas'],
		);
		$this->load->view('Admin/edit_fakultas',$data);
	}

	public function do_edit(){
		$kode=$_POST['kode_fakultas'];
		$fakultas=$_POST['nama_fakultas'];
		$data_update=array(
			'kode_fakultas'=>$kode,
			'nama_fakultas'=>$fakultas
		);
		$where=array('kode_fakultas'=>$kode);
		$res=$this->model_fakultas->update('fakultas_tbl',$data_update,$where);
		if ($res>=1) {
			redirect('Admin/table');
		}
		else {
			alert("Gagal Update") ;
		}
	}
}
