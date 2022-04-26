<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'REKAP LAPORAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'WHISTLE BLOWER SISTEM',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->SetFillColor(192,192,192);
        $pdf->Cell(50,6,'No Pelaporan',1,0);
        $pdf->Cell(50,6,'Jenis Pelaporan',1,0);
        $pdf->Cell(35,6,'Waktu Pelaporan',1,0);
        $pdf->Cell(60   ,6,'Status Pelaporan',1,1);
        $pdf->SetFont('Arial','',10);
        $data_laporan = $this->db->get('data_laporan')->result();
        foreach ($data_laporan as $row){
            $pdf->Cell(50,6,$row->kode_unik,1,0);
            $pdf->Cell(50,6,$row->jenis_pelaporaan,1,0);
            $pdf->Cell(35,6,$row->date_created,1,0);
            $pdf->Cell(60,6,$row->statuspelaporan,1,1);
        }
        $pdf->Output();
    }
}
