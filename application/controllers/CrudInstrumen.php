<title>Pembangunan Aplikasi Pelaporan Data Kuantitatif Borang Akreditasi</title>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudInstrumen extends CI_Controller {
	
	public function index(){
		$data=$this->model_instrumen->GetInstrumen();
		$this->load->view('Admin/tampilan_instrumen.php',array('data'=>$data));
	}

	public function tambah(){
		$data=$this->model_instrumen->GetInstrumen();
		$this->load->view('Admin/inputan_instrumen.php',array('data' => $data));
	}

	 public function input(){
      $this->load->view('input');
    }

	public function proses_input(){
		// $id=$_POST['id'];
		// $instrumen=$_POST['instrumen'];

		// $data_insert=array(
		// 	'id'=>$id,
		// 	'instrumen'=>$instrumen,
		// 	'file'=>$file
		// );
		// $res=$this->model_instrumen->insert('id',$data_insert);
		// if ($res>=1) {
		// 	redirect('Admin/table_instrumen');
		// }else {
		// 	alert('Gagal Insert');
		// }

		 //membuat konfigurasi
      $config = [
        'upload_path' => './assets/instrumen/',
        'allowed_types' => 'pdf|xlsx|docx',
        'max_size' => 100000,
      ];
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload()) //jika gagal upload
      {
          $error = array('error' => $this->upload->display_errors()); //tampilkan error
          $this->load->view('Admin/table_instrumen', $error);
      } else
      //jika berhasil upload
      {
          $file = $this->upload->data();
          //mengambil data di form
          $data = ['file' => $file['file_name'],
           'id' => set_value('id'),
           'instrumen' => set_value('instrumen')
         ];
          $this->model_instrumen->input($data); //memasukan data ke database
          redirect('Admin/table_instrumen'); //mengalihkan halaman

      }
	}

	public function do_hapus($id){
		$where=array('id'=>$id);
		$res=$this->model_instrumen->Delete('id',$where);
		if($res>=1){
			redirect('Admin/table_instrumen');
		}else {
			alert('Gagal Hapus');
		}
	}

	public function edit_data($id){
		$res=$this->model_instrumen->GetInstrumen("where id='$id'");
		$data=array(
			"id"=>$res[0]['id'],
			"instrumen"=>$res[0]['instrumen']
		);
		$this->load->view('Admin/edit_instrumen',$data);
	}

	public function do_edit(){

		$id=$_POST['id'];
		$instrumen=$_POST['instrumen'];
		$data_update=array(
			'id'=>$id,
			'instrumen'=>$instrumen,
		);
		$where=array('id'=>$id);
		$res=$this->model_instrumen->update('id',$data_update,$where);
		if ($res>=1) {
			redirect('Admin/table_instrumen');
		}
		else {
			alert("Gagal Update") ;
		}
	}
}
