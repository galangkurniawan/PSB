<?php

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "";
$mysql_dbname = "ci_database";

$my_apikey = "MSUJ6TXU19IHQ2H0XCGA";

// ==== END / variabel must be adjusted ====


$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_dbname);
if(! $conn ) {
  die('Could not connect: ' . mysql_error());
}

?>

<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {font-size: 16px}
.style4 {font-size: 12px}
a:link {
	color: #336699;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #336699;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #336699;
}
a {
	font-weight: bold;
}
.submit {border-style: solid;
	border-width: 1;
	padding-left: 4;
	padding-right: 4;
	padding-top: 1;
	padding-bottom: 1;
	
	border-color : Silver;
	FONT-SIZE: 8pt;
	COLOR: #000000;
	FONT-FAMILY: verdana,arial,helvetica;
	cursor:hand;
}
-->
</style>