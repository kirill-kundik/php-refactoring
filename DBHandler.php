<?php
/**
 * Created by PhpStorm.
 * User: golia
 * Date: 2/11/2019
 * Time: 3:22 PM
 */

class DBHandler
{
    private static $conn = null;

    static function connect()
    {
        self::$conn = new PDO("mysql:host=" . $_ENV['DB_HOST'] . ";charset=utf8;" . "dbname=" . $_ENV['DB_NAME'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$conn;
    }

    public static function disconnect()
    {
        self::$conn = null;
    }

}