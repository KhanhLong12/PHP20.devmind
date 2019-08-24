<?php
	require_once "connection.php";
	$id = $_GET['id'];
	$query = "DELETE FROM posts WHERE id=".$id;
	$status = $conn->query($query);
	header('Location: post.php');
	setcookie('msg2','Xóa bài post thành công',time()+2);
 ?>