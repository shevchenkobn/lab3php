<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:57
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once("./includes/functions.php");
$goods = include("./includes/products.php");
include("./includes/users.php");
$users = json_decode(file_get_contents(__DIR__."/database_lol.json"));
session_start();
if ((empty($_SESSION) || !isset($_SESSION['id']))
    && !preg_match('%/(login|index)\.php$%', $_SERVER['PHP_SELF']) ) {
    render('mustLogin.php', array('title' => "Login problem :("));
}
?>
