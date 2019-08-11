<?php 
	session_start();
	$id = $_GET['id'];
	echo "<pre>";
	print_r($id);
	echo "</pre>";
	die();
	unset($_SESSION['documents'][$id]);
	header('Location: index2.php');

 ?>