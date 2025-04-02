<?php

require_once  './SessionManager.php';
require_once './UserValidate.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $validator = new UserValidate($username, $password);

    $session = new SessionManager();
    if ($validator->validate()) {
        $session->set("username", $username);

        echo "Muvaffaqiyatli ro'yxatdan o'tdingiz\n";
        echo "Sizning ismingiz " . $validator->get_Username();
        $session->destroy();
    } else {
         foreach($validator->getErrors() as $error)
         {
            echo $error;
         }
    }
}
