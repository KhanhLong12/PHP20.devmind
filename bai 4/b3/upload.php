<?php 
	if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
        require_once 'upload_file.php';
        $uploads = file_upload("upload","ANH_SP",5000000,array('jpg', 'png'));
       $target_dir = "upload/";  // thư mục chứa file upload

        $target_file = $target_dir . basename($_FILES["ANH_SP"]["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["ANH_SP"]["tmp_name"], $target_file)) { // nếu upload file không có lỗi 
            echo "The file ". basename( $_FILES["ANH_SP"]["name"]). " has been uploaded.";
        } else { // Upload file có lỗi 
            echo "Sorry, there was an error uploading your file.";
        }
        session_start();
        $_SESSION['documents'][] = $uploads;
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 </head>
 <body >
 	<form action="" method="post" enctype="multipart/form-data">
    Chọn file upload
    <input type="file" class="form-control" name="ANH_SP"><br>
    <input type="submit" value="Upload Image" name="submit">
</form>
<a class="btn btn-primary" href="index2.php">HOME</a>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
 </body>
 </html>