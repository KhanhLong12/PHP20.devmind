<?php 
	session_start();
	// session_destroy();
	require_once 'data.php';
	//lấy code sản phẩm theo phương thức GET
	$Code = $_GET['Code'];
	if (isset($_SESSION['cart'][$Code])) {
		$_SESSION['cart'][$Code]['quanlity'] ++;
	} else {
		//lấy thông tin sản phẩm dựa vào mã sản phẩm
	$product = $products[$Code];

	//đưa số lượng về 1
	$product['quanlity'] = 1;


	//thêm sản phẩm vào cart
	$_SESSION['cart'][$Code] = $product;
	}
	header('Location: index.php');
	?>