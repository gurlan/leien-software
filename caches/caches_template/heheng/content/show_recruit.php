<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
    <div class="public w1200 fix">
        <?php include template("content","nav"); ?>
        <div class="recruitxq public_right rt">
            <h3>网络安全工程师</h3>
            <b>最低学历：<span><?php echo $xueli;?></span></b>
            <b>招聘人数：<span><?php echo $renshu;?></span></b>
            <b>工作经验：<span><?php echo $jingyan;?></span></b>
            <b>薪资：<span><?php echo $xinzi;?></span></b>
            <strong>职位描述：</strong>
               <p><?php echo $content;?></p>
            <i>* 有意者请将简历发送至<?php echo $email;?></i>
        </div>
    </div>
<?php include template("content","foot"); ?>