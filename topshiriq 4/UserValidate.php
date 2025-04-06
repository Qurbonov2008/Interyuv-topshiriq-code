<?php

require './autoload.php';

// class UserValidate
// // {
// //     public $username;
// //     public $email;
// //     public $errors = [];
// //     public function __construct($username, $email)
// //     {
// //         $this->username = htmlspecialchars(trim($_POST['username']));
// //         $this->email = htmlspecialchars(trim($_POST['email']));
// //     }
// //     public function validate($pdo)
// //     {
// //         if (empty($this->username)) {
// //             $this->errors =  "Username bo'sh bo'lishi mumkin emas";
// //         } elseif (strlen($this->username) < 3) {
// //             $this->errors = "Username 3 ta belgidan kam bo'lmasligi kerak";
// //         }
// //         if (empty($this->password)) {
// //             $this->errors = "Parol bo'l bo'lishi mumkin emas";
// //         } elseif (!filter_var($this->email , FILTER_SANITIZE_EMAIL)) {
// //             $this->errors = "Iltimos email kiritig";
// //         }

// //         return empty($this->errors);
// //     }

// //     public function get_Errors()
// //     {
// //         return $this->errors;
// //     }
// //     public function get_Username()
// //     {
// //         return $this->username;
// //     }

// //     public function create_users($pdo)
// //     {
// //         try{
// //             $sql = "INSERT INTO users(name , email) VALUES (? , ?)";
// //             $stmt = $pdo->prepare($sql);
// //             $stmt->execute([
// //                 'username' => $this->username,
// //                 'email' => $this->email,
// //             ]);
// //             echo "Foydalanuvchi muvvafaqiyatli qo'shildi";
// //         }catch(PDOException $e)
// //         {
// //             die("Xatolik yuz berdi " . $e->getMessage());
// //         }
// //     }
// }
