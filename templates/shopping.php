<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:54
 */
?>
<div class="row">
    <div class="col-xs-3"></div>
    <div class="col-xs-6">
        <div class="table-responsive">
            <form method="POST" action="index.php?action=buy">
                <table class="table table-striped table-hover">
                    <tr class="info">
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <span class="glyphicon glyphicon-usd"></span>
                        </th>
                    </tr>
                    <?php foreach ($goods as $i=>$product):?>
                        <tr>
                            <td><?= $product->name?></td>
                            <td><?= $product->description?></td>
                            <td><?= number_format($product->price, 2)?></td>
                            <td>
                                <a href="#" data-toggle="tooltip" data-placement="bottom"
                                   title="Number of product to buy">
                                    <input name="<?=$i?>" class="form-control"
                                           title="Number of product to buy" type="number" min="0">
                                </a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
                <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="col-xs-3"></div>
</div>