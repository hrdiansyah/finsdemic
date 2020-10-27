<?php
$nama_server = "localhost";
$nama_user   = "rajarump_turf";
$password    = "vivaturf@123";

$mysql_link = mysql_connect($nama_server,$nama_user,$password);
if (! $mysql_link)
die("Database MySql tak dapat dibuka");
if (! mysql_select_db("rajarump_viva",$mysql_link))
die("Database tidak bisa dipilih");
?>