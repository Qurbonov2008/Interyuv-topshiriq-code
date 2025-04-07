<?php

class Create_table
{
    public $pdo;

    public function __construct($pdo)
    {
        $sql = "CREATE TABLE users(

         id INT PRIMARY KEY AUTO_INCREMENT,
         name VARCHAR(64),
         email VARCHAR(155) UNIQUE NOT NULL
        );
        ";

        try {
            $pdo->exec($sql);
            echo "Muvaffaqiyatli bazaga qo'shildi";
        } catch (PDOException $e) {
            die("Bunday jadval allaqachon bor");
        }
    }
    public function __destruct()
    {
        $this->pdo = null;
        echo "Ulanish yakunlandi";
    }
}

