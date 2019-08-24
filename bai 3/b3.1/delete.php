<?php 

	session_start();
	$Code = $_GET['Code'];
	if ($_SESSION['cart'][$Code]['quanlity']>1) {
		$_SESSION['cart'][$Code]['quanlity'] --;
	}else{
		unset($_SESSION['cart'][$Code]);
	}
	header('Location: giohang2.php');

 ?>