
<?php 
	$string="Longgnol";
	echo "chuỗi đầu vào: ".$string;
	echo "<br>";
	echo "========><br>";
	if ($string == strrev($string))  
		echo $string. "  là chuỗi palindrome"  ;

	else  
		echo $string." không phải là chuỗi palindrome" ;  

 ?>
