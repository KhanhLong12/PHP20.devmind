<?php 
	if(isset($_POST['ntb'])) {
		$ten = $_POST['ten'];
		$sv = $_POST['sv'];
		$sdt = $_POST['sdt'];
		$email = $_POST['email'];
		$n = $_POST['n'];
		$dc = $_POST['dc'];
		echo "Họ và tên:".$ten.'<br>';
		echo "Mã sinh viên:".$sv.'<br>';
		echo "số điện thoại:".$sdt.'<br>';
		echo "Email:".$email.'<br>';
		if ($n=="nam") {
			echo "Giới tính: Nam";
		}else if ($n=="nu") {
			echo "Giới tính: Nữ";
		}else{
			echo "Giới tính: Khác";
		}
		echo "<br>";
		echo "Địa chỉ".$dc;
	}
 ?>