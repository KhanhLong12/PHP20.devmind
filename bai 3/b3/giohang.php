<?php 
session_start();
require_once 'list.php';
 ?>
<meta charset="utf-8">
<h3>Danh sách sản phẩm</h3>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach ($product as $key => $value): ?>
      	<tr>
      		<td><?=$product[$key]['id']?></td>
      		<td><?=$product[$key]['name']?></td>
      		<td><?=$product[$key]['price']?></td>
      		<td><a href="add.php?id=<?=$product[$key]['id']?>"><button type="button" class="btn btn-success">Add to cart</button></td></a>
      	</tr>
      <?php endforeach ?>
    </tr>
</table>
<?php 
	$total = 0;
	if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
		foreach ($_SESSION['cart'] as $list) {
			$total += $list['số lượng'];
		}
	}
 ?>
	<p>Đang có <?php echo $total; ?> sản phẩm trong giỏ</p>
	<a href="viewcart.php"><button type="button" class="btn btn-primary">Xem giỏ hàng</button></a>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>