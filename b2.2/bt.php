
<?php 
	$name="Nguyễn Khánh Long";
	$data=explode(" ", $name);
	$ho=$data[0];
	$ten=$data[count($data)-1];
	echo "Họ và Tên: ".$name;
	echo "<br>";
	echo "Họ: $ho<br>";
	echo "Tên đệm: ";
	for ($i=1; $i <= count($data)-2; $i++) { 
		$ten_dem = $data[$i] . " ";
		echo "$ten_dem";
	}echo "<br>";
	echo "Tên: $ten";

 ?>
