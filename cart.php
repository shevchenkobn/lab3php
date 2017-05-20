<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:49
 */
include("./includes/config.php");
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    redirect("index.php?page=cart");
}
elseif ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_GET["action"]))
    {
        if ($_GET["action"] == "delete")
        {
            if ($_POST["item"] == "all")
            {
                unset($_SESSION["cart"]);
            }
            else
            {
                unset($_SESSION["cart"][intval($_POST["item"])]);
            }
            redirect("index.php?page=cart");
        }
    }
}
else
    redirect("index.php");
?>