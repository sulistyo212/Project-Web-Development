<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ujicoba extends CI_Controller {

     public function __construct()
     {
          parent::__construct();

          $this->load->model('ujicobamodel');

          $this->load->library('form_validation');

    }


	public function index()
	{
	  $this->form_validation->set_rules('perusahaan_terlapor','Perusahaan_Terlapor','required');
    $this->form_validation->set_rules('jabatan_terlapor','Jabatan_Terlapor','required');
    $this->form_validation->set_rules('nilai_kerugian_perusahaan','Nilai_Kerugian_Perusahaan','required');
    $this->form_validation->set_rules('detail_pelanggaran','Detail_Pelanggaran','required');

    if($this->form_validation->run() == false){      
      $dariDB = $this->ujicobamodel->cek_kode_unik();
      $noUrut = substr($dariDB, 3,4);
      $kode_unik_sekarang = $noUrut + 1;
      $data= array('kode_unik' => $kode_unik_sekarang);
    $this->load->view ('formlengkap_ujicoba', $data);

    } else {

      $this->tambah_simpan();
    }
  
  }


        public function tambah_simpan()
{
     $data = array(
   'jenis_pelaporaan' => $this->input->post('jenis_pelaporaan'),
   'kode_unik'=> $this->input->post('kode_unik'),
   'aduan_pelapor' => $this->input->post('aduan_pelapor'),
   'nama_pelapor' => $this->input->post('nama_pelapor'),
   'alamat_pelapor' => $this->input->post('alamat_pelapor'),
   'no_telp_pelapor' => $this->input->post('no_telp_pelapor'),
   'email_pelapor' => $this->input->post('email_pelapor'),
   'uraian_pelapor' => $this->input->post('uraian_pelapor'),
   'nama_terlapor' => $this->input->post('nama_terlapor'),
   'perusahaan_terlapor' => $this->input->post('perusahaan_terlapor'),
   'jabatan_terlapor' => $this->input->post('jabatan_terlapor'),
   'nilai_kerugian_perusahaan' => $this->input->post('nilai_kerugian_perusahaan'),
   'detail_pelanggaran' => $this->input->post('detail_pelanggaran'),
   'date_created'=>date("Y-m-d H:i:s"));

     if($this->uji_coba->tambah($data) == TRUE) {
          $this->session->set_flashdata('tambah', true);
     }
     else {
          $this->session->set_flashdata('tambah', false);
     }

     redirect('user/laporanakhir');
}


    public function laporanakhir(){

      $dariDB = $this->uji_coba->cek_kode_unik();
      $noUrut = substr($dariDB, 3,4);
      $kode_unik_sekarang = $noUrut + 1;
      $data= array('kode_unik' => $kode_unik_sekarang);
      $data['laporan'] = $this->uji_coba->lihat_laporan();
      $this->load->view('detailLaporan', $data);
        

    }

}




