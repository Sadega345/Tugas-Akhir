<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

public function index(){
	$result=$this->Model_Download->get_data();
	$this->load->view('download',array('result'=>$result));
}

public function unduh($id){
	$this->load->helper('download');

	 $fileInfo = $this->Model_Download->get_data("where id=$id");

	//file path
     $file = 'assets/instrumen/'.$fileInfo['file'];
            
     //download file from directory
     force_download($file, NULL);
}

}
?>