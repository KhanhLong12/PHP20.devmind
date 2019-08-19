<?php 
    $id = isset($_GET['$id'])?$_GET['$id']:0;
	$id = $_GET['id'];

	require_once "connection.php";
	$query = "SELECT * FROM categories WHERE parent_id is NULL";
    $result = $conn->query($query);
    $categories = array();
    while ($row= $result->fetch_assoc()) {
        $categories[]= $row;
    }

    $query_2 = "SELECT * FROM categories WHERE id=".$id;
	 $result2 = $conn->query($query_2);
	 $category = $result2->fetch_assoc();
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
    <h3 align="center">Update Category</h3>
    <hr>
        <form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control"  id="" value="<?=$category['name']?>" name="name">
                <input type="hidden" value="<?=$category['id']?>" name="id">
            </div>
            <div class="form-group">
                 <label for="">parent category</label>
                 <select class="form-control" id="" name="parent_id">
                    <option value="0">danh mục cha</option>
                <?php foreach ($categories as $cate){ ?>
                    <option <?php if ($cate['id']== $category['parent_id']) echo "Selected" ?> value="<?=$category['id']?>"><?=$category['name']?></option>
                <?php } ?>
            </select>
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <img src="images/<?=$category['thumbnail']?>" width=100px height=100px>
                <input type="file" class="form-control" id="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" value="<?=$category['slug']?>" id="" name="slug">
            </div>
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