<?php 
	require_once 'data.php';
	session_start();
 ?>
<!DOCTYPE html>

<html>
<head>
	<title>danh sách sản phẩm</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Quanlity</th>
      <th scope="col">Price</th>
      <th scope="col">image</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  	<?php
     foreach ($products as $Code => $product){?>
  	<tr>
	      <td><?= $Code ?></td>
	      <td><?= $product['name']?></td>
	      <td><?= $product['quanlity']?></td>
	      <td><?= number_format($product['price'])?></td>
        <td><img width="100px" height="50px" src="images/<?=$product['image']?>"></td>
	      <td><a href="add2cart.php?Code=<?=$Code ?>"><button>add</button></a></td>
    </tr>
  	<?php } ?>
  </tbody>
</table>
<a href="giohang2.php"><button type="button" class="btn btn-success">view cart</button></a>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>