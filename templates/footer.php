<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 17:48
 */
?>
        <div/>
        <footer>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">BogdanVIPshop</a>
                    </div>
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
                        <?php if (isset($_SESSION['id']) || isset($_SESSION['user'])): ?>
                            <li><a href="profile.php">
                                    <span class="glyphicon glyphicon-user"></span> Profile
                                </a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo empty($_SESSION) ? "login.php" : "logout.php"?>">
                                <span class="glyphicon glyphicon-log-<?php echo !empty($_SESSION) ? "out" : "in"?>"></span> <?php
                                    echo empty($_SESSION) ? "Login" : "Logout"?>
                            </a>
                        </li>
                </div>
            </nav>
            <div class="well well-sm text-center"><p>Copyleft Bogdan Shevchenko.</p>
            <p>All rights unreserved.</p></div>
        </footer>
    <body/>
<html/>
