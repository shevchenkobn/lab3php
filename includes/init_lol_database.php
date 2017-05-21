#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 21.05.17
 * Time: 11:15
 */

$users = include("users.php");
$file = fopen(__DIR__."/database_lol.json", 'w');
fwrite($file, json_encode($users));
fclose($file);
echo "Success!\n";
?>