<?php 


	session_start();

	$_SESSION['id' .$_GET['sv']] = array(

		'ten' => $_GET['ten'],
		'sv' => $_GET['sv'],
		'sdt' => $_GET['sdt'],
		'email' => $_GET['email'],
		'n' => $_GET['n'],
		'dc' => $_GET['dc']
	);

 ?>