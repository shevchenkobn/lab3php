<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:33
 */
function redirect($destination)
{
    if (preg_match("/^https?:\/\//", $destination))
    {
        header("Location: " . $destination);
    }
    else if (preg_match("/^\//", $destination))
    {
        $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
        $host = $_SERVER["HTTP_HOST"];
        header("Location: $protocol://$host$destination");
    }
    else
    {
        $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
        $host = $_SERVER["HTTP_HOST"];
        $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
        header("Location: $protocol://$host$path/$destination");
    }
    exit;
}

function render($template, $values = array())
{
    if (file_exists("./templates/$template"))
    {
        extract($values);
        require("./templates/header.php");
        $templatePath = "./templates/$template";
        require($templatePath);
        require("./templates/footer.php");
    }
    else
    {
        trigger_error("Invalid template: $template", E_USER_ERROR);
    }
    exit;
}


function update_database_lol($users)
{
    include("user.php");
    $file = fopen(__DIR__."/database_lol.json", 'w');
    fwrite($file, json_encode($users));
    fclose($file);
}
