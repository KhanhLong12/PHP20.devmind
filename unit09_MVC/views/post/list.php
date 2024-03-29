<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POST ---</h3>
        <?php
        if (isset($_COOKIE['msg'])) {
            echo "<div class='alert alert-success' role='alert'>".$_COOKIE['msg']."</div>";
        }
        if (isset($_COOKIE['msg1'])) {
            echo "<div class='alert alert-success' role='alert'>".$_COOKIE['msg1']."</div>";
        }
        if (isset($_COOKIE['msg2'])) {
            echo "<div class='alert alert-success' role='alert'>".$_COOKIE['msg2']."</div>";
        }
         ?>
        <a href="post_add.php" class="btn btn-primary">Add New Post</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>title</th>
                <th>description</th>
                <th>thumbnail</th>
                <th>slug</th>
            </thead>
            <?php foreach ($posts as $post){ ?>
                
            
            <tr>
                <td><?=$post['id']?></td>
                <td><?=$post['title']?></td>
                <td><?=$post['description']?></td>
                <td>
                    <img src="images/<?=$post['thumbnail']?>" width="100px" height="100px">
                </td>
                <td>
                    <a href="post_detalt.php?slug=<?=$post['slug']?>" class="btn btn-primary">Detail</a>
                    <a href="post_edit.php?slug=<?=$post['slug']?>" class="btn btn-success">Edit</a>
                    <a href="post_delete.php?id=<?=$post['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>