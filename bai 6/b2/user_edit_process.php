<?php 
	$data = $_POST;
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";
	// die();
	$id = $data['id'];
	require_once "connection2.php";
	$query = "UPDATE users SET name='".$data['name']."',email='".$data['email']."',avatar='".$data['avatar']."',created_at='".$data['created_at']."' WHERE id=".$id;
	$status = $conn->query($query);
	header("Location: uses.php");
 ?>