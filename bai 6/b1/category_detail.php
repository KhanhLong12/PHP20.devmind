<?php 
 require_once "connection.php";
	$slug = $_GET['slug'];
	 $query = "SELECT * FROM categories WHERE slug='".$slug."'";
	 $result = $conn->query($query);
	 $category = $result->fetch_assoc();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<h1 style="text-align: center;">Thông tin bài viết</h1>
	<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">name</th>
		      <th scope="col">parent_id</th>
		      <th scope="col">thumbnail</th>
		      <th scope="col">slug</th>
		      <th scope="col">description</th>
		      <th scope="col">created_at</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><?=$category['id']?></td>
		      <td><?=$category['name']?></td>
		      <td><?=$category['parent_id']?></td>
		      <td><?=$category['thumbnail']?></td>
		      <td><?=$category['slug']?></td>
		      <td><?=$category['description']?></td>
		      <td><?=$category['created_at']?></td>
		    </tr>
		  </tbody>
	</table>
	<a class="btn btn-primary" href="categories.php">Back</a>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>