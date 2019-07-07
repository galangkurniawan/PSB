
<?php
Class Report_pdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function pdf_pendaftaran(){
        $pdf = new FPDF('l','mm','A5');
        $pdf->SetMargins(8,8,8);
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'Data Pendaftaran',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'SMA N 1 Tayu',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetX(20);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(35,6,'Nama',1,0);
        $pdf->Cell(8,6,'JK',1,0);
        $pdf->Cell(35,6,'TTL',1,0);
        $pdf->Cell(45,6,'Aalamat',1,0);
        $pdf->Cell(18,6,'Asal Sekolah',1,0);
        $pdf->Cell(15,6,'Thn Lulus',1,0);
        $pdf->Cell(9,6,'Kode',1,0);
        $pdf->SetFont('Arial','',9);
        $pdf->Ln();
        $pendaftaran = $this->db->get('pendaftaran')->result();
        foreach ($pendaftaran as $row){
            $pdf->SetX(20);
            $pdf->Cell(35,6,$row->nama,1,0);
            $pdf->Cell(8,6,$row->gender,1,0);
            $pdf->Cell(35,6,$row->tempat_lahir.', '.$row->tgl_lahir,1,0);
            $pdf->Cell(45,6,$row->alamat,1,0);
            $pdf->Cell(18,6,$row->asal_sekolah,1,0);
            $pdf->Cell(15,6,$row->tahun_lulus,1,0);
            $pdf->Cell(9,6,$row->kode_daftar,1,0);
            $pdf->Ln();
        }
        $pdf->Output();
    }
}
