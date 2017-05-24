<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 20.05.2017
 * Time: 15:34
 */
include("./includes/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $errors = array();
    $hasChanges = false;
    if ($_FILES["avatar"]["error"] != UPLOAD_ERR_NO_FILE) {
        if (($_FILES["avatar"]["error"] == UPLOAD_ERR_OK))
        {
            $tmp_name = $_FILES["avatar"]["tmp_name"];
            $tmp_type_pieces = explode('/', $_FILES["avatar"]["type"]);
            $extension = '.' . $tmp_type_pieces[count($tmp_type_pieces) - 1];
            $avatar_name = md5($_SESSION['id']);
            $script_dir = __DIR__ == '/' ? __DIR__ : __DIR__ . '/';
            $pattern = $script_dir . 'imgs/' . $avatar_name . ".*";
            $array = glob($pattern);
            foreach ($array as $filename) {
                unlink($filename);
            }
            $filename = "imgs/" . md5($_SESSION['id']) . $extension;
            move_uploaded_file($tmp_name, $filename);
            $_SESSION['user']->avatar_path = $filename;
            $hasChanges = true;
        }
        else
            array_push($errors, "Problem with loading image");
    }
    if ($_POST["name"] !== $_SESSION['user']->name)
    {
        if (strlen($_POST["name"]) < 2)
            array_push($errors, "To short name");
        else
        {
            $_SESSION['user']->name = $_POST["name"];
            $hasChanges = true;
        }
    }
    if ($_POST["surname"] !== $_SESSION['user']->name)
    {
        if (strlen($_POST["surname"]) < 2)
            array_push($errors, "To short surname");
        else
        {
            $_SESSION['user']->surname = $_POST["surname"];
            $hasChanges = true;
        }
    }
    if ($_POST["description"] !== $_SESSION['user']->name)
    {
        if (strlen($_POST["description"]) < 50)
            array_push($errors, "To short description");
        else
        {
            $_SESSION['user']->description = $_POST["description"];
            $hasChanges = true;
        }
    }
    if ($_POST["birthday"] !== $_SESSION['user']->birthday)
    {
        $birthday = explode('-', $_POST["birthday"]);
        if (count($birthday) != 3 || strlen($birthday[0]) != 4
            || strlen($birthday[1]) != 2 || strlen($birthday[2]) != 2)
        {
            array_push($errors, "Wrong birthday format");
        }
        else
        {
            $birthday = new DateTime($_POST['birthday']);
            $today = new DateTime(date("Y-m-d"));
            $interval = $birthday->diff($today);
            if (intval($interval->format('%r%y')) < 16)
                array_push($errors, "You must be more than 16");
            else
            {
                $_SESSION['user']->birthday = $_POST["birthday"];
                $hasChanges = true;
            }
        }
    }
    if (count($errors) == 0)
    {
        if($hasChanges)
        {
            $users[$_SESSION['id']] = $_SESSION['user'];
            update_database_lol($users);
        }
    }
    else
        render("profile.php", array("title" => "Profile input errors", "errors" => $errors));
}
redirect("index.php?page=profile");
?>