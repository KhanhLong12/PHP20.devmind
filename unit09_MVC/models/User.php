<?php
	require_once 'connection.php'; 
	class user{
		function All(){
			$conn_obj = new Connection();
			$query = "SELECT * FROM users";
		    //thực thi câu lệnh truy vấn
		    $result = $conn_obj->conn->query($query);
		    //tạo mảng lưu dữ liệu
		    $users = array();

		    while ($row = $result->fetch_assoc()) {
		        $users[] = $row;
		    }
		    return $users;
		}
		function view($id){
			$conn_obj = new Connection();
			$query = "SELECT * FROM users WHERE id=".$id;
		    $user = $conn_obj->conn->query($query)->fetch_assoc();
		    return $user;
		}
	}
 ?>