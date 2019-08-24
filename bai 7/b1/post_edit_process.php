<?php 
	require_once "connection.php";
	$data = $_POST;
	$id = $data['id'];
	$target_dir = "images/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            $file_name = basename($_FILES["thumbnail"]["name"]);
            $query = "UPDATE posts SET title='".$data['title']."',description='".$data['description']."',thumbnail='".$file_name."',content='".$data['content']."',user_id='".$data['user_id']."',slug='".$data['slug']."',category_id='".$data['category_id']."',view_count='".$data['view_count']."',created_at='".$data['created_at']."' WHERE id=".$id;
        } else { // Upload file có lỗi 
           $query = "UPDATE posts SET title='".$data['title']."',description='".$data['description']."',content='".$data['content']."',user_id='".$data['user_id']."',slug='".$data['slug']."',category_id='".$data['category_id']."',view_count='".$data['view_count']."',created_at='".$data['created_at']."' WHERE id=".$id;
        }
        $status = $conn->query($query);
				if ($status == true) {
					header('Location: post.php');
					}else{
						echo "error";
					}
					setcookie('msg1','Chỉnh sửa bài post thành công',time()+2);
 ?>