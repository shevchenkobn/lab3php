<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 13.05.17
 * Time: 18:54
 */
?>
<div class="row">
    <div class="col-bg-6 col-bg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
        <div class="table-responsive">
            <form method="post" action="./buyProduct.php?action=buy">
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
                            <td><?php echo $product->name?></td>
                            <td><?php echo $product->description?></td>
                            <td><?php echo number_format($product->price, 2)?></td>
                            <td>
                                <input name="<?php echo $i?>" class="form-control"
                                       title="Number of product to buy" type="number" min="1">
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
                <!-- TODO implement js check with dismissable alerts -->
                <button type="submit" class="btn btn-block btn-primary">Buy!</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('input[type="number"]').tooltip({'trigger': 'focus', 'placement': 'bottom'});
    });
</script>