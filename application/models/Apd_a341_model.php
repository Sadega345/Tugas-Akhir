<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apd_a341_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data= $this->db->query('SELECT sangat_baik,baik,cukup,kurang,rencana,jenis_kemampuan,id FROM evaluasi_lulusan WHERE id_prodi="p001" ORDER BY id_kemampuan');
 return $data->result_array();
 }

 public function update($where="") {
 $data= $this->db->query('SELECT sangat_baik,baik,cukup,kurang,rencana,jenis_kemampuan,id FROM evaluasi_lulusan '.$where);
 return $data->result_array();
 }

public function rubah($tablename,$data,$where){
$res=$this->db->update($tablename,$data,$where);
return $res;
}

public function updatewaktu($where="") {
 $data= $this->db->query('SELECT id,waktu,id_prodi FROM wkt_tunggu_llsn '.$where.'and id_prodi="p001"');
 return $data->result_array();
 }

public function updatepersen($where="") {
 $data= $this->db->query('SELECT id,persen,id_prodi FROM persentase_llsn '.$where.'and id_prodi="p001"');
 return $data->result_array();
 }
 
 public function sangatbaik() {
 $data= $this->db->query('SELECT SUM(sangat_baik)AS Sangat_baik FROM evaluasi_lulusan WHERE id_prodi="p001"');
 return $data->result_array();
 }

 public function baik() {
 $data= $this->db->query('SELECT SUM(baik)AS Baik FROM evaluasi_lulusan WHERE id_prodi="p001"');
 return $data->result_array();
 }

 public function cukup() {
 $data= $this->db->query('SELECT SUM(cukup)AS Cukup FROM evaluasi_lulusan WHERE id_prodi="p001"');
 return $data->result_array();
 }

 public function kurang() {
 $data= $this->db->query('SELECT SUM(kurang)AS Kurang FROM evaluasi_lulusan WHERE id_prodi="p001"');
 return $data->result_array();
 }

 public function waktu() {
 $data=$this->db->query('SELECT id,waktu,id_prodi FROM wkt_tunggu_llsn WHERE id_prodi="p001"');
 return $data->result_array();
 }

 public function persen() {
 $data=$this->db->query('SELECT id,id_prodi,persen FROM persentase_llsn WHERE id_prodi="p001"');
 return $data->result_array();
 }

}
