<?php
/**
 * Created by PhpStorm.
 * User: Богдан
 * Date: 20.05.2017
 * Time: 15:34
 */
?>
<div class="row">
    <div class="col-sm-3">
        <img class="img-thumbnail img-responsive"
             src="<?php $dirPath = $_SERVER["DOCUMENT_ROOT"]."/imgs/";
                echo file_exists($dirPath.$_SESSION["id"]) ? $dirPath.$_SESSION["id"] : $dirPath."noavatar.png"?>"
             alt="Your avatar" title="Your avatar">
    </div>
    <div class="form-group">
        <form action="profile.php" method="post">
            <label class="sr-only" for="selectFile">Change avatar:</label>
            <div class="input-group" id="selectFile">
                <label class="input-group-btn">
                        <span class="btn btn-primary">
                            Browse&hellip; <input type="file" name="avatar" accept="image/*" style="display: none;">
                        </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
    <div class="col-sm-9">
        <div class="row">
            <div class="col-sm-3">
                <p>Name:</p>
            </div>
            <div class="col-sm-9">
                <div class="well well-sm"><?php echo $_SESSION['user']->name; ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p>Description:</p>
            </div>
            <div class="col-sm-9">
                <div class="well well-sm"><?php echo $_SESSION['user']->description; ?></div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready( function() {
    $(':file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
</script>
