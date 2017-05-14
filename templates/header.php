<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 17:47
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/script.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title><?= isset($title) ? "BogdanVIPshop: ".htmlspecialchars($title)
                : "BogdanVIPshop"?></title>
    </head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-collapse navbar-fixed-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle"
                                data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">BogdanVIPshop</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href= href="index.php">
                                <span class="glyphicon glyphicon-home"></span> Home
                            </a></li>
                        <li><a href="index.php">
                                <span class="glyphicon glyphicon-menu-hamburger"></span> Products
                            </a></li>
                        <li><a href="cart.php">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Cart
                            </a></li>
                    </ul>
                </nav>
                <div class="jumbotron">
                    <h1><?= isset($title) ? "BogdanVIPshop: ".htmlspecialchars($title)
                            : "BogdanVIPshop"?></h1>
                </div>
            </header>