<?php 

	session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>bài 2: Khánh Long</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<h1>Form đăng ký</h1>
	<form id="form1" action="add_process.php" method="GET" role="form">
		<div class="chung">
			<p>Họ và tên :</p>
			<input type="text" name="ten" placeholder="Nhập họ tên" class="name text">
			<span class="name-err"></span>
		</div>
		<div class="chung">
			<p>Mã sinh viên :</p>
			<input type="text" name="sv" placeholder="Nhập mã sinh viên" class="masv text">
			<span class="sv-err"></span>
		</div>
		<div class="chung">
			<p>Số điện thoại :</p>
			<input type="text" name="sdt" placeholder="Nhập số điện thoại" class="Sdt text">
			<span class="phone-err"></span>
		</div>
		<div class="chung">
		    <p>Email</p>
		    <input type="email" name="email" class="email1 text" placeholder="Nhập email" >
		    <span class="email-err"></span>
		</div>
		<div class="chung">
			<p>Giới tính :</p>
			<input type="radio" name="n" value="Nam" checked="checked">Nam
			<input type="radio" name="n" value="Nữ">Nữ
			<input type="radio" name="n" value="Khác">Khác
		</div>
		<div class="chung">
			<p>Đia chỉ :</p>
			<input type="text" name="dc" placeholder="Nhập địa chỉ " class="DC text">
			<span class="dc-err"></span>
		</div>
		  <button type="ntb" name="ntb" class="btc btn btn-primary">Lưu thông tin</button>
		  <button type="reset" class="btn btn-danger">Xóa tất cả</button>
	</form>



	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>