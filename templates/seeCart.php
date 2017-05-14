<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:54
 */
?>
<div class="row">
    <div class="col-xs-2"></div>
    <div class="col-xs-8">
        <? if (session_status() == PHP_SESSION_ACTIVE && isset($_SESSION["cart"])
         && count($_SESSION["cart"]) > 0): ?>
            <div class="table-responsive">
                <form method="POST" action="cart.php?action=delete">
                    <table class="table table-striped table-hover">
                        <tr class="info">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Count</th>
                            <th>Sum</th>
                            <th></th>
                        </tr>
                        <? foreach ($_SESSION["cart"] as $i=>$product):?>
                            <tr>
                                <td><?= $i?></td>
                                <td><?= $product["item"]->name?></td>
                                <td><?= number_format($product["item"]->price, 2)?></td>
                                <td><?= $product["count"]?></td>
                                <td><?= number_format(
                                    $product["item"]->price * $product["count"],
                                    2)?></td>
                                <td><button type="submit" value="<?= $i?>" class="btn-info">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                    <button type="submit" value="all" class="btn-info">Clear</button>
                </form>
            </div>
        <? else: ?>
            <div class="jumbotron">
                <a href="index.php" role="button" class="btn btn-primary">
                    <h1>Go to shopping page</h1>
                </a>
                <p>You haven't bought anything</p>
            </div>
        <? endif; ?>
    </div>
    <div class="col-xs-2"></div>
</div>
