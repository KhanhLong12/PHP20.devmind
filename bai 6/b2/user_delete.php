<?php 
	$id = $_GET['id'];
	// echo "$id";
	require_once "connection2.php";
	$query = 'DELETE FROM posts WHERE user_id= '.$id;
	$query_ = "DELETE FROM users WHERE id=".$id;
	// echo "$query";
	$conn->query($query);
	$status = $conn->query($query_);
	header('Location: uses.php');
	setcookie('msg2','Xóa user thành công',time()+2);
 ?>