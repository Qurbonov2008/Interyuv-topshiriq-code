<?php

class SessionUser
{
    public function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public function get($key)
    {
        return   $_SESSION[$key];
    }
    public function destroy()
    {
        session_destroy();
    }
}
