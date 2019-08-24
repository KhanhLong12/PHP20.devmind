<?php 
	require_once "connection.php";
	$data = $_POST;	
	$id = $data['id'];
	   $target_dir = "images/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
        	$file_name = basename($_FILES["thumbnail"]["name"]);
        	if ($data['parent_id'] != 0) {
                $query = "UPDATE categories SET name='".$data['name']."',Parent_id='".$data['parent_id']."',thumbnail='".$file_name."',slug='".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id=".$id;
            } else{
                $query = "UPDATE categories SET name='".$data['name']."',thumbnail='".$file_name."',slug='".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id=".$id;
            }
        } else { // Upload file có lỗi 
           if ($data['parent_id'] != 0) {
                $query = "UPDATE categories SET name='".$data['name']."',Parent_id='".$data['parent_id']."',slug='".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id=".$id;
            } else{
                $query = "UPDATE categories SET name='".$data['name']."',slug='".$data['slug']."',description='".$data['description']."',created_at='".$data['created_at']."' WHERE id=".$id;
            }
        }
        $status = $conn->query($query);
        if ($status == true) {
                header("Location: categories.php");
            }else{
                echo "error";
            }
            setcookie('msg1','Chỉnh sửa category thành công',time()+2);
 ?>