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
	 	if (array_key_exists($idP, $_SESSION['cart'])) {//kiểm tra xem cái giá trị (id) có phải là khóa của giỏ hàng hay không.
	 		$_SESSION['cart'][$idP]['số lượng'] += 1;
	 	}else{
	 		$newProduct[$idP]['số lượng'] = 1;
	 		$_SESSION['cart'][$idP] = $newProduct[$idP];
	 	}
	 }
	 setcookie('msg','Thêm sản phẩm thành công!', time() + 1);
	 header('Location: giohang.php');
 ?>
