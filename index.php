<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 17:04
 */
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    if (isset($_GET["page"]))
        switch ($_GET["page"])
        {
            case "cart":
                render("seeCart.php", array("title" => "See cart", "goods" => $goods));
                break;
            case "shopping":
                render("shopping.php", array("title" => "Buying products", "goods" => $goods));
                break;
            case "logout":
                render("logout_tpl.php", array("title" => "You have logged out"));
                break;
            case "profile":
                render("profile.php", array("title" => "Profile"));
                break;
            default:
                break;
        }
    else
        render("start.php", array("title" => "Wellcome!"));
}
else
    redirect("index.php");

?>