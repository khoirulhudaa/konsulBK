<?php 

$username = "root";
$pass = "";
$host = "localhost";
$db = "konsulbk";

$koneksi = mysqli_connect($host, $username, $pass, $db);
if(!$koneksi) {
    die("Gagal  terhubung denan database anda!");
}

?>