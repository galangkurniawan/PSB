<?php 
  include "koneksi.php" 
?> 
<HTML> 
<HEAD> 
<TITLE>Menampilkan Daftar Barang</TITLE> 
</HEAD> 
<BODY> 
<?php 
    $query = "SELECT * FROM barang"; 
  $sql = mysqli_query ($conn,$query); 
  echo "<h3>Daftar Barang</h3>"; 
  echo      "<table      border='1'      cellpadding='0' 
cellspacing='0'>"; 
  echo "<tr bgcolor='yellow'><td width=10%>Kd.Brg</
td><td 
width=40%>Nama Brg</td> 
  <td>Satuan</td><td>Harga             Jual</td><td>Harga 
Beli</td><td>Stok</td><td>Stok Min</td></tr>"; 
  while ($hasil = mysqli_fetch_array ($sql)) { 
     $kode = $hasil['kd_brg']; 
     $nama = stripslashes ($hasil['nm_brg']); 
     $satuan = stripslashes ($hasil['satuan']); 
     $harga = $hasil['harga']; 
     $harga_beli = $hasil['harga_beli']; 
     $stok= $hasil['stok']; 
     $stok_min = $hasil['stok_min']; 
  //tampilkan barang 
     echo "<tr bgcolor='cyan'> 
5
Pemrograman Web Lanjut | Ajib Susanto @ajibsusanto 
     <td align='center' width=10%>$kode</td> 
     <td align='left' width=40%>$nama</td> 
     <td align='left'>$satuan</td> 
     <td align='right'>$harga</td> 
     <td align='right'>$harga_beli</td> 
     <td align='right'>$stok</td> 
     <td align='right'>$stok_min</td>"; 
  } 
  echo "</table>"; 
?> 
</BODY> 
</HTML> 