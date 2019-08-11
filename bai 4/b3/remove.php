<?php 
	session_start();
	$id = $_GET['id'];
	unset($_SESSION['documents'][$id]);
	header('Location: index2.php');

 ?>