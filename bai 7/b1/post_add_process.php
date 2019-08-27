<?php 
	require_once "connection.php";
	$data = $_POST;
	$target_dir = "images/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            $file_name = basename($_FILES["thumbnail"]["name"]);
            $query = "INSERT INTO posts (title,description,thumbnail,content,user_id,slug,category_id,view_count,created_at) VALUES ('".$data['title']."','".$data['description']."','".$file_name."','".$data['content']."','".$data['user_id']."','".$data['slug']."','".$data['category_id']."','".$data['view_count']."','".$data['created_at']."')";
				$status = $conn->query($query);
				echo "$query";
				if ($status == true) {
					header("Location: post.php");
				} else{
					echo "error";
				}
				setcookie('msg','thêm mới bài post thành công',time()+2);
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
 ?>