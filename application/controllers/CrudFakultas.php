<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudFakultas extends CI_Controller {

	
	public function index(){
		$data=$this->model_fakultas->GetFakultas();
		$this->load->view('Admin/tampilan_fakultas.php',array('data'=>$data));
	}

	public function tambah(){
		$data = $this->model_fakultas->GetFakultas();
		$kd_fakultas = count($data)+1;
		$convert = "F".str_pad($kd_fakultas,3,"0",STR_PAD_LEFT);

		// echo $convert;die;
		// print_r($data);
		return $this->load->view('Admin/inputan_fakultas',array('convert' => $convert));
	}

	public function do_tambah(){
		$this->model_squrity->getsqurity();
		$kode=$_POST['kode'];
		$fakultas=$_POST['fakultas'];
		$this->form_validation->set_rules('fakultas', 'Nama Fakultas', 'required');
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
		$this->model_squrity->getsqurity();
		$where=array('kode_fakultas'=>$kode);
		$res=$this->model_fakultas->Delete('fakultas_tbl',$where);
		if($res>=1){
			redirect('Admin/table');
		}else {
			alert('Gagal Hapus');
		}
	}

	public function edit_data($kode){
		$this->model_squrity->getsqurity();
		$res=$this->model_fakultas->GetFakultas("where kode_fakultas='$kode'");
		$data=array(
			"kode_fakultas"=>$res[0]['kode_fakultas'],
			"nama_fakultas"=>$res[0]['nama_fakultas'],
		);
		$this->load->view('Admin/edit_fakultas',$data);
	}

	public function do_edit(){
		$kode=$_POST['kode'];
		$fakultas=$_POST['fakultas'];
		$this->form_validation->set_rules('fakultas', 'Nama Fakultas', 'required');
		$data_update=array(
			'kode_fakultas'=>$kode,
			'nama_fakultas'=>$fakultas
		);
		$where=array('kode_fakultas'=>$kode);
		
		$res=$this->model_fakultas->update('fakultas_tbl',$data_update,$where);
		if ($res>=1) {
			redirect('Admin/table');
		}
		
		// else {
		// 	alert("Gagal Update") ;
		// }
	}
}
