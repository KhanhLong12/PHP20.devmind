<?php 

	session_start();
	$Code = $_GET['Code'];
	if ($_SESSION['cart'][$Code]['quanlity']>1) {
		$_SESSION['cart'][$Code]['quanlity'] --;
	}else{
		unset($_SESSION['cart'][$Code]);
	}
	echo "<pre>";
	print_r($_SESSION['cart']);
	echo "</pre>";
	die();
	header('Location: giohang2.php');

 ?>