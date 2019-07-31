<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>list</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h1>Danh sách sinh viên</h1>
	<a href="form.php"><button type="button" class="btn btn-success">Thêm mới</button></a>
	<br>
	<table>
		<tr>
			<th>Mã sinh viên</th>
			<th>Họ tên</th>
			<th>Action</th>
		</tr>
		<?php foreach ($_SESSION as $key => $value): ?>
			<tr>
				<td><?=$_SESSION[$key]['sv']?></td>
				<td><?=$_SESSION[$key]['ten']?></td>
				<td>
					<a href="detail.php?sv=<?=$_SESSION[$key]['sv']?>"><button type="btn" class="btn btn-success">Detail</button></a>
					<a href="delete.php?sv=<?=$_SESSION[$key]['sv']?>"><button type="btn2" class="btn btn-danger">Delete</button></a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>