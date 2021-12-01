<?php

namespace App\Core;

//desig patter - sigleton
class Model
{
    private static $instance;

    public static function getConn()
    {
        if (!isset(self::$instance)) {
            self::$instance = new \PDO('mysql:host=localhost;dbname=mvc;charset=utf8', 'flavio', 'admin');
        }

        return self::$instance;
    }
}
