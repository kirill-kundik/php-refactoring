<?php
/**
 * Created by PhpStorm.
 * User: golia
 * Date: 2/11/2019
 * Time: 3:33 PM
 */

require 'db_helper/DBHandler.php';
require 'vo/Book.php';

class BookDAO
{
    static private $books;

    //Eager loading
    static public function eagerInit()
    {
        //Connecting
        $pdo = DBHandler::connect();

        //Getting Data
        $sqlQuery = "select author, title, year from books";
        foreach ($pdo->query($sqlQuery) as $row) {
            $author = $row["author"];
            $title = $row["title"];
            $year = $row["year"];
            self::$books[] = new Book($author, $title, $year);
        }

        //Disconnecting
        DBHandler::disconnect();
    }

    static public function getBooks()
    {
        return self::$books;
    }

}