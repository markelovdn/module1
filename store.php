<?php
include 'functions.php';
$db = include 'database/start.php';

$db->create('post',[
    'title'=>$_POST['title'],
]);

header('Location: /index.php');