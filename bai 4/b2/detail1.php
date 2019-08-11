<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>detail</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h1>Thông tin sản phẩm</h1>
	<br>
	<ul>
		<li>
			Tên sản phẩm: <?=$_SESSION['cart'][$_GET['code']]['name']?>
		</li>
		<li>
			<img width="200px" height="200px" src="images/<?=$_SESSION['cart'][$_GET['code']]['image']?>">
		</li>
		<li>
			Tên hãng: <?=$_SESSION['cart'][$_GET['code']]['hang']?>
		</li>
		<li>
			Bộ nhớ: <?=$_SESSION['cart'][$_GET['code']]['memory']?>
		</li>
		<li>
			Giá sản phẩm: <?=number_format($_SESSION['cart'][$_GET['code']]['price'])?>
		</li>
	</ul>
	<a href="cart1.php"><button type="button" class="btn btn-warning">Quay lại giỏ hàng</button></a>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>