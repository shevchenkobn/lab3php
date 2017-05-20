<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 20.05.2017
 * Time: 15:34
 */
include("./includes/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["avatar"]))
{
    if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["avatar"]["tmp_name"];
        move_uploaded_file($tmp_name, "imgs/".$_SESSION['id']);
    }
}
//redirect("index.php?page=profile");
?>