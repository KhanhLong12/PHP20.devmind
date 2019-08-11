<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Giỏ hàng</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Quanlity</th>
      <th scope="col">Price</th>
      <th scope="col">Thành tiền</th>
      <th> #</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$sum = 0;
  	$dem = 0;
  	 foreach ($_SESSION['cart'] as $Code => $product){ ?>
  	<tr>
	      <td><?= $Code ?></td>
	      <td><?=$_SESSION['cart'][$Code]['name']?></td>
	      <td><?=$product['quanlity']?></td>
	      <td><?=number_format($product['price'])?> VNĐ</td>
        <td><?=number_format($product['quanlity']*$product['price'])?> VNĐ</td>
	      <td><a href="delete.php?Code=<?= $Code ?>"><button>
        remove</button></a></td>
        <p style="display: none;"><?= $sum += $_SESSION['cart'][$Code]['quanlity']*$_SESSION['cart'][$Code]['price']?></p>
        <p style="display: none;"><?= $dem += $product['quanlity'] ?></p>
    </tr>
  	<?php } ?>
  	<thead class="thead-light">
    <tr>
      <th colspan="2">Thành tiền</th>
      <th>Số lượng = <?= $dem ?></th>
      <th></th>
      <th>Tổng = <?=number_format($sum)?> VNĐ</th>
      <th></th>
    </tr>
  </thead>
  </tbody>
</table>
<a href="index.php"><button type="button" class="btn btn-success">Home</button></a>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>