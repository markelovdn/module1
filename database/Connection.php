<?php


class Connection
{
    public static function make() {
        $pdo = new PDO('mysql:host=localhost;dbname=posts;charset=utf8;', 'root','');
        return $pdo;
    }
}