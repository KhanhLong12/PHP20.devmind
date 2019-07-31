<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>list</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<h1>Danh sách sinh viên</h1>
	<a href="form.php"><button type="button" class="btn btn-success">Thêm mới</button></a>
	<p></p>
	<br>
	<table class="table">
  <thead class="thead-dark">
    <tr>
    	<th>Mã sinh viên</th>
		<th>Họ tên</th>
		<th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    		<?php foreach ($_SESSION['student'] as $key => $value): ?>
			<tr>
				<td><?=$_SESSION['student'][$key]['sv']?></td>
				<td><?=$_SESSION['student'][$key]['ten']?></td>
				<td>
					<a href="detail.php?sv=<?=$_SESSION['student'][$key]['sv']?>"><button type="btn" class="btn btn-success">Detail</button></a>
					<a href="delete.php?sv=<?=$_SESSION['student'][$key]['sv']?>"><button type="btn2" class="btn btn-danger">Delete</button></a>
				</td>
			</tr>
		<?php endforeach ?>
    </tr>
  </tbody>
</table>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>