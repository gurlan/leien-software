<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="public_nav le">
    <ul>
        <li><em><b><?php echo $CATEGORYS[$cat]['catname'];?> </b>/ <?php echo $CATEGORYS[$cat]['catdir'];?></em></li>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c489431d286edfa71f289f12a4097ad&action=category&catid=%24cat&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
        <li <?php if($k==$catid) { ?> class="on"<?php } ?>>
        <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
        </li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>