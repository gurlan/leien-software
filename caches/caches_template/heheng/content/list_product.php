<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
    <div class="public w1200 fix">
        <?php include template("content","nav"); ?>
        <div class="product public_right rt">
            <ul class="productul fix">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=24fb4ae845dc7de1e5648b5319531c32&action=lists&catid=%24catid&num=9&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $i=1?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li <?php if($i%3==1) { ?>class="one"<?php } ?>>
                    <a href="<?php echo $r['url'];?>">
                        <img src="<?php echo $r['thumb'];?>">
                        <em class="fix">
                            <i></i>
                            <span><?php echo $r['title'];?></span>
                            <i></i>
                        </em>
                        <p><?php echo $r['description'];?></p>
                    </a>
                </li>
                <?php $i++?>
                <?php $n++;}unset($n); ?>
            </ul>
            <div class="link">
                <ul class="fix">
                    <?php echo $pages;?>
                </ul>
            </div>
        </div>
    </div>
<?php include template("content","foot"); ?>