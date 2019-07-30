<?php 
	$arr = array(1,4,2,6,9,100,45,8,20);
	$max=$arr[0];
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	for ($i=0; $i < count($arr) ; $i++) { 
		if ($arr[$i]>$max) {
			$max=$arr[$i];
		}
	}
	echo "Giá trị lớn nhất của mảng là: ".$max;

?>
