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
$users = include("./includes/users.php");
if (!preg_match($_SERVER['PHP_SELF'], 'login\.php'))
    render('mustLogin.php', array('title' => "Login problem :("));
else {
    session_start();
    if (!(isset($_SESSION) && isset($_SESSION['id'])
    && key_exists($_SESSION['id'], $users)))
        render('mustLogin.php', array('title' => "Login problem :("));
}
?>
