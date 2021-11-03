<?php
function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}

function getAllPosts () {
    $pdo = new PDO('mysql:host=localhost;dbname=posts;charset=utf8;', 'root','');
    $sql = "SELECT * FROM post";
    $statment = $pdo->prepare($sql);
    $statment->execute();
    $posts = $statment->fetchAll(PDO::FETCH_ASSOC);
    return $posts;
}