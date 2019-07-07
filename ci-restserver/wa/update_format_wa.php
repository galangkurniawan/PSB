<?php
error_reporting(~E_NOTICE);
require_once "koneksi.php";

$_POST[teks] = str_replace("'","",$_POST[teks]);
$format_wa = $_POST[teks];

$teks = "'".$_POST[teks]."'";
$teks = str_replace("[","',IFNULL(",$teks);
$teks = str_replace("]",",''),'",$teks);
$teks = "concat($teks)";

$sql = "
	UPDATE data_wa SET
	format_wa = '$format_wa',
	isi_wa = $teks
	where (status <> 'SENT' and status<>'QUEUE') or status is null
";

$result2 = mysqli_query($conn,$sql);
if($_POST[teks]=="") {
	echo "<script>alert('Format WA belum diisi')</script>";    
}
else if($result2) {
	//echo "<script>alert('Format WA berhasil diupdate')</script>";    
}
else {
	echo "<script>alert('Format WA gagal diupdate')</script>"; 
}

echo "<script>window.open('".$_POST[url]."','_self')</script>";



mysqli_close($conn);

?>