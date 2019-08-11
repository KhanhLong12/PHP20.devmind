<?php 
	session_start();
	$code = $_GET['code'];
	if ($_SESSION['cart'][$code]['quanlity'] > 1) {
		$_SESSION['cart'][$code]['quanlity'] --;
	}else{
		unset($_SESSION['cart'][$code]);
	}
	header('Location: cart1.php');
 ?>