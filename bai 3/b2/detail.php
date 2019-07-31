<?php 
	session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h1>Thông tin sinh viên</h1>
	<br>
	<ul>
		<li>
			Họ và tên: <?=$_SESSION['student']['id'.$_GET['sv']]['ten']?>
		</li>
		<li>
			Mã sinh viên: <?=$_SESSION['student']['id'.$_GET['sv']]['sv']?>
		</li>
		<li>Số điện thoại: <?=$_SESSION['student']['id'.$_GET['sv']]['sdt']?></li>
		<li>
			email: <?=$_SESSION['student']['id'.$_GET['sv']]['email']?>
		</li>
		<li>
			Giới tính: <?=$_SESSION['student']['id'.$_GET['sv']]['n']?>
		</li>
		<li>
			Địa chỉ: <?=$_SESSION['student']['id'.$_GET['sv']]['dc']?>
		</li>
	</ul>
	<br>
	<a href="list.php"><button type="button" class="btn btn-info">Back</button></a>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>