<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

     public function __construct()
     {
      parent::__construct();
      $this->load->helper('url'); 
      $this->load->model('pelaporan_model');
      $this->load->library('form_validation');
     }


	public function index()
	  {

	  $this->load->view('homesekali');
    }

	public function formlengkap()
	  {
	  $this->form_validation->set_rules('perusahaan_terlapor','Perusahaan_Terlapor','required');
    $this->form_validation->set_rules('jabatan_unitkerja','jabatan_unitkerja','required');
    $this->form_validation->set_rules('uraian_pelapor','Uraian_pelapor','required|min_length[25]');
    $this->form_validation->set_rules('detail_pelanggaran','Detail_Pelanggaran','required');
    if($this->form_validation->run() == false){

      // query membuat kode unik    
      $data['nounik'] = $this->pelaporan_model->cek_kode_unik();
      $this->load->view ('formlengkap', $data);
    // 1// $dariDB = $this->pelaporan_model->cek_kode_unik();
    // $noUrut = substr($dariDB, 4);
    // $kode_unik_sekarang = $noUrut *2+7-4;
    // $data = array('kode_unik' => $kode_unik_sekarang);
    // $this->load->view ('formlengkap', $data);
    } else    

    {
      $this->tambah_simpan();
    }
      }
    

        public function tambah_simpan()
    {
      $kode_unik=$this->input->post('kode_unik');
      $password=$this->input->post('password');
      $jenis_pelaporaan = $this->input->post('jenis_pelaporaan');
      $aduan_pelapor = $this->input->post('aduan_pelapor');
      $uraian_pelapor = $this->input->post('uraian_pelapor');
      $nama_terlapor = $this->input->post('nama_terlapor');
      $perusahaan_terlapor = $this->input->post('perusahaan_terlapor');
      $jabatan_unitkerja = $this->input->post('jabatan_unitkerja');
      $detail_pelanggaran = $this->input->post('detail_pelanggaran');
      $date_created = date("Y-m-d H:i:s");
      $no_pelaporan= time();
      $foto = $_FILES['foto'];
        if ($foto=''){
        }
        else
        {
    $config['upload_path']   ='./images/fileupload';
    $config['allowed_types'] ='jpg|png|gif|mp4|pdf|doc|xls';
    $config['max_size'] = '1000000000000000';
    $this->load->library('upload',$config);
    if(!$this->upload->do_upload('foto')){
    $this->tanpafoto();
    }
      else
    {
        $foto= $this->upload->data('file_name');
    }
    }

   $data = array(
   'jenis_pelaporaan' => $jenis_pelaporaan,
   'kode_unik' => $kode_unik,
   'password'=>$password,
   'aduan_pelapor' => $aduan_pelapor,
   'uraian_pelapor'=>$uraian_pelapor,
   'nama_terlapor' => $nama_terlapor,
   'perusahaan_terlapor'=>$perusahaan_terlapor,
   'jabatan_unitkerja'=> $jabatan_unitkerja,
   'detail_pelanggaran'=>$detail_pelanggaran,
   'date_created' => $date_created,
   'foto'=> $foto,
   'no_pelaporan'=> $no_pelaporan
   );

   if($this->pelaporan_model->tambah($data) == TRUE) {
   $this->session->set_flashdata('tambah', true);
   }
     else 
   
   {
   $this->session->set_flashdata('tambah', false);
   
   }
     redirect('user/email');
   }

    
        public function tanpafoto()
   {

   $jenis_pelaporaan = $this->input->post('jenis_pelaporaan');
   $kode_unik= $this->input->post('kode_unik');
   $password=$this->input->post('password',true);
   $role_id = $this->input->post('role_id');
   $is_active=$this->input->post('is_active');
   $aduan_pelapor = $this->input->post('aduan_pelapor');
   $uraian_pelapor = $this->input->post('uraian_pelapor');
   $nama_terlapor = $this->input->post('nama_terlapor');
   $perusahaan_terlapor = $this->input->post('perusahaan_terlapor');
   $jabatan_unitkerja = $this->input->post('jabatan_unitkerja');
   $detail_pelanggaran = $this->input->post('detail_pelanggaran');
   $date_created = date("Y-m-d H:i:s");
   $no_pelaporan= time();
  
   $data = array(
   'jenis_pelaporaan' => $jenis_pelaporaan,
   'kode_unik' => $kode_unik,
   'password'=>$password,
   'role_id'=>3, 
   'is_active'=>1, 
   'aduan_pelapor' => $aduan_pelapor,
   'uraian_pelapor'=>$uraian_pelapor,
   'nama_terlapor' => $nama_terlapor,
   'perusahaan_terlapor'=>$perusahaan_terlapor,
    'jabatan_unitkerja'=> $jabatan_unitkerja,
   'detail_pelanggaran'=>$detail_pelanggaran,
   'date_created' => $date_created, 
   'no_pelaporan'=> $no_pelaporan
  );

   if($this->pelaporan_model->tambah($data) == TRUE) {
      $this->session->set_flashdata('tambah', true);
   }
     else 
   {
          $this->session->set_flashdata('tambah', false);
   }
     redirect('user/email');
   }
    
   public function laporanakhir()
   {
      $data['data_laporan'] = $this->db->get_where('data_laporan', ['kode_unik' => 
      $this->session->userdata('kode_unik')])->row_array();
      $this->load->view('lihatLaporan',$data);
   }

public function email(){

require 'PHPMailer/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                  // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'wbspusri@gmail.com';                     // SMTP username
    $mail->Password   = 'wbspusri2020';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('wbspusri@gmail.com', 'ADMIN WBS PUSRI');
    $mail->addAddress('sulistyopramudya7@gmail.com', 'bayudl@pusri.co.id');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('sulistyopramudya7@gmail.com');

    // Attachments
      // Optional name
    $mail->isHTML(true);
    // Content
    $mail->Subject = 'WBS PUSRI PALEMBANG';
    $mail->Body    = 'WBS Telah mendapatkan Laporan Terbaru Silahkan Cek Laporan Pengaduan Untuk Informasi lebih lanjut';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
      redirect('auth/registration');
  }

   public function download()
   {
    $this->load->helper('download');
    $fileinfo = $this->pelaporan_model->download();
    $file = 'images/fileupload'.$fileinfo['foto'];
    force_download($file, NULL);
   }




}




