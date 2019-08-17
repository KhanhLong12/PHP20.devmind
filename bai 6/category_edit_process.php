<?php 
	$data = $_POST;
	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";
	// die();
	$id = $data['id'];
	require_once "connection.php";
	$query = "UPDATE categories SET name='".$data['name']."',Parent_id='".$data['parent_id']."',thumbnail='".$data['thumbnail']."',slug='".$data['slug']."',description='".$data['description']."' WHERE id=".$id;
	$status = $conn->query($query);
	header("Location: categories.php");
 ?>