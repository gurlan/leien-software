<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
    <div class="notice">
        <div class="w1200">
            <div class="bd">
                <ul>

                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e1ffe6d184cf512d376ef9df1d222913&action=position&posid=18&order=listorder+ASC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder ASC','limit'=>'6',));}?>

                        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                        <li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
                        <?php $n++;}unset($n); ?>

                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </ul>
            </div>
            <div class="search">
                <form class="fix" method="get" id="form" action="<?php echo APP_PATH;?>index.php?m=search&c=index&a=init&typeid=0&siteid=1&q=" onsubmit="return false">
                    <input type="text" name="q" class="text" placeholder="请输入搜索内容" >
                    <input type="submit" name="" value="搜索" class="submit" id="search">
                    <img src="/statics/heheng/images/sousu.png">
                </form>
            </div>
       </div>
    </div>
<script>

    $('[name=q]').keydown(function(event){
        if(event.keyCode ==13) {

            $('#search').click();
        }
    })
    $('#search').click(function () {

        var q = $('[name=q]').val();

        if(!q){

            alert('请输入关键词');

            return

        }

        var url = $('#form').attr('action');


        url = url+q;


        window.location.href=url;

    })

</script>
    <script type="text/javascript">
        jQuery(".notice").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:5});
    </script>
    <div class="index_scheme w1200">
        <div class="index_schemeTop">
            <h3>解决方案</h3>
            <i></i>
            <p><?php echo $CATEGORYS['17']['sub_title'];?></p>
        </div>
        <div class="index_schemeBom">
            <div class="hd">
                <a class="next"><img src="/statics/heheng/images/fanganz.png"></a>
                <ul></ul>
                <a class="prev"><img src="/statics/heheng/images/fangany.png"></a>
            </div>
            <div class="bd">
                <ul class="picList fix">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e4248587a91cb3b6b545166a545de53c&action=category&catid=17&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'17','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li>
                        <a href="<?php echo $v['url'];?>">
                           <img src="<?php echo $v['image'];?>">
                           <b><?php echo $v['catname'];?></b>
                           <p><?php echo $v['description'];?></p>
                        </a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
         <a href="<?php echo $CATEGORYS['17']['url'];?>" class="more">
             MORE  +
         </a>
        <script type="text/javascript">    
            jQuery(".index_schemeBom").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50});
        </script>
    </div>
    <div class="w1200">
        <div class="index_superiority">
            <div class="w1200">
                <div class="index_superiorityTop">
                    <h3><?php echo $CATEGORYS['151']['catname'];?></h3>
                    <i></i>
                    <p><?php echo $CATEGORYS['151']['sub_title'];?></p>
                </div>
                <div class="index_superiorityBom">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5c8ce5892ad2b61fe7e1a005b51052d4&action=lists&catid=151&num=4&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'151','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'151','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         <li>
                             <a href="javascript:">
                                 <em>
                                     <img src="<?php echo $r['thumb'];?>">
                                     <b><?php echo $r['title'];?></b>
                                 </em>
                             </a>
                         </li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="index_aboutBox">
        <div class="w1200">
            <div class="index_aboutTop">
                <h3><?php echo $CATEGORYS['126']['catname'];?></h3>
                <i></i>
                <p><?php echo $CATEGORYS['126']['sub_title'];?></p>
            </div>
            <div class="index_about">
                <div class="index_aboutleft">
                    <img src="<?php echo $CATEGORYS['126']['image'];?>">
                </div>
                <div class="index_aboutright">
                    <h3>合恒科技(北京)有限公司</h3>
                    <?php echo $CATEGORYS['126']['description'];?>
                </div>
            </div>
            <a href="<?php echo $CATEGORYS['146']['url'];?>" class="more">
                 MORE  +
            </a>
         </div>
    </div>
<?php include template("content","foot"); ?>