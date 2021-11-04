<?php
include 'functions.php';
$db = include 'database/start.php';

$db->delete('post', $_GET['id']);

header('Location: /index.php');