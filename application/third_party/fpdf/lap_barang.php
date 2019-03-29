<?php 
//koneksi ke database 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbnm = "penjualan"; 
$conn = mysql_connect($host, $user, $pass); 
if ($conn) { 
 $open = mysql_select_db($dbnm); 
 if (!$open) { 
  die ("Database tidak dapat dibuka karena ".mysql_error()); 
} 
} else { 
 die ("Server MySQL tidak terhubung karena ".mysql_error()); 
} 
//akhir koneksi 
#ambil data di tabel dan masukkan ke array 
$query = "SELECT * FROM barang ORDER BY nm_brg"; 
$sql = mysql_query ($query); 
$data = array(); 
while ($row = mysql_fetch_assoc($sql)) { 
array_push($data, $row); 
} 
#setting judul laporan dan header tabel 
$judul = "LAPORAN DATA BARANG"; 
$header = array( 
  array("label"=>"KODE", "length"=>25, "align"=>"L"), 
  array("label"=>"NAMA BARANG", "length"=>50, "align"=>"L"), 
  array("label"=>"SATUAN", "length"=>25, "align"=>"L"), 
  array("label"=>"HARGA JUAL", "length"=>25, "align"=>"L"),
  array("label"=>"HARGA BELI", "length"=>25, "align"=>"L"),
  array("label"=>"STOK", "length"=>20, "align"=>"L"),  
  array("label"=>"STOK MIN", "length"=>25, "align"=>"L")
); 

#sertakan library FPDF dan bentuk objek 
require_once ("fpdf/fpdf.php"); 
$pdf = new FPDF(); 
$pdf->AddPage(); 

#tampilkan judul laporan 
$pdf->SetFont('Arial','B','16'); 
$pdf->Cell(0,20, $judul, '0', 1, 'C'); 

#buat header tabel 
$pdf->SetFont('Arial','','10'); 
$pdf->SetFillColor(255,0,0); 
$pdf->SetTextColor(255); 
$pdf->SetDrawColor(128,0,0); 
foreach ($header as $kolom) { 
 $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', 
$kolom['align'], true);
} 
$pdf->Ln(); 

#tampilkan data tabelnya 
$pdf->SetFillColor(224,235,255); 
$pdf->SetTextColor(0); 
$pdf->SetFont(''); 
$fill=false; 
foreach ($data as $baris) { 
 $i = 0; 
 foreach ($baris as $cell) { 
  $pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', 
$kolom['align'], $fill); 
 $i++; 
} 
 $fill = !$fill; 
$pdf->Ln(); 
} 
#output file PDF 
$pdf->Output(); 
?>