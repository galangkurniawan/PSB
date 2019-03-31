<?php  
//koneksi ke database  
$host = "localhost";  
$user = "root";  
$pass = "";  
$dbnm = "penjualan";  
$conn = mysqli_connect($host, $user, $pass,$dbnm); 
if (!$conn) {  
 die    ("Server    MySQL    tidak    terhubung    karena 
".mysqli_error());  
}  


?>