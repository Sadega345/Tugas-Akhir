<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CrudProdi extends CI_Controller {
	
	public function index(){
		$data=$this->model_prodi->GetProdi();
		$this->load->view('Admin/tampilan_prodi.php',array('data'=>$data));
	}

	public function tambah(){
		$data=$this->model_prodi->GetFakultas();
		$datapt=$this->model_prodi->GetPerguruanTinggi();

		$kd_prodi = count($data)+1;
		$kd_perguruan = count($datapt)+1;

		$convert = "P".str_pad($kd_prodi,3,"0",STR_PAD_LEFT);
		$convertpt = "PT".str_pad($kd_perguruan,3,"0",STR_PAD_LEFT);
		// echo $convert."Perguruan Tinggi : ".$convertpt; die;

		
		$this->load->view('Admin/inputan_prodi.php',array('convert' => $convert,
															'convertpt' => $convertpt));
	}

	public function do_tambah(){
		$kode_prodi=$_POST['kode_prodi'];
		$kode_fakultas=$_POST['kode_fakultas'];
		$kode_pt=$_POST['kode_pt'];

		$prodi=$_POST['prodi'];
		$jurusan=$_POST['jurusan'];
		$no_sk_ps=$_POST['no_sk_ps'];

		$tgl_sk_ps=$_POST['tgl_sk_ps'];
		$pejabat_ttd=$_POST['foto_skpejabat_ttd'];
		$foto_sk_ps=$_POST['foto_sk_ps'];

		$bln_mulai_ps=$_POST['bln_mulai_ps'];
		$thn_mulai_ps=$_POST['thn_mulai_ps'];
		$no_sk_opr=$_POST['no_sk_opr'];

		$tgl_sk_opr=$_POST['tgl_sk_opr'];
		$foto_sk_opr=$_POST['foto_sk_opr'];
		$peringkat=$_POST['peringkat'];

		$nilai=$_POST['nilai'];
		$no_sk_ban_pt=$_POST['no_sk_ban_pt'];
		$alamat_ps=$_POST['alamat_ps'];

		$no_telp_ps=$_POST['no_telp_ps'];
		$no_fax_ps=$_POST['no_fax_ps'];
		$homepage_ps=$_POST['homepage_ps'];
		$email_ps=$_POST['email_ps'];

		$data_insert=array(
			'kode_prodi'=>$kode_prodi,
			'kode_fakultas'=>$kode_fakultas,
			'kode_pt'=>$kode_pt,

			'prodi'=>$prodi,
			'jurusan'=>$jurusan,
			'no_sk_ps'=>$no_sk_ps,

			'tgl_sk_ps'=>$tgl_sk_ps,
			'pejabat_ttd'=>$pejabat_ttd,
			'foto_sk_ps'=>$foto_sk_ps,

			'bln_mulai_ps'=>$bln_mulai_ps,
			'thn_mulai_ps'=>$thn_mulai_ps,
			'no_sk_opr'=>$no_sk_opr,

			'tgl_sk_opr'=>$tgl_sk_opr,
			'foto_sk_opr'=>$foto_sk_opr,
			'peringkat'=>$peringkat,

			'nilai'=>$nilai,
			'no_sk_ban_pt'=>$no_sk_ban_pt,
			'alamat_ps'=>$alamat_ps,

			'no_telp_ps'=>$no_telp_ps,
			'no_fax_ps'=>$no_fax_ps,
			'homepage_ps'=>$homepage_ps,
			'email_ps'=>$email_ps,
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
		$res=$this->model_prodi->GetEditProdi("where kode_prodi='$kode'");
		$data=array(
			"kode_prodi"=>$res[0]['kode_prodi'],
			"kode_fakultas"=>$res[0]['kode_fakultas'],
			"kode_pt"=>$res[0]['kode_pt'],

			"prodi"=>$res[0]['prodi'],
			"jurusan"=>$res[0]['jurusan'],
			"no_sk_ps"=>$res[0]['no_sk_ps'],

			"tgl_sk_ps"=>$res[0]['tgl_sk_ps'],
			"pejabat_ttd"=>$res[0]['pejabat_ttd'],
			"foto_sk_ps"=>$res[0]['foto_sk_ps'],

			"bln_mulai_ps"=>$res[0]['bln_mulai_ps'],
			"thn_mulai_ps"=>$res[0]['thn_mulai_ps'],
			"no_sk_opr"=>$res[0]['no_sk_opr'],

			"tgl_sk_opr"=>$res[0]['tgl_sk_opr'],
			"foto_sk_opr"=>$res[0]['foto_sk_opr'],
			"peringkat"=>$res[0]['peringkat'],

			"nilai"=>$res[0]['nilai'],
			"no_sk_ban_pt"=>$res[0]['no_sk_ban_pt'],
			"alamat_ps"=>$res[0]['alamat_ps'],

			"no_telp_ps"=>$res[0]['no_telp_ps'],
			"no_fax_ps"=>$res[0]['no_fax_ps'],
			"homepage_ps"=>$res[0]['homepage_ps'],
			"email_ps"=>$res[0]['email_ps']

		);
		$this->load->view('Admin/edit_prodi',$data);
	}

	public function do_edit(){

		$kode_prodi=$_POST['kode_prodi'];
		$kode_fakultas=$_POST['kode_fakultas'];
		$kode_pt=$_POST['kode_pt'];

		$prodi=$_POST['prodi'];
		$jurusan=$_POST['jurusan'];
		$no_sk_ps=$_POST['no_sk_ps'];

		$tgl_sk_ps=$_POST['tgl_sk_ps'];
		$pejabat_ttd=$_POST['foto_skpejabat_ttd'];
		$foto_sk_ps=$_POST['foto_sk_ps'];

		$bln_mulai_ps=$_POST['bln_mulai_ps'];
		$thn_mulai_ps=$_POST['thn_mulai_ps'];
		$no_sk_opr=$_POST['no_sk_opr'];

		$tgl_sk_opr=$_POST['tgl_sk_opr'];
		$foto_sk_opr=$_POST['foto_sk_opr'];
		$peringkat=$_POST['peringkat'];

		$nilai=$_POST['nilai'];
		$no_sk_ban_pt=$_POST['no_sk_ban_pt'];
		$alamat_ps=$_POST['alamat_ps'];

		$no_telp_ps=$_POST['no_telp_ps'];
		$no_fax_ps=$_POST['no_fax_ps'];
		$homepage_ps=$_POST['homepage_ps'];
		$email_ps=$_POST['email_ps'];

		$data_update=array(
			'kode_prodi'=>$kode_prodi,
			'kode_fakultas'=>$kode_fakultas,
			'kode_pt'=>$kode_pt,

			'prodi'=>$prodi,
			'jurusan'=>$jurusan,
			'no_sk_ps'=>$no_sk_ps,

			'tgl_sk_ps'=>$tgl_sk_ps,
			'pejabat_ttd'=>$pejabat_ttd,
			'foto_sk_ps'=>$foto_sk_ps,

			'bln_mulai_ps'=>$bln_mulai_ps,
			'thn_mulai_ps'=>$thn_mulai_ps,
			'no_sk_opr'=>$no_sk_opr,

			'tgl_sk_opr'=>$tgl_sk_opr,
			'foto_sk_opr'=>$foto_sk_opr,
			'peringkat'=>$peringkat,

			'nilai'=>$nilai,
			'no_sk_ban_pt'=>$no_sk_ban_pt,
			'alamat_ps'=>$alamat_ps,

			'no_telp_ps'=>$no_telp_ps,
			'no_fax_ps'=>$no_fax_ps,
			'homepage_ps'=>$homepage_ps,
			'email_ps'=>$email_ps,
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
