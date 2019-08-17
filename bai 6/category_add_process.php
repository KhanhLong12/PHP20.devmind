<?php 
	$data = $_POST;
	require_once "connection.php";
	$query = "INSERT INTO categories (name,parent_id,thumbnail,slug,description,created_at) VALUES ('".$data['name']."','".$data['parent_id']."','".$data['thumbnail']."','".$data['slug']."','".$data['description']."','".$data['created_at']."')";
	$status = $conn->query($query);
	// echo "<pre>";
	// print_r($status);
	// echo "</pre>";
	if ($status == true) {
		header('Location: categories.php');
	} else{
		header('Location: category_add.php');
	}
 ?>