<?php

class Database extends PDO
{
    public function __construct()
    {
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        parent::__construct('mysql:host=localhost;dbname=itandeg5_faq;charset=utf8', 'itandeg5', 'php23net', $opt);
    }
}

