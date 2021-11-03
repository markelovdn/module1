<?php
include 'functions.php';
include 'database/QueryBuilder.php';

$pdo = conectToDb();

$db = new QueryBuilder($pdo);

$posts = $db->getAll();
include 'index_view.php';
