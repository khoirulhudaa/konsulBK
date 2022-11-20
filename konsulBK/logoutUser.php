<?php 

session_start();
unset($_SESSION['username']);
unset($_SESSION['jk_user']);
unset($_SESSION['sesi']);
unset($_SESSION['finish']);
header("location: logoutPage.php");

?>