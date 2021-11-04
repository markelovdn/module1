<?php
include 'functions.php';
$db = include 'database/start.php';

$posts = $db->getAll('post');
include 'index_view.php';
