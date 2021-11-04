<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style/bootstrap.min.css" type="text/css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">My blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
        </div>
    </div>
</nav>

<div class="container">
    <div class="col">
        <div class="col-md-8 offset-md-2">
            <a href="/create.php" class="btn btn-success">AddPost</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post):?>
                    <tr>
                        <th><?= $post['id']?></th>
                        <td><a href="/show.php?id=<?= $post['id']?>"><?= $post['title']?></a></td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>
