<title>Pembangunan Aplikasi Pelaporan Data Kuantitatif Borang Akreditasi</title>
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->model_squrity->getsqurity();
		$this->load->view('index');
	}

	function table()
	{
		redirect('CrudFakultas');
	}

	function table_prodi(){
		redirect('CrudProdi');
	}

	function table_instrumen(){
		redirect('CrudInstrumen');
	}

	function table_user(){
		redirect('CrudUser');
	}

	function table_admin(){
		redirect('CrudUser');
	}

	function tampilan()
	{
		$this->load->view('Admin/tampilan_fakultas.php');
		
	}

	function tampilan_prodi(){
		$this->load->view('Admin/tampilan_prodi.php');
	}

	function tampilan_instrumen(){
		$this->load->view('Admin/tampilan_instrumen.php');
	}

	function tampilan_user(){
		$this->load->view('Admin/tampilan_user.php');
	}

	// function tampilan_admin()
	// 	$this->load->view('Admin/tampilan_admin.php');
	// }
	
}
