<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 20.05.2017
 * Time: 15:05
 */
include("./includes/config.php");
unset($_SESSION['id']);
unset($_SESSION['user']);
session_destroy();
redirect("index.php?page=logout");
?>