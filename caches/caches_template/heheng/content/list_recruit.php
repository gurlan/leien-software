<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
    <div class="public w1200 fix">
        <?php include template("content","nav"); ?>
        <div class="recruit public_right rt">
            <ul class="recruitul fix">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ec4be8cf74fbe389855ef705b5306125&action=lists&catid=%24catid&num=9&moreinfo=1&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>

                <li class="fix">
                    <p>招聘职位</p>
                    <span>最低学历</span>
                    <b>工作经验</b>
                    <i>薪资</i>
                    <em>详情</em>
                </li>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li class="fix">
                    <p><?php echo $r['title'];?></p>
                    <span><?php echo $r['xueli'];?></span>
                    <b><?php echo $r['jingyan'];?></b>
                    <i><?php echo $r['xinzi'];?></i>
                    <a href="<?php echo $r['url'];?>">立即查看</a>
                </li>
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