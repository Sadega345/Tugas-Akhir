<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('MyModel');
	}

	public function index()
	{
		$data = $this->mymodel->selectmahasiswa();
		echo json_encode($data);
	}

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */