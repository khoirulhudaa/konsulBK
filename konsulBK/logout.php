<?php 

session_start();
unset($_SESSION['username_admin']);
header("location: login.php");

?>