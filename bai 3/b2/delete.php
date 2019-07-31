<?php 
	session_start();
	unset($_SESSION['id'.$_GET['sv']]);
	header('Location: list.php');

 ?>