<?php
include 'functions.php';
$db = include 'database/start.php';

$post = $db->getOne('post', '1');

$posts = $db->getAll('post');
include 'index_view.php';
