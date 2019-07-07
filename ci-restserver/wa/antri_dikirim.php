<head>
  <meta http-equiv="refresh" content="300">
</head>

<?php
error_reporting(~E_NOTICE);
require_once "koneksi.php";
include('lib/paginator.class.2.php');
$pages = new Paginator;



// cek status antrian

$sql1 = "
	select * from data_wa where status='QUEUE' order by id_msg desc
";
$result1 = mysqli_query($conn,$sql1);

$jml_berhasil = 0;
$jml_gagal = 0;

if($_GET[sinkronisasi]=="1"){
	while ($antrian = mysqli_fetch_array($result1,MYSQL_ASSOC)){
		$no_wa = $antrian[NO_WA];
		$id_msg = $antrian[ID_MSG];
		$tgl_kirim = $antrian[TGL_KIRIM];
		$status_antrian = cek_status_antrian($no_wa, $id_msg);
		if($status_antrian<>""){
			// jika gagal SENT harus diubah id_msg nya
			if($status_antrian=="SENT") {			
				$sql_antrian = "
					UPDATE data_wa SET
					status = '$status_antrian'
					WHERE id_msg=$id_msg
				";
			}
			else{
				$sql_antrian = "
					UPDATE data_wa a, (select max(id_msg)+1 as id_baru from data_wa) b SET
					a.id_msg = b.id_baru,
					a.status = '$status_antrian'
					WHERE a.id_msg=$id_msg
				";
			}
			//echo $sql_antrian;break;
			
			if($status_antrian=="FAILED (Rejected by APIWHA)") $jml_gagal++;
			else if($status_antrian=="SENT") $jml_berhasil++;
			
			$result_antrian = mysqli_query($conn,$sql_antrian);
		}
		$jml_antri++;
	}
	echo "<script>alert('Menunggu Antrian: ".($jml_antri-$jml_berhasil-$jml_gagal).". Berhasil dikirim: $jml_berhasil. Gagal dikirim: $jml_gagal')</script>";  
	echo "<script>window.open('autosinkron2.php','sinkron')</script>";
}




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

echo "<h2>Menunggu Antrian</h2>";
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

echo "<br><br>";
echo "<input value='Sinkronisasi Manual' type=button onClick=\"if(confirm('Anda yakin akan melakukan Sinkronisasi Manual?')) window.open('antri_dikirim.php?sinkronisasi=1','_self');\">";



mysqli_free_result($result);
mysqli_free_result($result1);
mysqli_free_result($result2);
mysqli_close($conn);

function cek_status_antrian($no_wa,$custom_data){
	$my_apikey = $GLOBALS['my_apikey']; 
	$number = $no_wa; 
	$type = "OUT"; 
	$api_url  = "http://panel.apiwha.com/get_messages.php"; 
	$api_url .= "?apikey=". urlencode ($my_apikey); 
	$api_url .=	"&number=". urlencode ($number); 
	$api_url .=	"&custom_data=". urlencode ($custom_data); 
	$api_url .= "&type=". urlencode ($type); 
	$my_json_result = file_get_contents($api_url, false); 
	$my_php_arr = json_decode($my_json_result); 
	foreach($my_php_arr as $item) 
	{ 
		$from_temp = $item->from; 
		$to_temp = $item->to; 
		$text_temp = $item->text; 
		$type_temp = $item->type; 
		$failed = $item->failed_date;
		$process = $item->process_date;
		
		if($failed=="" && $process<>"") return "SENT";
		else if($failed<>"" && $process<>"") return "FAILED (Rejected by APIWHA)";
	  
	}
	return "";
}

?>