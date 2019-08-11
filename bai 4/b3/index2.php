<?php 
	session_start();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Khánh Long</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<br>
 	<a href="upload.php"><button class="btn btn-success">UpLoad Document</button></a>
 	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">id</th>
	      <th scope="col">Name</th>
	      <th scope="col">Downloads</th>
	      <th scope="col">act</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($_SESSION['documents'] as $id => $value){ ?>
	  		<tr>
		      <td><?= $id ?></td>
		      <td><?=$_SESSION['documents'][$id]['name']?></td>
		      <td><a class="btn btn-success" href="">Download</a></td>
		      <td><a class="btn btn-danger" href="remove.php?id = <?= $id ?>">Remove</a></td>
		    </tr>
	  	<?php } ?>
	  </tbody>
	</table>



 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>