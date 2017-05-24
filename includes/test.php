#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 24.05.17
 * Time: 8:07
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set("Europe/Kiev");
$today = new DateTime(date("Y-m-d"));
$birthday = new DateTime("1999-03-05");
echo get_class($birthday);
?>