<?php 
	$id = $_GET['id'];
	// echo "$id";
	require_once "connection2.php";
	$query = "DELETE FROM users WHERE id=".$id;
	// echo "$query";
	$status = $conn->query($query);
	header('Location: uses.php');
 ?>