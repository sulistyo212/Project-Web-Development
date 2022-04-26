<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class admin extends CI_Controller {

 public function __construct()
     {
          parent::__construct();
             $this->load->library('Pdf');
 $this->load->library('upload');
          $this->load->model('pelaporan_model');
          $this->load->helper(array('url','download'));   
            $this->load->library('form_validation');
           is_logged_in();

    }
     
	public function index()
     {
       $this->form_validation->set_rules('inisial_instansi','required');
    	$data['semua_pengguna'] = $this->pelaporan_model->semua();
  		$data['adminlogin'] = $this->db->get_where('adminlogin', ['email' => 
  		$this->session->userdata('email')])->row_array();
       if($this->form_validation->run() == false){
      $this->load->view ('viewadmin', $data);
    } else    

    {
      $this->teruskan();
    }
     }

	   public function lihatdetailadm($textView)
     {
      $data['semua_penggunaa'] = $this->pelaporan_model->detaillaporan($textView);
      $data['data_laporan'] = $this->pelaporan_model->detaillaporan($this->uri->segment(3));
      $this->load->view('detailaduanAdm', $data);
     }
         public function teruskan()
    {
      $textView= $this->input->post('textView');
      $status_laporan= $this->input->post('status_laporan');
      $data = array(
        'textView' => $textView,
        'status_laporan' => $status_laporan
        );
      $this->pelaporan_model->status_laporan($textView,$status_laporan);
       $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Laporan Berhasil Diteruskan</div>');
      redirect('admin');
      }
    

      public function editinstansi()
      {
      $textView= $this->input->post('textView');
      $inisial_instansi= $this->input->post('inisial_instansi');    
      $data = array(
        'textView' => $textView,
        'inisial_instansi' => $inisial_instansi
        );
      $this->pelaporan_model->inputinstansi($textView,$inisial_instansi);
      redirect('admin');
      }

      public function blocked(){
        echo("ANDA TIDAK MEMILIKI AKSES, SILAHKAN LOGIN TERLEBIH DAHULU");
      }


      public function sendEmail()
     {

        if (isset($_POST['submit'])) {
            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
 
            $email         = $this->input->post('email');
            $subject      = $this->input->post('subject'); 
            $isi      = $this->input->post('isi');
            
            
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'sulistyopramudya7@gmail.com';                     // SMTP username
            $mail->Password   = 'Tyonumber1';                               // SMTP password
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
 
            //Recipients
            $mail->setFrom('sulistyopramudya7@gmail.com');
            $mail->addAddress($email, $email);     // Add a recipient
 
            $mail->addReplyTo('sulistyopramudya7@gmail.com');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');  
            if (!empty($_FILES['lampiran'])) {
              $mail->addAttachment(
             $_FILES['lampiran']['tmp_name'],
             $_FILES['lampiran']['name'] 
           );
            }
            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $isi;
 
         if ($mail->send()) {
               $this->session->set_flashdata('emailberhasil','<div class="alert alert-success" role="alert">Email Berhasil dikirim</div>');
                 redirect('admin');
            } else {
                $this->session->set_flashdata('emailgagal','<div class="alert alert-success" role="alert">Email gagal terkirim</div>');
                  redirect('admin');
            }
        } else {
            echo "Tekan dulu tombolnya bos";
        }
    }


    public function pdf(){
      {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','A3');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,8,'DAFTAR LAPORAN OMBUDSMAN REPUBLIK INDONESIA ',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(20,6,'ID Laporan',1,0,'C');
        $pdf->Cell(30,6,'Nama Pelapor',1,0,'C');
        $pdf->Cell(50,6,'No identitas',1,0,'C');
        $pdf->Cell(50,6,'Email',1,0,'C');
        $pdf->Cell(40,6,'Telp',1,0,'C');
        $pdf->Cell(45,6,'Provinsi Pelapor',1,0,'C');
        $pdf->Cell(40,6,'Kategori Pelapor',1,0,'C');
        $pdf->Cell(40,6,'Klasifikasi Instansi',1,0,'C');
        $pdf->Cell(35,6,'Nama Instansi',1,0,'C');
        $pdf->Cell(45,6,'Provinsi Terlapor',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $pelaporan = $this->db->get('pelaporan')->result();
        $no=0;
        foreach ($pelaporan as $data){
            $no++;
            $pdf->Cell(10,6,$no,1,0, 'C');
            $pdf->Cell(20,6,$data->textView,1,0);
            $pdf->Cell(30,6,$data->namapelapor,1,0);
            $pdf->Cell(50,6,$data->no_identitas,1,0);
            $pdf->Cell(50,6,$data->email,1,0);
            $pdf->Cell(40,6,$data->no_telepon,1,0);
            $pdf->Cell(45,6,$data->provinsi_pelapor,1,0);
            $pdf->Cell(40,6,$data->kategori_pelapor,1,0);
            $pdf->Cell(40,6,$data->klasifikasi_instansi,1,0);
            $pdf->Cell(35,6,$data->nama_instansi,1,0);
            $pdf->Cell(45,6,$data->provinsi_terlapor,1,1);

        }
        $pdf->Output();
  }
    }


}



