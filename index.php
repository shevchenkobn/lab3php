<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 17:04
 */
include($_SERVER["DOCUMENT_ROOT"]."/includes/config.php");
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    if (isset($_GET["reload"]) == "mistakes")
    {
        // TODO: bootstrap alert product with mistake
        render("shopping.php", array("title" => "Input mistakes", "goods" => $goods));
    }
    else
        render("shopping.php", array("title" => "Buying products", "goods" => $goods));
}
elseif ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_GET["action"]))
        switch ($_GET["action"])
        {
            case "buy":
                {
                    if (session_status() != PHP_SESSION_ACTIVE)
                    {
                        session_start();
                        $_SESSION["cart"] = array();
                    }
                    foreach ($_POST as $prodInd=>$prodNum) {
                        if (!is_int($prodNum) || $prodNum < 0)
                            redirect("index.php?reload=mistakes&index=$prodInd");
                        if (isset($_SESSION["cart"][$prodInd]))
                            $_SESSION["cart"][$prodInd]["count"] += $prodNum;
                        else
                            $_SESSION["cart"][$prodInd] = array("item" => $goods[$prodInd],
                                "count" => $prodNum);
                    }
                    redirect("cart.php");
                }
                break;
        }
    else
        render("shopping.php", array("title" => "Buying products", "goods" => $goods));
}

?>