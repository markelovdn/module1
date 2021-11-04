<?php
include 'functions.php';
$db = include 'database/start.php';

$id = $_GET['id'];
$post = $db->getOne('post', $id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/bootstrap.min.css" type="text/css">
    <title>Edit post</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="update.php?id=<?=$post['id']?>" method="post">
                <div class="form-group">
                    <lable for="">Post title</lable>
                    <input type="text" class="form-control" name="title" value="<?=$post['title']?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Edit Post</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>