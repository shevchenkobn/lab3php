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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="<?php echo dirname($_SERVER["PHP_SELF"])?>/css/styles.css">
        <script src="<?php echo dirname($_SERVER["PHP_SELF"])?>/js/script.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title><?php echo isset($title) ? "BogdanVIPshop: ".htmlspecialchars($title)
                : "BogdanVIPshop"?></title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">BogdanVIPshop</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">
                                    <span class="glyphicon glyphicon-home"></span> Home
                                </a></li>
                            <li><a href="index.php">
                                    <span class="glyphicon glyphicon-menu-hamburger"></span> Products
                                </a></li>
                            <li><a href="cart.php">
                                    <span class="glyphicon glyphicon-shopping-cart"></span> Cart
                                </a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (isset($_SESSION)): ?>
                            <li><p class="navbar-text">
                            <?php if(isset($_SESSION["user"]))
                                echo "Hello, ".$_SESSION['user']->name."!";
                            else
                                echo "Hello!";
                            ?>
                            </p></li>
                                <?php if (isset($_SESSION['id']) || isset($_SESSION['user'])): ?>
                                <li><a href="cart.php">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Cart
                                    </a></li>
                                <?php endif; ?>
                            <?php endif; ?>
                            <li><a href="<?php echo !isset($_SESSION) ? "login.php" : "logout.php"?>">
                                <span class="glyphicon glyphicon-log-
                                    <?php echo !isset($_SESSION) ? "out" : "in"?>
                                "></span> <?php
                                    echo !isset($_SESSION) ? "Login" : "Logout"?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="jumbotron">
                <h1 class="text-center"><?php echo isset($title) ? "BogdanVIPshop: ".htmlspecialchars($title)
                        : "BogdanVIPshop"?></h1>
            </div>
        </header>
        <div class="container">
