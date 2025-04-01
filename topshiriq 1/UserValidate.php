<?php

class UserValidate
{
    public $username;
    public $password;
    public $errors = [];

    public function __construct($username, $password)
    {
        $this->username = htmlspecialchars(trim($_POST['username'] ?? ''));
        $this->password = htmlspecialchars(trim($_POST['password'] ?? ''));
    }

    public function validate()
    {
        if (empty($this->username)) {
            $this->errors[] = "Username bo'sh bo'lmasligi kerak<br>";
        } elseif (strlen($this->username) < 3) {
            $this->errors[] = "Username kamida 3 ta belgidan ko'p bo'lish kerak<br>";
        }
        if (empty($this->password)) {
            $this->errors[] = "Parol bo'sh bo'lmasligi kerak<br>";
        } elseif (strlen($this->password) < 6) {
            $this->errors[] = "Parol kamida 6 ta belgidan ko'p bolishi kerak<br>";
        }

        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }
    public function get_Username()
    {
        return $this->username;
    }
}
