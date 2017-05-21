<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 20.05.2017
 * Time: 15:05
 */
include("./includes/config.php");
session_unset();
session_destroy();
redirect("index.php?page=logout");
?>