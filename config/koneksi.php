<?php
$host="localhost";
$user="root";
$pass="";
$dbname="dbpmb";

$con=mysql_connect($host,$user,$pass) or die("Tidak Terhubung ke Database");
$db=mysql_select_db($dbname) or die("Database tidak ditemukan");
?>