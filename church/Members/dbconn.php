<?php
$host = "localhost";
$uname = "root";      // Change to the new MySQL username
$pas = "";        // Change to the new MySQL password
$db_name = "cff";      // Your database name remains the same
$tbl_name = "admin";

$link = @mysqli_connect($host, $uname, $pas) or die("cannot connect");
mysqli_select_db($link, $db_name) or die("cannot select db");
?>