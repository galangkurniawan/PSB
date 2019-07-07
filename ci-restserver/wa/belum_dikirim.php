<?php
error_reporting(~E_NOTICE);
require_once "koneksi.php";
include('lib/paginator.class.2.php');
$pages = new Paginator;


$sql1 = "
	select * from data_wa where (status <> 'SENT' and status<>'QUEUE') or status is null order by id_msg desc
";
$result1 = mysqli_query($conn,$sql1);

$sql2 = "
	select count(*) JML from ($sql1) x
";
$result2 = mysqli_query($conn,$sql2);
$data2 = mysqli_fetch_array($result2,MYSQL_ASSOC);


$pages->items_total = $data2['JML'];
$pages->mid_range = 9; // Number of pages to display. Must be odd and > 3
$pages->paginate();

$batasan = str_replace("and",",", $pages->limit );

$sql = "
	$sql1 LIMIT $batasan
";
$result = mysqli_query($conn,$sql);

echo "<h2>Belum Dikirim</h2>";
echo "<table width=100% border=1 cellspacing=0 collpadding=2>";
echo "<tr align=center bgcolor=#CCCCCC>";
echo "<td>NO WA</td><td>STATUS</td><td>ISI WA</td><td>VAR_1</td><td>VAR_2</td><td>VAR_3</td><td>VAR_4</td><td>VAR_5</td><td>VAR_6</td><td>VAR_7</td><td>VAR_8</td><td>VAR_9</td><td>VAR_10</td>";
echo "</tr>";
while ($data = mysqli_fetch_array($result,MYSQL_ASSOC)){
	$id_msg = $data[ID_MSG];
	$no_wa = $data[NO_WA];
	$status = $data[STATUS];
	$format_wa = $data[FORMAT_WA];
	$isi_wa = $data[ISI_WA];
	$var_1 = $data[VAR_1];
	$var_2 = $data[VAR_2];
	$var_3 = $data[VAR_3];
	$var_4 = $data[VAR_4];
	$var_5 = $data[VAR_5];
	$var_6 = $data[VAR_6];
	$var_7 = $data[VAR_7];
	$var_8 = $data[VAR_8];
	$var_9 = $data[VAR_9];
	$var_10 = $data[VAR_10];
	
	echo "<tr>";
	echo "<td><a href=hapus.php?id_msg=$id_msg onClick=\"return confirm('Yakin Akan Menghapus?')\">[x]</a> $no_wa</td><td>$status</td><td>$isi_wa</td><td>$var_1</td><td>$var_2</td><td>$var_3</td><td>$var_4</td><td>$var_5</td><td>$var_6</td><td>$var_7</td><td>$var_8</td><td>$var_9</td><td>$var_10</td>";
	echo "</tr>";
}
echo "</table><br>";

echo $pages->display_pages();
echo " | <span class=\"\">".$pages->display_items_per_page()."</span>"; 
echo " | Tot Data: ".$pages->items_total;

// update format =====
echo "<form action='update_format_wa.php' method='POST' onsubmit=\"return confirm('Anda yakin akan mengupdate format WA?');\">";
echo "<h3>Format WA</h3>";
echo "Gunakan tanda baca [...] untuk menampilkan isi variabel, misalnya [VAR_1] untuk menampilkan isi VAR_1.<br>Contoh: Halo [VAR_1], Tagihan Anda sebesar [VAR_2]. Terima Kasih.";
echo "<br><br>";
echo "<textarea name=teks rows=4 cols=100>$format_wa</textarea>";
echo "<input type=hidden name=url value='$_SERVER[REQUEST_URI]'>";
echo "<br><br><input type=submit value='Update Format'>";
echo "</form>";

// kirim WA =====
echo "<form action='kirim_wa.php' method='POST' onsubmit=\"return confirm('Anda yakin akan mengirimkan WA?');\">";
echo "<h3>Kirim WA</h3>";
echo "<input type=hidden name=url value='$_SERVER[REQUEST_URI]'>";
echo "<input type=submit value='Kirim WA'>";
echo "</form>";



mysqli_free_result($result);
mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($conn);
?>