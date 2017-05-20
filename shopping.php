<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 18.05.2017
 * Time: 16:43
 */
include("./includes/config.php");
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    if (isset($_GET["reload"]) == "mistakes")
    {
        // TODO: bootstrap alert product with mistake
        render("shopping.php", array("title" => "Input mistakes", "goods" => $goods));
    }
    else
        redirect("index.php?page=shopping");
}
elseif ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_GET["action"]))
        switch ($_GET["action"])
        {
            case "buy":
            {
                session_start();
                if (!isset($_SESSION["cart"]))
                {
                    $_SESSION["cart"] = array();
                }
                foreach ($_POST as $prodInd=>$prodNum) {
                    if ($prodNum == '')
                        continue;
                    if (!is_numeric($prodNum) || ($prodNum = intval($prodNum)) < 0)
                        redirect("shopping.php?reload=mistakes&index=$prodInd");
                    if ($prodNum == 0)
                        continue;
                    $prodInd = intval($prodInd);
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
        redirect("index.php?page=shopping");
}
else
    redirect("index.php");
?>