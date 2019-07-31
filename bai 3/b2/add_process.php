<?php 


	session_start();
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die;

	 $_SESSION['student']['id' .$_POST['sv']] = array(

	 	'ten' => $_POST['ten'],
	 	'sv' => $_POST['sv'],
		'sdt' => $_POST['sdt'],
	 	'email' => $_POST['email'],
		'n' => $_POST['n'],
		'dc' => $_POST['dc']
	);
	header('Location: list.php');
 ?>