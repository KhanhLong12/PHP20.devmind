<?php 
	require_once "connection.php";
	$data = $_POST;	
	$id = $data['id'];
	 $target_dir = "images/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
        	$file_name = basename($_FILES["thumbnail"]["name"])
        	
        	$query = "UPDATE categories SET name='".$data['name']."',Parent_id='".$data['parent_id']."',thumbnail='".$file_name."',slug='".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id=".$id;
				$status = $conn->query($query);
				header("Location: categories.php");
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
 ?>