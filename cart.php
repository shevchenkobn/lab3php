<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:49
 */
include("./includes/config.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    render("seeCart.php", array("title" => "See cart", "goods" => $goods));
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
                $_SESSION = array();
                session_destroy();
            }
            else
            {
                unset($_SESSION["cart"][intval($_POST["item"])]);
            }
            redirect("cart.php");
        }
    }
}
else
    redirect("index.php");
?>