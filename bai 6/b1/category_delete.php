<?php 
	$id = $_GET['id'];
	// echo "$id";
	require_once "connection.php";
	// $query = "DELETE FROM categories WHERE id=".$id;
	// $status = $conn->query($query);
	// header('Location: categories.php');
	$query = 'SELECT * FROM categories WHERE parent_id = '.$id;
	$category_child = $conn->query($query);
	// echo "<pre>";
	// print_r($category_child);
	// echo "</pre>";
	// die();
	$category_childs = array();
	while ($row = $category_child->fetch_assoc()) {
		$category_childs[] = $row;
	}
	foreach ($category_childs as $key => $value) {
		$query = 'DELETE FROM posts WHERE category_id= '.$value['id'].'';
		$query_ = 'DELETE FROM categories WHERE id = '.$value['id'].'';
		$conn->query($query);
		$conn->query($query_);
	}
	$query = 'DELETE FROM posts WHERE category_id= '.$id;
	$query_ = 'DELETE FROM categories WHERE id ='.$id;
	$conn->query($query);
	$conn->query($query_);
	header('location: categories.php');
	setcookie('msg2','Xóa category thành công',time()+2);
 ?>