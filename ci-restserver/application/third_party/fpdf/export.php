<?php  
 session_start(); 
 // Fungsi header dengan mengirimkan raw data excel
 header ( "Content-type: application/vnd-ms-excel" 
) ;  
 // Mendefinisikan nama file ekspor "hasil-export.x
ls"  
 header      (      "Content-Disposition:      attachment; 
filename=hasil_export.xls" ) ;  
 // Tambahkan table  
 include 'lapstok.php' ;  
?> 