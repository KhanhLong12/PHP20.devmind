<?php 
session_start();
require_once 'data1.php';
 ?>
<meta charset="utf-8">
<h1 style="text-align: center;">Danh sách sản phẩm</h1>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>b4: Khánh Long</title>
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
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Quanlity</th>
      <th scope="col">Price</th>
      <th scope="col">image</th>
      <th scope="col">act</th>
    </tr>
  </thead>
  <tbody>
    
      <?php foreach ($products as $code => $product){ ?>
      	<tr>
        <td><?= $code ?></td>
        <td><?= $product['name']?></td>
        <td><?= $product['quanlity']?></td>
        <td><?= number_format($product['price'])?></td>
        <td><img width="100px" height="50px" src="images/<?=$product['image']?>"></td>
        <td><a href="add2cart1.php?code=<?=$code ?>"> <button>Add to cart</button></a></td>
    </tr>
      <?php } ?>
    
</table>
<?php 
	$total = 0;
	if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
		foreach ($_SESSION['cart'] as $code) {
			$total += $code['quanlity'];
		}
	}
 ?>

 <div class="alert alert-primary" role="alert">
  Đang có <a href="#" class="alert-link"><?php echo $total; ?></a> sản phẩm trong giỏ.
</div>
	<a href="cart1.php"><button type="button" class="btn btn-primary">Xem giỏ hàng</button></a>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>