<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class ujicobamodel extends CI_Model {

  public $kode_unik;

     public function __construct()
     {
          parent::__construct();

          $this->load->database();
     }


      public function semua()
     {
          $this->db->select('*');
          $this->db->from('uji_coba');
          $this->db->order_by('id_laporan', 'DESC');
          return $this->db->get();

     }
     
     public function detaillaporan($kode_unik)
     {
      $this->db->select('*');
      $this->db->from('uji_coba');
      $this->db->where('uji_coba.kode_unik',$kode_unik);
      $result= $this->db->get();
      return $result;
     
      // $data = array();
      // $options = array('kode_unik' => $kode_unik);
      // $Q = $this->db->get_where('uji_coba',$options,1);
      // if ($Q->num_rows() > 0){
      // $data = $Q->row_array();
      //  }
      // $Q->free_result();
      // return $data;

     }


     public function tambah($data)
    {
      $this->db->insert('uji_coba', $data);
     return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
}
	public function jenislaporan($data)
	{
		$this->db->insert('uji_coba', $data);
		return ($this->db->affected_rows()>0)? TRUE : FALSE;

	}


      public function lihat_laporan()
     {
          $this->db->select('*');
          $this->db->from('uji_coba');
          $this->db->order_by('id_laporan', 'DESC');
          $this->db->limit(1);
          return $this->db->get();

     }

     public function cek_kode_unik()
     {
     $query = $this->db->query("SELECT MAX(kode_unik) as kodeunik from uji_coba");
     $hasil = $query->row();
     return $hasil->kodeunik;
     }


   }