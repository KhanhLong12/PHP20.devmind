<?php 
	session_start();
	unset($_SESSION['student']['id'.$_GET['sv']]);
	header('Location: list.php');

 ?>