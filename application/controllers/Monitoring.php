<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	require APPPATH . '/libraries/REST_Controller.php';//Lokasi Library Rest

	class Monitoring extends REST_Controller
	{
		function unit_get()
		{
			$data=array('respon : '.$this->get('id'));
			$this->response($data);
		}

		function unit_put()
		{
			$data=array('respon : '.$this->put('id'));
			$this->response($data);
		}

		function unit_post()
		{
			$data=array('respon : '.$this->post('id'));
			$this->response($data);	
		}

		function unit_delete()
		{
			$data=array('respon : '.$this->delete('id'));
			$this->response($data);
		}

	}
 ?>