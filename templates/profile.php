<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 20.05.2017
 * Time: 15:34
 */
?>
<?php if (isset($errors)): ?>
    <?php foreach ($errors as $error):?>
        <div class="alert alert-danger alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> <?php echo $error ?>
        </div>
    <?php endforeach;?>
<?php endif; ?>
<div class="form-group">
    <form action="profile.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-3">
                <img class="img-thumbnail img-responsive img-center"
                     src="
                     <?php
                        echo isset($_SESSION['user']->avatar_path) ?
                            $_SESSION['user']->avatar_path : 'imgs/noavatar.png';
                     ?>"
                     alt="Your avatar" title="Your avatar">
                        <input type="file" name="avatar" accept="image/*">
        <!--                <label for="selectFile">Change avatar:</label>-->
        <!--                <div class="input-group" id="selectFile">-->
        <!--                    <label class="input-group-btn">-->
        <!--                        <span class="btn btn-primary">-->
        <!--                            Browse&hellip; <input type="file" name="avatar" accept="image/*" style="display: none;">-->
        <!--                        </span>-->
        <!--                    </label>-->
        <!--                    <input type="text" class="form-control" readonly>-->
        <!--                </div>-->
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="name"
                               value="<?php echo $_SESSION['user']->name;?>">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="surname">Surname:</label>
                            <input type="text" class="form-control" name="surname" id="surname"
                               value="<?php echo $_SESSION['user']->surname;?>">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="birthday">Birthday:</label>
                            <input type="date" class="form-control" name="birthday" id="birthday"
                                placeholder="yyyy-mm-dd"
                                value="<?php
                                    echo $_SESSION['user']->birthday;
                                ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="description">Description:</label>
                    </div>
                    <div class="col-sm-9">
                        <textarea name="description" id="description" class="form-control"><?php
                            echo $_SESSION['user']->description; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>
<script>
$(document).ready( function() {
    $(':file').on('fileselect', function (event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }

    })
});
</script>
