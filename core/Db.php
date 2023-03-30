<?php

namespace core;

use PDO;

class Db
{
    private static $_db = null;

    public static function getInstance():  null|PDO
    {
        $config_db = require_once CONFIG .'/config_db.php';
        if(self::$_db == null)
            self::$_db = new PDO($config_db['dsn'], $config_db['username'], $config_db['password'],
                array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ));
        return self::$_db;
    }

}