<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
<div class="public w1200 fix">
    <div class="public_nav le">
        <ul>
            <li><em><b>搜索结果 </b>/ SEARCH</em></li>

        </ul>
    </div>
    <div class="news public_right rt">

        <ul class="newsul fix">
            <?php $n=1; if(is_array($datas)) foreach($datas AS $i => $r) { ?>
            <li>
                <a href="<?php echo $r['url'];?>">
                    <div class="news_left le">
                        <img src="<?php echo $r['thumb'];?>">
                    </div>
                    <div class="news_right rt">
                        <h3><?php echo $r['title'];?></h3>
                        <p>
                            <?php echo $r['description'];?>
                        </p>
                        <i><?php echo date("Y-m-d  H:i",$r[inputtime]);?></i>
                    </div>
                </a>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(empty($datas)) { ?>未找到结果<?php } ?>
        </ul>
        <div class="link">
            <ul class="fix">
                <?php echo $pages;?>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_history.js"></script>
<?php if($setting['suggestenable']) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
<?php } ?>
<?php include template("content","foot"); ?>