<?php 
	session_start();
 ?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h1>thông tin giỏ hàng</h1>
	<table class="table table-bordered">
		<?php 
		$total = 0;
				if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
				foreach ($_SESSION['cart'] as $list) {
					$total += $list['số lượng'];
				}
			}
		 ?>
		 <div class="alert alert-primary" role="alert">
			   Có <a href="#" class="alert-link"><?php echo $total; ?></a> sản phẩm trong giỏ hàng của bạn.
		</div>
		  <thead>
		    <tr>	    	 
		      <th scope="col">ID</th>
		      <th scope="col">Tên sản phẩm</th>
		      <th scope="col">Số lượng</th>
		      <th scope="col">Giá</th>
		      <th scope="col">Thành tiền</th>
		      <th scope="col">Thao tác</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <?php foreach ($_SESSION['cart'] as $list => $value): ?>
		      	<tr>
		      		<td><?=$_SESSION['cart'][$list]['id']?></td>
		      		<td><?=$_SESSION['cart'][$list]['name']?></td>
		      		<td><?=$_SESSION['cart'][$list]['số lượng']?></td>
		      		<td><?=$_SESSION['cart'][$list]['price']?></td>
		      		<td><?=$_SESSION['cart'][$list]['price']*$_SESSION['cart'][$list]['số lượng']?></td>
		      		<td>
		      			<a href="detail.php?id=<?=$_SESSION['cart'][$list]['id']?>"><button type="button" class="btn btn-info">Detail</button></a>
		      			<a href="delete.php?id=<?=$_SESSION['cart'][$list]['id']?>"><button type="button" class="btn btn-danger">Delete</button></a>
		      		</td>
		      	</tr>	
		      <?php endforeach ?>
		    </tr>
		  </tbody>
		</table>
		<a href="giohang.php"><button type="button" class="btn btn-outline-primary">tiếp tục mua sản phẩm</button></a>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>


