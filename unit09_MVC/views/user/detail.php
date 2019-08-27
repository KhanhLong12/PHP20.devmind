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
		      <th scope="col">password</th>
		      <th scope="col">email</th>
		      <th scope="col">avatar</th>
		      <th scope="col">created_at</th>	
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><?=$user['id']?></td>
		      <td><?=$user['name']?></td>
		      <td><?=
                 $user['password'];
                // echo md5($str);
                ?></td>
		      <td><?=$user['email']?></td>
		      <td><?=$user['avatar']?></td>
		      <td><?=$user['created_at']?></td>
		    </tr>
		  </tbody>
	</table>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>