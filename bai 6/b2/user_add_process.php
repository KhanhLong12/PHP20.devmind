<?php 
	$data = $_POST;
	require_once "connection2.php";
	 $target_dir = "images/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["avatar"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
           $file_name = basename($_FILES["avatar"]["name"]);
           $query = "INSERT INTO users (name,email,password,avatar,created_at) VALUES ('".$data['name']."','".$data['email']."','".md5($data['password'])."','".$file_name."','".$data['created_at']."')";
			$status = $conn->query($query);
	// echo "<pre>";
	// print_r($status);
	// echo "</pre>";
			if ($status == true) {
				header('Location: uses.php');
			} else{
				header('Location: user_add.php');
			}
			setcookie('msg','thêm mới user thành công',time()+2);
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
 ?>