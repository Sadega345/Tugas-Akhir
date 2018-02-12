<title>Pembangunan Aplikasi Pelaporan Data Kuantitatif Borang Akreditasi</title>
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	function table()
	{
		redirect('CrudFakultas');
	}

	function table_prodi(){
		redirect('CrudProdi');
	}

	function tampilan()
	{
		$this->load->view('Admin/tampilan_fakultas.php');
		
	}

	function tampilan_prodi(){
		$this->load->view('Admin/tampilan_prodi.php');
	}
	
}
