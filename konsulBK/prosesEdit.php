<?php 
include 'koneksi.php';

/*Variabel untuk menerima data dari form*/
$id_admin = $_GET['id'];
$nama_admin = $_POST['nama_admin'];
$alamat_admin = $_POST['alamat_admin'];
$jk_admin = $_POST['jk_admin'];
$no_telephone = $_POST['no_telephone'];

if(isset($_POST['edit']))
{
	/*query Update ke database*/
	$sql="UPDATE admin SET nama_admin='$nama_admin', alamat_admin='$alamat_admin', jk_admin='$jk_admin', no_telephone='$no_telephone' WHERE id_admin='$id_admin'";
	$query=mysqli_query($koneksi, $sql);
	header("location:admin.php");
}