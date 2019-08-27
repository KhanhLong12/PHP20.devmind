<?php 
	require 'connection.php';
	class Post {
		function All(){
			$conn_obj = new Connection();
			$query = "SELECT * FROM posts";
		    //thực thi câu lệnh truy vấn
		    $result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $posts = array();

		    while ($row = $result->fetch_assoc()) {
		        $posts[] = $row;
		    }
		    return $posts;
		}
		
	}
 ?>