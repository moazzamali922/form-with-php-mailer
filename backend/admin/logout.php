<?php
session_start();

$_SESSION = array();

if(isset($_SESSION['veteran_username'])&&isset($_SESSION['veteran_admin']))
{
	unset($_SESSION["veteran_username"]);
    unset($_SESSION["veteran_admin"]);
	
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('location:../../admin/login.php');
}else{
	//
}
header('location:../../admin/login.php');

exit();
?>