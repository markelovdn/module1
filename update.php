<?php
include 'functions.php';
$db = include 'database/start.php';

$db->update('post',[
    'title'=>$_POST['title']
], $_GET['id']);

header('Location: /index.php');
