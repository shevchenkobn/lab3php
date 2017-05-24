<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 16.05.2017
 * Time: 16:39
 */
include("./includes/config.php");
if ($_SERVER["REQUEST_METHOD"] == "GET" && empty($_SESSION))
{
    render("login_tpl.php", array("title" => "Logging in"));
}
elseif ($_SERVER["REQUEST_METHOD"] == "POST")
{
    foreach ($users as $user)
    {
        if ($user->login == $_POST['login'])
            if ($user->password == $_POST['password'])
            {
                $id = array_search($user, $users);
            }
            else
            {
                $error = "Wrong password";
            }
        else
        {
            $error = "Wrong login";
        }
    }
    if (isset($error))
        render("login_tpl.php", array("title" => "Some problems :(", "error" => $error));
    elseif (isset($id)) {
        $_SESSION['id'] = $id;
        $_SESSION['user'] = $users[$id];
        redirect("index.php");
        //TODO: redirect to last page
    }
    else
        redirect("login.php");
}
else
    redirect("index.php");
