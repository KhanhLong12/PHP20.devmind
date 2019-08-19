<?php  
    require_once "connection2.php";
    //câu lệnh truy vấn
    $query = "SELECT * FROM users";
    //thực thi câu lệnh truy vấn
    $result = $conn->query($query);
    //tạo mảng lưu dữ liệu
    $users = array();

    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- user ---</h3>
        <a href="user_add.php" class="btn btn-primary">Add New users</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>password</th>
                <th>avatar</th>
                <th>created_at</th>
            </thead>
            <?php foreach ($users as $item){ ?>
            <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['name']?></td>
                <td><?=$item['email']?></td>
                <td><?=
                $str = $item['password'];
                echo md5($str);
                ?></td>
                <td>
                    <img src="images/<?=$item['avatar']?>" width="100px" height="100px">
                </td>
                <td>
                    <a href="user_detail.php?id=<?=$item['id']?>" class="btn btn-primary">Detail</a>
                    <a href="user_edit.php?id=<?=$item['id']?>" class="btn btn-success">Edit</a>
                    <a href="user_delete.php?id=<?=$item['id']?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>