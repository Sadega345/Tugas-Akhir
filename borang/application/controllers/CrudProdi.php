<title>Pembangunan Aplikasi Pelaporan Data Kuantitatif Borang Akreditasi</title>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudProdi extends CI_Controller {
	public function index(){
		$data=$this->model_prodi->GetProdi();
		$this->load->view('Admin/tampilan_prodi.php',array('data'=>$data));
	}

	public function tambah(){
		$this->load->view('Admin/inputan_prodi.php');
	}

	public function do_tambah(){
		$kode_prodi=$_POST['kode_prodi'];
		$prodi=$_POST['nama_prodi'];
		$kode_fakultas=$_POST['kode_fakultas'];
		$data_insert=array(
			'kode_prodi'=>$kode_prodi,
			'nama_prodi'=>$nama_prodi,
			'kode_fakultas'=>$kode_fakultas
		);
		$res=$this->model_prodi->insert('prodi_tbl',$data_insert);
		if ($res>=1) {
			redirect('Admin/table_prodi');
		}else {
			alert('Gagal Insert');
		}
	}

	public function do_hapus($kode){
		$where=array('kode_prodi'=>$kode);
		$res=$this->model_prodi->Delete('prodi_tbl',$where);
		if($res>=1){
			redirect('Admin/table_prodi');
		}else {
			alert('Gagal Hapus');
		}
	}

	public function edit_data($kode){
		$res=$this->model_prodi->GetProdi("where kode_prodi='$kode_prodi'");
		$data=array(
			"kode_prodi"=>$res[0]['kode_prodi'],
			"nama_prodi"=>$res[0]['nama_prodi'],
			"kode_fakultas"=>$res[0]['kode_fakultas'],
		);
		$this->load->view('Admin/edit_prodi',$data);
	}

	public function do_edit(){
		$kode_prodi=$_POST['kode_prodi'];
		$nama_prodi=$_POST['nama_prodi'];
		$kode_fakultas=$_POST['kode_fakultas'];
		$data_update=array(
			'kode_prodi'=>$kode_prodi,
			'nama_prodi'=>$nama_prodi,
			'kode_fakultas'=>$kode_fakultas
		);
		$where=array('kode_prodi'=>$kode);
		$res=$this->model_prodi->update('prodi_tbl',$data_update,$where);
		if ($res>=1) {
			redirect('Admin/table_prodi');
		}
		else {
			alert("Gagal Update") ;
		}
	}
}
