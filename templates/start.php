<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 20.05.2017
 * Time: 15:35
 */
?>
<div class="jumbotron text-center">
    <?php if(empty($_SESSION)):?>
        <a href="login.php">
            <h1>Go to login page</h1>
        </a>
        <p>You are not logged in</p>
    <?php else: ?>
        <div class="row">
            <div class="col-sm-4">
                <a href="shopping.php">
                    <h2>Go shopping</h2>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="cart.php">
                    <h2>See cart</h2>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="profile.php">
                    <h2>See profile</h2>
                </a>
            </div>
        </div>
    <?php endif; ?>
</div>
