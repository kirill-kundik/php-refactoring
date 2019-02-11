<?php
/**
 * Created by PhpStorm.
 * User: golia
 * Date: 2/11/2019
 * Time: 2:55 PM
 */

// put full path to Smarty.class.php
require('smarty/libs/Smarty.class.php');
require __DIR__ . '/vendor/autoload.php';
require 'BookDAO.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$smarty = new Smarty();

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

BookDAO::eagerInit();
$books=BookDAO::getBooks();

$smarty->assign('title', 'Book catalogue');
$smarty->assign('heading', 'book catalogue');
$smarty->assign('books', $books);
try {
    $smarty->display('index.tpl');
} catch (Exception $e) {
    echo $e;
}
