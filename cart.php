<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:49
 */
include("./includes/config.php");
session_start();
var_dump($_POST);
var_dump($_SESSION);
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    render("seeCart.php", array("goods" => $goods));
}
elseif ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_GET["action"]))
    {
        if ($_GET["action"] == "delete")
        {
            if ($_POST["submit"] == "all")
            {
                unset($_SESSION["cart"]);
                $_SESSION = array();
                session_destroy();
                redirect("index.php");
            }
            else
            {
                unset($_SESSION["cart"][intval($_POST["submit"])]);
                redirect("cart.php");
            }
        }
    }
}
else
    redirect("index.php");
?>