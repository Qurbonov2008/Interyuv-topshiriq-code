<?php

require './autoload.php';

// $connection = new Db("localhost" , "2008Ozodbek!@#$" , "user" , "root");

$pdo = $connection->db_connection();


// jadval yaratish uchun class

// $create_table = new Create_table($pdo);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center">
  <h1>Iltimos form to'ldiring</h1>  
  <form action="register.php" method="POST">
    <input type="text" name="username" placeholder="Ism kiiriring">
    <br>
    <input type="text" name="email" placeholder="Email kiriring">
     <button type="text">Yuborish</button>

  </form>
</body>
</html>


