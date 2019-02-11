<?php
/**
 * Created by PhpStorm.
 * User: golia
 * Date: 2/11/2019
 * Time: 3:17 PM
 */

class Book {
    private $author;
    private $title;
    private $year;

    function __construct($author, $title, $year) {
        $this->author=$author;
        $this->title=$title;
        $this->year=$year;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getYear()
    {
        return $this->year;
    }

}