
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
    <h3 align="center">Add New user</h3>
    <hr>
        <form action="user_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" name="name">
            </div>
            <div class="form-group">
                <label for="">email</label>
                <input type="email" class="form-control" id="" name="email">
            </div>
            <div class="form-group" method="post" enctype="multipart/form-data">
                <label for="">avatar</label>
                <input type="file" class="form-control" name="avatar">
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="password" class="form-control" id="" name="password">
            </div>
           <div class="form-group">
                <label for="">created_at</label>
                <input type="text" class="form-control" id="" name="created_at">
            </div>
            <button type="submit" value="Upload Image" name="submit" class="btn btn-primary">Create</button>
            <a href="uses.php" class="btn btn-primary">Back</a>
        </form>
    </div>
    
</body>
</html>