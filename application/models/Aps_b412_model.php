<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b412_model extends CI_Model {

public function __construct()
 {
 parent::__construct();
 $this->load->database();
 }

// Listing
 public function getprodi(){
 $prodi=$this->db->query('select concat(p.jurusan," ",p.prodi) as prodi from prodi_tbl p inner join dosen_tbl d inner join pkdt_tgs_belajar pd
on p.kode_prodi=d.kd_prodi and d.id_dosen=pd.id_dosen where p.kode_fakultas="F001"');
 return $prodi->result_array();
 }

 public function total1() {
 $total1=$this->db->query('select COUNT(p.jenjang_pend) as total1 from pkdt_tgs_belajar p inner join dosen_tbl d inner join prodi_tbl pt on p.id_dosen=d.id_dosen and d.kd_prodi=pt.kode_prodi where p.jenjang_pend="S2" and pt.kode_fakultas="F001" and kd_prodi="p002"');
 return $total1->result_array();
 }

 public function total2() {
 $total2=$this->db->query('select COUNT(p.jenjang_pend) as total2 from pkdt_tgs_belajar p inner join dosen_tbl d inner join prodi_tbl pt on p.id_dosen=d.id_dosen and d.kd_prodi=pt.kode_prodi where p.jenjang_pend="S3" and pt.kode_fakultas="F001" and kd_prodi="p002"');
 return $total2->result_array();
 }

 public function banyak1(){
 $banyak1=$this->db->query('select COUNT(p.jenjang_pend) as banyak1 from pkdt_tgs_belajar p inner join dosen_tbl d on p.id_dosen=d.id_dosen where p.jenjang_pend="S2" and kd_prodi="p002"');
 return $banyak1->result_array();
 }

 public function banyak2(){
 $banyak2=$this->db->query('select COUNT(p.jenjang_pend) as banyak2 from pkdt_tgs_belajar p inner join dosen_tbl d on p.id_dosen=d.id_dosen where p.jenjang_pend="S3" and kd_prodi="p002"');
 return $banyak2->result_array();
 }

}
