<?php

class Database
{
    protected static $pdo;

    public function __construct()
    {
        self::$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB, USER, PW);
        self::$pdo->query('set names utf8');
    }

    protected function selectQuery($sql, $arr = [])
    {
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    protected function updateQuery($sql, $arr = [])
    {
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }
}