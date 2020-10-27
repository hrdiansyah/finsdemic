<?php
$nama_server = "localhost";
$nama_user   = "rajarump_turf";
$password    = "vivaturf@123";
$db_name     = "rajarump_viva";



// 1. Create a database connection
$connection = mysqli_connect($nama_server,$nama_user,$password);
if (!$connection) {
    die("Database connection failed");
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, $db_name);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}
?>