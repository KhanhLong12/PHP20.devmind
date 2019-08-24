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
	<h1 style="text-align: center;">thông tin giỏ hàng</h1>
	<?php 
		$total = 0;
				if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
				foreach ($_SESSION['cart'] as $code) {
					$total += $code['quanlity'];
				}
			}
		 ?>
		 <div class="alert alert-primary" role="alert">
			   Có <a href="#" class="alert-link"><?php echo $total; ?></a> sản phẩm trong giỏ hàng của bạn.
		</div>

	<table class="table table-bordered"> 
			<?php 
			$sum = 0;
  			$dem = 0;
				if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
					echo "<thead>";
						echo "<tr>";
							echo "<th scope='col'>ID</th>";
							echo "<th scope='col'>Tên sản phẩm</th>";
							echo "<th scope='col'>Số lượng</th>";
							echo "<th scope='col'>Giá</th>";
							echo "<th scope='col'>Thành tiền</th>";
							echo "<th scope='col'>Thao tác</th>";
						echo "</tr>";
					echo "</thead>";

					echo "<tbody>";
						foreach ($_SESSION['cart'] as $code => $product) {
								echo "<tr>";
									echo "<td>".$code."</td>";
									echo "<td>".$product['name']."</td>";
									echo "<td> <a class='btn btn-primary' href='add2cart1.php?code=".$code."'>+</a>".$product['quanlity']."<a class='btn btn-danger' href='delete1.php?code=".$code."'>-</a></td>";
									echo "<td>".number_format($product['price'])."</td>";
									echo "<td>".number_format($product['quanlity']*$product['price'])."</td>";
									echo "<td>
									<a href='detail1.php?code=".$code."'><button type='button' class='btn btn-info'>Detail</button></a>
									<a href='delete1.php?code=".$code."'><button type='button' class='btn btn-danger'>Delete</button></a>

									</td>";
									$sum += $product['quanlity']*$product['price'];
									$dem += $product['quanlity'];

								echo "</tr>";
						}
					echo "</tbody>";

			}
			 ?>

			 <thead class="thead-light">
			    <tr>
			      <th colspan="2">Thành tiền</th>
			      <th>Số lượng = <?= $dem ?></th>
			      <th></th>
			      <th>Tổng = <?=number_format($sum)?> VNĐ</th>
			      <th></th>
			    </tr>
			  </thead>
	</table>
		<a href="index1.php"><button type="button" class="btn btn-outline-primary">Home</button></a>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>