<?php 
    require_once "connection.php";
    $slug = $_GET['slug'];
    $query = "SELECT * FROM categories";
    $result = $conn->query($query);
    $categories = array();
    while ($row= $result->fetch_assoc()) {
        $categories[]= $row;
    }

    $query2 = "SELECT * FROM users";
    $result2 = $conn->query($query2);
    $users = array();
    while ($row= $result2->fetch_assoc()) {
        $users[]= $row;
    }


    $query = "SELECT * FROM posts WHERE slug='".$slug."'";
    $post = $conn->query($query)->fetch_assoc();
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
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New Post</h3>
    <hr>
        <form action="post_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">title</label>
                <input value="<?=$post['title']?>" type="text" class="form-control" id="" name="title">
                <input type="hidden" value="<?=$post['id']?>" class="form-control" name="id">
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input value="<?=$post['description']?>" type="text" class="form-control" id="" name="description">
            </div>
            <div class="form-group" method="post" enctype="multipart/form-data">
                <label for="">thumbnail</label>
                <img src="images/<?=$post['thumbnail']?>" width=100px height=100px>
                <input value="<?=$post['thumbnail']?>" type="file" class="form-control" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">content</label>
                <textarea value="<?=$post['content']?>" class="form-control" id="content" name="content" cols="15" rows="15"></textarea> 
            </div>
            <div class="form-group">
                <label for="">user_id</label>
                <select class="form-control" name="user_id">
                    <?php foreach ($users as $user){ ?>
                        <option <?php if ($user['id'] == $post['user_id']) {
                            echo "Selected";
                        } ?> value="<?=$user['id']?>"><?=$user['name']?></option>
                    <?php } ?>        
                </select>
            </div>
            <div class="form-group">
                <label for="">slug</label>
                <input value="<?=$post['slug']?>" type="text" class="form-control" id="" name="slug">
            </div>
            <div class="form-group">
                <label for="">category_id</label>
                <select class="form-control" name="category_id">
                    <?php foreach ($categories as $category) { ?>
                       <option <?php if ($category['id']== $post['category_id']) echo "Selected" ?> value="<?=$category['id']?>"><?=$category['name']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">view_count</label>
                <input value="<?=$post['view_count']?>" type="text" class="form-control" id="" name="view_count">
            </div>
           <div class="form-group">
                <label for="">created_at</label>
                <input value="<?=$post['created_at']?>" type="text" class="form-control" id="" name="created_at">
            </div>
            <button type="submit" value="Upload Image" name="submit" class="btn btn-primary">Save</button>
            <a href="post.php" class="btn btn-primary">Back</a>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>   
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script><script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'content' );
    </script>
    <script>
        $(document).ready(function(){
            var content =CKEDITOR.instances['content'].getData();
           // console.log(content);
            $('textarea#content').val(result.content);
        });
    </script>
    <script type="text/javascript">
    </script>
</body>
</html>