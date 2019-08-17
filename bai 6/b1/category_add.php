

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
    <h3 align="center">Add New Category</h3>
    <hr>
        <form action="category_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" name="name">
            </div>
            <div class="form-group">
                <label for="">thumbnail</label>
                <input type="text" class="form-control" id="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">slug</label>
                <input type="text" class="form-control" id="" name="slug">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" name="description">
            </div>
           <div class="form-group">
                <label for="">created_at</label>
                <input type="text" class="form-control" id="" name="created_at">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="categories.php" class="btn btn-primary">Back</a>
        </form>
    </div>
</body>
</html>