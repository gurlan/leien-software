<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="w1200">
    <div class="footer fix">
        <div class="w1200">
            <div class="footer_top">
                <span>友情链接：</span>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=3244aa3eeaa54b0456df16d44fbd5356&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
                <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
                <a href="<?php echo $v['url'];?>"><?php echo $v['name'];?></a>
                <?php $n++;}unset($n); ?>
            </div>
            <div class="footer_main fix">
                <div class="footer_mian1">
                    <img src="<?php echo $config['thumb'];?>">
                </div>
                <div class="footer_mian2">
                    <ul>
                        <li class="fix">
                            <img src="/statics/heheng/images/footer1.png">
                            <p><?php echo $config['tel'];?></p>
                        </li>
                        <li class="fix">
                            <img src="/statics/heheng/images/footer2.png">
                            <p><?php echo $config['QQ'];?></p>
                        </li>
                        <li class="fix">
                            <img src="/statics/heheng/images/footer3.png">
                            <p><?php echo $config['email'];?></p>
                        </li>
                        <li class="fix">
                            <img src="/statics/heheng/images/footer4.png">
                            <p><?php echo $config['addr'];?></p>
                        </li>
                    </ul>
                </div>
                <div class="footer_mian3">
                    <img src="<?php echo $config['qrcode1'];?>">
                    <p>微信公众号</p>
                </div>
            </div>
            <div class="footer_bom">
                <div class="w1200 fix">
                    <p><?php echo $config['bottom'];?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>