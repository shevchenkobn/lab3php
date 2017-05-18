<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 18.05.2017
 * Time: 17:08
 */
?>
<?php if (isset($error)): ?>
    <div class="alert alert-danger alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> <?php echo $error ?>
    </div>
<?php endif; ?>
<div class="row">
    <div class="col-bg-6 col-bg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
        <div class="form-group">
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only" for="login">Login:</label>
                    <input type="text" class="form-control" name="login" id="login">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="pwd">Password:</label>
                    <input type="password" class="form-control" name="password" id="pwd">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>