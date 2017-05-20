<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 20.05.2017
 * Time: 15:05
 */
unset($_SESSION);
session_destroy();
redirect("index.php?page=logout");
?>