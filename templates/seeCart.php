<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:54
 */
?>
<div class="row">
    <div class="col-bg-8 col-bg-offset-2 col-md-10 col-md-offset-1">
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
                        <?php $total = 0;
                        foreach ($_SESSION["cart"] as $i=>$product):?>
                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $product["item"]->name?></td>
                                <td><?php echo number_format($product["item"]->price, 2)?></td>
                                <td><?php echo $product["count"]?></td>
                                <td><?php $sum = $product["item"]->price * $product["count"];
                                    $total += $sum;
                                    echo number_format($sum, 2); ?></td>
                                <td><button type="submit" name="item" value="<?php echo $i?>" class="btn btn-info">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button></td>
                            </tr>
                        <?php endforeach;?>
                        <tr class="success">
                            <td colspan="4">Total sum:</td>
                            <td><?php echo number_format($total, 2)?></td>
                            <td>
                                <button type="submit" name="item" value="all" class="btn btn-info">Clear</button>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" name="item" value="all" class="btn btn-info">Clear</button>
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
