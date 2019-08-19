<?php 
    $id = isset($_GET['$id'])?$_GET['$id']:0;
	$id = $_GET['id'];
	require_once "connection2.php";
	$query = "SELECT * FROM users WHERE id=". $id;
	 $result = $conn->query($query);
	 $user = $result->fetch_assoc();
    //  echo "<pre>";
    // print_r($category);
    // echo "</pre>";
    // die();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group Update</h3>
    <h3 align="center">Update New user</h3>
    <hr>
        <form action="user_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control"  id="" value="<?=$user['name']?>" name="name">
                <input type="hidden" value="<?=$user['id']?>" name="id">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="text" class="form-control" value="<?=$user['email']?>" id="" name="email">
            </div>
            <div class="form-group">
                <label for="">avatar</label>
                <img src="images/<?=$user['avatar']?>" width=100px height=100px>
                <input type="file" class="form-control" id="" name="avatar">
            </div>
            <div class="form-group">
                <label for="">created_at</label>
                <input type="text" class="form-control"  id="" value="<?=$user['created_at']?>" name="created_at">
            </div>
            <button class="btn btn-primary" name="submit" type="submit" >update</button>
            <a href="uses.php" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>
</html>