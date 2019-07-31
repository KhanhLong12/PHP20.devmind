<?php 
session_start();
	require_once 'list.php';
	 $idP = $_GET['id'];
	 $newProduct = array();
	 foreach($product as $value) {
	 	$newProduct[$value['id']] = $value;
	 }

	 if (!isset($_SESSION['cart']) || $_SESSION['cart'] == null ) {
	 	$newProduct[$idP]['số lượng'] = 1;
	 	$_SESSION['cart'][$idP] = $newProduct[$idP];
	 } else {
	 	if (array_key_exists($idP, $_SESSION['cart'])) {
	 		$_SESSION['cart'][$idP]['số lượng'] += 1;
	 	}else{
	 		$newProduct[$idP]['số lượng'] = 1;
	 		$_SESSION['cart'][$idP] = $newProduct[$idP];
	 	}
	 }
	 header('Location: giohang.php');
 ?>