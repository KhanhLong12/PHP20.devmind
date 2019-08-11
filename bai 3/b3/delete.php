<?php 
	session_start();
	$id = $_GET['id'];
	if ($_SESSION['cart'][$id]['số lượng'] > 1) {
		$_SESSION['cart'][$id]['số lượng']--;
	}else {
		unset($_SESSION['cart'][$id]);
	}
	header('Location: viewcart.php');
 ?>