<?php 
	require_once 'connection.php';
	class Category{
		function All(){
			$conn_obj = new Connection();
			$query = "SELECT * FROM categories";
		    //thực thi câu lệnh truy vấn
		    $result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $categories = array();

		    while ($row = $result->fetch_assoc()) {
		        $categories[] = $row;
		    }
		    return $categories;
		}
	}
 ?>