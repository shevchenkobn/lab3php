<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:54
 */
?>
<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <?php if (isset($_SESSION) && isset($_SESSION["cart"])
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
                        <?php foreach ($_SESSION["cart"] as $i=>$product):?>
                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $product["item"]->name?></td>
                                <td><?php echo number_format($product["item"]->price, 2)?></td>
                                <td><?php echo $product["count"]?></td>
                                <td><?php echo number_format(
                                    $product["item"]->price * $product["count"],
                                    2)?></td>
                                <td><button type="submit" value="<?php echo $i?>" class="btn btn-info">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button></td>
                            </tr>
                        <?php endforeach;?>
                    </table>
                    <button type="submit" value="all" class="btn btn-info">Clear</button>
                </form>
            </div>
        <?php else: ?>
            <div class="jumbotron text-center">
                <a href="index.php">
                    <h1>Go to shopping page</h1>
                </a>
                <p>You haven't bought anything</p>
            </div>
        <?php endif; ?>
    </div>
</div>
