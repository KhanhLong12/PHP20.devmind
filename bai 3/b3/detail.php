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
			Tên sản phẩm: <?=$_SESSION['cart'][$_GET['id']]['name']?>
		</li>
		<li>
			Tên hãng: <?=$_SESSION['cart'][$_GET['id']]['hang']?>
		</li>
		<li>
			Bộ nhớ: <?=$_SESSION['cart'][$_GET['id']]['memory']?>
		</li>
		<li>
			Giá sản phẩm: <?=$_SESSION['cart'][$_GET['id']]['price']?>
		</li>
	</ul>
	<a href="viewcart.php"><button type="button" class="btn btn-warning">Quay lại giỏ hàng</button></a>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>