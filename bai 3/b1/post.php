<?php 
	if(isset($_POST['ntb'])) {
		$ten = $_POST['ten'];
		$sv = $_POST['sv'];
		$sdt = $_POST['sdt'];
		$email = $_POST['email'];
		$n = $_POST['n'];
		$dc = $_POST['dc'];
		echo "Họ và tên: ".$ten.'<br>';
		echo "Mã sinh viên: ".$sv.'<br>';
		echo "số điện thoại: ".$sdt.'<br>';
		echo "Email: ".$email.'<br>';
		if ($n=="nam") {
			echo "Giới tính: Nam";
		}else if ($n=="nu") {
			echo "Giới tính: Nữ";
		}else{
			echo "Giới tính: Khác";
		}
		echo "<br>";
		echo "Địa chỉ: ".$dc;
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Post</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body>
 	<br>
 	<br>
 	<a href="form.php"><button type="button" class="btn btn-info">Back</button></a>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>