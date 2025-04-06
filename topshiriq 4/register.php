<?php
require './autoload.php';

if($_SERVER['REQUEST_METHOD'] === "POST")
{
    $username = $_POST['username'];
    $email  = $_POST['email'];

    // $create_users = new UserValidate($username , $email);
    $session_user = new SessionUser();
    
    if($create_users->validate($pdo))
    {
        $create_users->create_users($pdo);
        $session_user->set("username" , $username);
        $session_user->destroy();

    }else{
        $create_users->get_Errors();
    }
}