<?php 
	$data = $_POST;
	require_once "connection.php";
	 $target_dir = "images/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
        	$file_name =  basename($_FILES["thumbnail"]["name"]);
        	if ($data['parent_id'] != 0) {
        		 $query = "INSERT INTO categories (name,parent_id,thumbnail,slug,description,created_at) VALUES ('".$data['name']."','".$data['parent_id']."','".$file_name."','".$data['slug']."','".$data['description']."','".$data['created_at']."')";	
        	}else{
        		 $query = "INSERT INTO categories (name,thumbnail,slug,description,created_at) VALUES ('".$data['name']."','".$file_name."','".$data['slug']."','".$data['description']."','".$data['created_at']."')";
        	}
			$status = $conn->query($query);
			// echo "<pre>";
			// print_r($status);
			// echo "</pre>";
			if ($status == true) {
				header('Location: categories.php');
			} else{
				header('Location: category_add.php');
			}
			setcookie('msg','thêm mới category thành công',time()+2);
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
 ?>