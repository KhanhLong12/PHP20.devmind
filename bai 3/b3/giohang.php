<?php 
session_start();
require_once 'list.php';
 ?>
<meta charset="utf-8">
<h1 style="text-align: center;">Danh sách sản phẩm</h1>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>b3: Khánh Long</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
  <?php 
    if (isset($_COOKIE['msg'])) {
     echo "<div class='alert alert-success' role='alert'>".$_COOKIE['msg'].
              "</div>";
    }
   ?>
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
      		<td><?=number_format($product[$key]['price'])?></td>
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

 <div class="alert alert-primary" role="alert">
  Đang có <a href="#" class="alert-link"><?php echo $total; ?></a> sản phẩm trong giỏ.
</div>
	<a href="viewcart.php"><button type="button" class="btn btn-primary">Xem giỏ hàng</button></a>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>