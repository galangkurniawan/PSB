<?php
error_reporting(~E_NOTICE);
require_once "koneksi.php";
include('lib/paginator.class.2.php');
$pages = new Paginator;


$sql1 = "
	select * from data_wa where status = 'SENT'  order by id_msg desc
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

echo "<h2>Sudah Dikirim</h2>";
echo "<table width=100% border=1 cellspacing=0 collpadding=2>";
echo "<tr align=center bgcolor=#CCCCCC>";
echo "<td>NO WA</td><td>ISI WA</td><td>TGL KIRIM</td><td>STATUS</td>";
echo "</tr>";
while ($data = mysqli_fetch_array($result,MYSQL_ASSOC)){
	$no_wa = $data[NO_WA];
	$tgl_kirim = $data[TGL_KIRIM];
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
	echo "<td>$no_wa</td><td>$isi_wa</td><td>$tgl_kirim</td><td>$status</td>";
	echo "</tr>";
}
echo "</table><br>";

echo $pages->display_pages();
echo " | <span class=\"\">".$pages->display_items_per_page()."</span>"; 
echo " | Tot Data: ".$pages->items_total;





mysqli_free_result($result);
mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($conn);
?>