<?php
error_reporting(~E_NOTICE);
require_once "koneksi.php"

?><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return confirm('Anda yakin akan mengupload Excel?');">
  <h2>Upload Excel</h2>
  <p>Format Kolom File Excel adalah sebagai berikut: </p>
  <table width="80%" border="1" cellspacing="0" cellpadding="3">
    <tr bgcolor="#CCCCCC">
      <td><div align="center">NO_WA</div></td>
      <td><div align="center">VAR_1</div></td>
      <td><div align="center">VAR_2</div></td>
      <td><div align="center">VAR_3</div></td>
      <td><div align="center">VAR_4</div></td>
      <td><div align="center">VAR_5</div></td>
      <td><div align="center">VAR_6</div></td>
      <td><div align="center">VAR_7</div></td>
      <td><div align="center">VAR_8</div></td>
      <td><div align="center">VAR_9</div></td>
      <td><div align="center">VAR_10</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <br />
  <table width="100%" border="0">
    <tr>
      <td width="9%">FILE EXCEL <strong>(xlsx) </strong></td>
      <td width="91%"><input type="file" name="file" />
      <br /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><br />
      
	  <input type="submit" name="Submit" value="Upload">
      </td></tr>
  </table>
</form>
<?php

function getExtension($str) {

         $i = strrpos($str,".");
         if (!$i) { return ""; } 

         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return strtoupper($ext);
 }

if($_FILES['file']['name']<>""){
	$ekstensi = getExtension($_FILES['file']['name']);
	if($ekstensi=="XLS" || $ekstensi=="XLSX"){
		move_uploaded_file($_FILES['file']['tmp_name'], "excel/upload.".$ekstensi);
		$save = true;
		
	}
	else echo "<script>alert('Error, file yang diupload harus file excel.')</script>";
}
if($save){
	
	//require_once "koneksi.php";
	
	/*
	// kosongkan pb_pelanggan_upload
	$sql = "delete from pb_pelanggan_upload";
	$result = oci_parse($c, $sql);
	$hasil = oci_execute($result);
	*/
	
	include 'excel/simplexlsx.class.php';
	$xlsx = new SimpleXLSX("excel/upload.".$ekstensi);
	
	
	list($cols,) = $xlsx->dimension();
	$jml_data = 0;
	
	foreach( $xlsx->rows() as $k => $r) {
		//if ($k == 0) continue; // skip first row
		if ($k == 0) { // cek data
			if (
			strtoupper($r[0])<>"NO_WA" ||
			strtoupper($r[1])<>"VAR_1" ||
			strtoupper($r[2])<>"VAR_2" 
			) {
				echo "<script>alert('Upload gagal, nama kolom tidak sesuai standar.')</script>";
				break;
			}
		}
		//$tmp = "";
		echo '<tr>';
		
		//echo "<td>$tmp</td>";
		
		if ($k<>0) {
			
			$r[0] = strtoupper($r[0]);
			$r[1] = strtoupper($r[1]);
			
			$sql = "
			insert into data_wa (tgl_input,no_wa,var_1,var_2,var_3,var_4,var_5,var_6,var_7,var_8,var_9,var_10)
			values (now(),'$r[0]','$r[1]','$r[2]','$r[3]','$r[4]','$r[5]','$r[6]','$r[7]','$r[8]','$r[9]','$r[10]')
			";
			$result = mysqli_query($conn, $sql);
			$jml_data=$jml_data+1;
			//echo $sql;
		}
	}
	
	if($jml_data>0){
		echo "<script>alert('$jml_data Data Berhasil diupload!')</script>";
		echo "<script>window.open('belum_dikirim.php','_self')</script>";
	}
	
	mysqli_close($conn);
	
}
?>