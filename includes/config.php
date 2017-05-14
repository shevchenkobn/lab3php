<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:57
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once($_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']."/includes/functions.php");
$goods = include($_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']."/includes/products.php");
?>
