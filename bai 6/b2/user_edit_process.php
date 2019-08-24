<?php 
require_once "connection2.php";
	$data = $_POST;
	$id = $data['id'];
	$target_dir = "images/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["avatar"]["name"]); // link sẽ upload file lên
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
           $file_name = basename($_FILES["avatar"]["name"]);
          	$query = "UPDATE users SET name='".$data['name']."',email='".$data['email']."',avatar='".$file_name."',created_at='".$data['created_at']."' WHERE id=".$id;
        } else { // Upload file có lỗi 
           $query = "UPDATE users SET name='".$data['name']."',email='".$data['email']."',created_at='".$data['created_at']."' WHERE id=".$id;
        }
        $status = $conn->query($query);
			if ($status == true) {
				header('Location: uses.php');
			} else{
				header('Location: user_add.php');
			}
			 setcookie('msg1','Chỉnh sửa user thành công',time()+2);
 ?>