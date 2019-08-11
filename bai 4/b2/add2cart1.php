<?php 
	session_start();
	require_once 'data1.php';
	$code = $_GET['code'];
	if ($_SESSION['cart'][$code]) {
		$_SESSION['cart'][$code]['quanlity'] ++;
	}else{
		$product = $products[$code];
		$product['quanlity'] = 1;
		$_SESSION['cart'][$code] = $product;
	}
	setcookie('msg','Thêm sản phẩm thành công!', time() + 1);
	header('Location: cart1.php');
 ?>