<?php 
	$data = $_POST;
	require_once "connection2.php";
	$query = "INSERT INTO users (name,email,password,avatar,created_at) VALUES ('".$data['name']."','".$data['email']."','".$data['password']."','".$data['avatar']."','".$data['created_at']."')";
	$status = $conn->query($query);
	// echo "<pre>";
	// print_r($status);
	// echo "</pre>";
	if ($status == true) {
		header('Location: uses.php');
	} else{
		header('Location: user_add.php');
	}
 ?>