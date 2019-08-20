<?php 
	require_once "connection.php";
	$slug = $_GET['slug'];
	$query = "SELECT * FROM posts WHERE slug='".$slug."'";
	$post = $conn->query($query)->fetch_assoc();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<h1 style="text-align: center;">Thông tin post</h1>
	<table class="table table-bordered">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">title</th>
		      <th scope="col">description</th>
		      <th scope="col">thumbnail</th>
		      <th scope="col">content</th>
		      <th scope="col">user_id</th>
		      <th scope="col">slug</th>
		      <th scope="col">category_id</th>
		      <th scope="col">view_count</th>
		      <th scope="col">created_at</th>	
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><?=$post['id']?></td>
		      <td><?=$post['title']?></td>
		      <td><?=$post['description']?></td>
		      <td><?=$post['thumbnail']?></td>
		      <td><?=$post['content']?></td>
		      <td><?=$post['user_id']?></td>
		      <td><?=$post['slug']?></td>
		      <td><?=$post['category_id']?></td>
		      <td><?=$post['view_count']?></td>
		      <td><?=$post['created_at']?></td>
		    </tr>
		  </tbody>
	</table>
	<a class="btn btn-primary" href="post.php">Back</a>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>