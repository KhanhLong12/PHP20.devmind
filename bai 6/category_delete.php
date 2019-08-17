<?php 
	$id = $_GET['id'];
	// echo "$id";
	require_once "connection.php";
	$query = "DELETE FROM categories WHERE id=".$id;
	// echo "$query";
	$status = $conn->query($query);
	header('Location: categories.php');
 ?>