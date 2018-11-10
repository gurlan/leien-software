<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
    <div class="public w1200 fix">
        <?php include template("content","nav"); ?>
        <div class="case public_right rt">
            <em class="fix">
                <i></i>
                <b><?php echo $title;?></b>
                <i></i>
            </em>
            <p><?php echo $content;?></p>
        </div>
    </div>
<?php include template("content","foot"); ?>