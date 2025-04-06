<?php

// class Db
// {

//     public $username;
//     public $password;
//     public $localhost;
//     public $dbname;
//     public $pdo;
//     public function __construct($locahost, $password, $dbname, $username)
//     {
//         $this->username = $username;
//         $this->password = $password;
//         $this->localhost = $locahost;
//         $this->dbname = $dbname;
//     }
//     public function db_connection()
//     {
//         try {
//             $this->pdo = new PDO("mysql:host={$this->localhost}; dbname={$this->dbname}", $this->username, $this->password);
//             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             // echo "Muvvafaqiyatli ulandi";
//             return $this->pdo;
//         } catch (PDOException $e) {
//             die("Xatolik yuz berdi " . $e->getMessage());
//         }
//     }
// }
