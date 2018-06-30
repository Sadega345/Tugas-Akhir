<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aps_b321_model extends CI_Model {

// public function __construct()
//  {
//  parent::__construct();
//  $this->load->database();
//  }

// Listing
 public function listing() {
 $data= $this->db->query('
SELECT P.PRODI,P.JURUSAN,M.RATA_MASA_STD,M.RATA_IPK,M.KETERANGAN FROM masastudi_ipk M 
INNER JOIN prodi_tbl P ON P.kode_prodi=M.kd_prodi WHERE M.kd_prodi="p002"');
 return $data->result_array();
 }

}
