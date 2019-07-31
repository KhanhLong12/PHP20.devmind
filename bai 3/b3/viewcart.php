<?php 
	session_start();
 ?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h1>thông tin giỏ hàng</h1>
	<a href="giohang.php"><button type="button" class="btn btn-outline-primary">tiếp tục mua sản phẩm</button></a>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 
	if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
		echo "<table border='1' width='600'>";
		echo "<tr>";
		echo "<td>tên sản phẩm</td>";
		echo "<td>Số lượng</td>";
		echo "<td>Giá</td>";
		echo "<td>Thành tiền</td>";
		echo "</tr>";
		foreach ($_SESSION['cart'] as $list) {
			echo "<tr>";
			echo "<td>".$list['name']."</td>";
			echo "<td>".$list['số lượng']."</td>";
			echo "<td>".$list['price']."</td>";
			echo "<td>".($list['số lượng']*$list['price'])."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}

 ?>