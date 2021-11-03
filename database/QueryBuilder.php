<?php


class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getAll () {
        $sql = "SELECT * FROM post";
        $statment = $this->pdo->prepare($sql);
        $statment->execute();
        $posts = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
    }
}