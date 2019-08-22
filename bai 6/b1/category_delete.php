<?php 
	$id = $_GET['id'];
	// echo "$id";
	require_once "connection.php";
	$query = "DELETE FROM categories WHERE id=".$id;
	$status = $conn->query($query);
	header('Location: categories.php');
 ?>