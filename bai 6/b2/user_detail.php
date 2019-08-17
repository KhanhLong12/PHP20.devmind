<?php 
$id = isset($_GET['$id'])?$_GET['$id']:0;
	$id = $_GET['id'];
	// echo "$id";
	 require_once "connection2.php";
	 $query = "SELECT * FROM users WHERE id=".$id;
	 // echo "$query";
	 $result = $conn->query($query);
	 $user = $result->fetch_assoc();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<h1 style="text-align: center;">Thông tin người dùng</h1>
	<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">name</th>
		      <th scope="col">email</th>
		      <th scope="col">avatar</th>
		      <th scope="col">created_at</th>	
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><?=$user['id']?></td>
		      <td><?=$user['name']?></td>
		      <td><?=$user['email']?></td>
		      <td><?=$user['avatar']?></td>
		      <td><?=$user['created_at']?></td>
		    </tr>
		  </tbody>
	</table>
	<a class="btn btn-primary" href="uses.php">Back</a>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>