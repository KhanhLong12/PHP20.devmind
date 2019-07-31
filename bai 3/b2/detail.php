<?php 
	session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin</title>
</head>
<body>
	<h1>Thông tin sinh viên</h1>
	<br>
	<ul>
		<li>
			Họ và tên: <?=$_SESSION['id'.$_GET['sv']]['ten']?>
		</li>
		<li>
			Mã sinh viên: <?=$_SESSION['id'.$_GET['sv']]['sv']?>
		</li>
		<li>Số điện thoại: <?=$_SESSION['id'.$_GET['sv']]['sdt']?></li>
		<li>
			email: <?=$_SESSION['id'.$_GET['sv']]['email']?>
		</li>
		<li>
			Giới tính: <?=$_SESSION['id'.$_GET['sv']]['n']?>
		</li>
		<li>
			Địa chỉ: <?=$_SESSION['id'.$_GET['sv']]['dc']?>
		</li>
	</ul>
</body>
</html>