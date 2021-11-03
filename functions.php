<?php

function conectToDb() {
    $pdo = new PDO('mysql:host=localhost;dbname=posts;charset=utf8;', 'root','');
    return $pdo;

}

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}

