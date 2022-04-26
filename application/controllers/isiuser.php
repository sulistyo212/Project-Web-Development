<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class isiuser extends CI_Controller {
	public function __construct()
     {
      parent::__construct();
      $this->load->model('pelaporan_model');
      $this->load->helper(array('url'));   
      is_logged_inn();
     }

	public function index()
     {
      $data['join2'] = $this->pelaporan_model->tampildata();  
     $data['userlogin'] = $this->db->get_where('userlogin', ['email' => 
     $this->session->userdata('email')])->row_array();
     $this->load->view('halamanuser',$data);

     }

  public function get_data(){
     $data['userlogin'] = $this->db->get_where('userlogin', ['email' => 
     $this->session->userdata('email')])->row_array();
    $keyword = $this->input->get('keyword');
    $data = $this->pelaporan_model->get_data_barang_bykode($keyword);
    $data = array(
      'keyword' => $keyword,
      'data'    => $data
    );
    $this->load->view('isilaporaninstansi',$data);
    }

   public function edit($textView){
      $textView= $this->input->post('textView');
      $laporan_instansi= $this->input->post('laporan_instansi');    
      $data = array(
        'textView' => $textView,
        'laporan_instansi' => $laporan_instansi
        );
      $this->pelaporan_model->kirimtanggapan($textView,$laporan_instansi);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Tanggapan Anda Telah Diterima</div>');
      redirect('isiuser');


  }


      
}