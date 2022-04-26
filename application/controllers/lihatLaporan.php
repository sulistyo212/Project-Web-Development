<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lihatLaporan extends CI_Controller {

 public function __construct()
     { 
          parent::__construct();
          $this->load->model('pelaporan_model');

     }

         public function index(){
      $dariDB = $this->pelaporan_model->cek_kode_unik();
      $noUrut = substr($dariDB, 3,4);
      $kode_unik_sekarang = $noUrut + 1;
      $data= array('kode_unik' => $kode_unik_sekarang);
      $data['laporan'] = $this->pelaporan_model->lihat_laporan();
      $this->load->view('lihatLaporan', $data);
    }

    	
}