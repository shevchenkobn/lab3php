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
        $tmp_type_pieces = explode('/', $_FILES["avatar"]["type"]);
        $extension = '.'.$tmp_type_pieces[count($tmp_type_pieces) - 1];
        $avatar_name = md5($_SESSION['id']);
        $script_dir = __DIR__ == '/' ? __DIR__ : __DIR__.'/';
        $pattern = $script_dir.'imgs/'.$avatar_name.".*";
        $array = glob($pattern);
        foreach ($array as $filename) {
            unlink($filename);
        }
        move_uploaded_file($tmp_name, "imgs/".md5($_SESSION['id']).$extension);
    }
}
redirect("index.php?page=profile");
?>