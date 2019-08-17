<?php 
    $id = isset($_GET['$id'])?$_GET['$id']:0;
	$id = $_GET['id'];
	require_once "connection.php";
	$query = "SELECT * FROM categories WHERE id=". $id;
	 $result = $conn->query($query);
	 $category = $result->fetch_assoc();
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
    <h3 align="center">Update New Category</h3>
    <hr>
        <form action="category_edit_process.php" method="POST" role="form">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control"  id="" value="<?=$category['name']?>" name="name">
            </div>
            <div class="form-group">
                <label for="">Parent_id</label>
                <input type="number" class="form-control" value="<?=$category['parent_id']?>" id="" name="parent_id">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="text" class="form-control" value="<?=$category['thumbnail']?>" id="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" value="<?=$category['slug']?>" id="" name="slug">
            </div>
                <input type="hidden" value="<?=$category['id']?>" name="id">
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control"  id="" value="<?=$category['description']?>" name="description">
            </div>
            <div class="form-group">
                <label for="">created_at</label>
                <input type="text" class="form-control"  id="" value="<?=$category['created_at']?>" name="created_at">
            </div>
            <button class="btn btn-primary" name="submit" type="submit" >update</button>
            <a href="categories.php" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>
</html>