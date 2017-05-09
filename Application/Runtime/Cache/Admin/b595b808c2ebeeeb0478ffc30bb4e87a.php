<?php if (!defined('THINK_PATH')) exit();?>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="/yvanfa/Public/admin/css/pintuer.css">
    <link rel="stylesheet" href="/yvanfa/Public/admin/css/admin.css">
    <script src="/yvanfa/Public/admin/js/jquery.js"></script>
    <script src="/yvanfa/Public/admin/js/layer/layer.js"></script>
    <script src="/yvanfa/Public/admin/js/layer/dialog.js"></script>
    <script src="/yvanfa/Public/admin/js/layer/liyong.js"></script>
    <script src="/yvanfa/Public/admin/js/jq.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">

    <div class="logo margin-big-left fadein-top">
        <?php
 switch ($row['level']) { case 1: echo ' <h1><img src="/yvanfa/Public/admin/images/chaoji.png" class="radius-circle rotate-hover" height="50" alt=""/>后台管理中心</h1>'; break; case 2: echo '<h1><img src="/yvanfa/Public/admin/images/putong.png" class="radius-circle rotate-hover" height="50" alt=""/>后台管理中心</h1>'; break; } ?>
    </div>
    <div class="head-l">
        <a href="<?php echo U('Home/index/index');?>" class="button button-little bg-green" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;
        <a href="javascript:0" id="button" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;
        <button class="button button-little bg-red"  type="buttom" onclick="liyong.loginout()"><span class="icon-power-off"></span>退出登录</button>
    </div>
    <div class="logo margin-big-left fadein-top" style="float:right; margin-right:3%;">
        <h1>欢迎您，<?php echo ($row["username"]); ?></h1>
    </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <!-- 循环栏目 -->
    <?php
 $yy=0; dig($cate,$yy); function dig($cate,$yy){ $yy++; foreach($cate as $key => $val){ if($val['pid']==0){ $ss=0; }else{ $ss=$yy; } ?>
    <!--<?php var_dump($key); ?>-->
    <?php if(($ss == 0) and ($val['state'] == '是') ): if($cate[$key]['erji'] > null ): ?><h2><span class="<?php echo ($val["icon"]); ?>"></span><?php echo ($val["title"]); ?></h2>
            <?php else: ?>
            <div><h2><a href="<?php echo U($val['fangfa']);?>" target="right"><span class="<?php echo ($val["icon"]); ?>"></span><?php echo ($val["title"]); ?></a></h2></div><?php endif; ?>
        <?php else: ?>
        <ul>
            <?php if(is_array($cate)): foreach($cate as $keys=>$v): if(($v['state'] == '是')): ?><li><a href="<?php echo U($v['fangfa']);?>" target="right"><span class="<?php echo ($v["icon"]); ?>"></span><?php echo ($v["title"]); ?></a></li><?php endif; endforeach; endif; ?>
        </ul><?php endif; ?>

    <!--<?php var_dump(); ?>-->
    <?php
 dig($val['erji'],$yy); } } ?>

    <h2><span class="icon-cloud"></span>数据库管理</h2>
    <ul>
        <li><a href="<?php echo U('Database/index',array('type'=>'export'));?>" target="right"><span class="icon-caret-right"></span>备份</a></li>
        <li><a href="<?php echo U('Database/index',array('type'=>'import'));?>" target="right"><span class="icon-caret-right"></span>还原</a></li>
    </ul>

    <!-- 循环栏目结束 -->
    <!--<div><h2><a href="<?php echo U('index/info');?>" target="right"><span class="icon-pencil-square-o"></span>首页</a></h2></div>


    &lt;!&ndash; 基本设置 &ndash;&gt;
    <h2><span class="icon-pencil-square-o"></span>基本设置</h2>
    <ul>
        <li><a href="<?php echo U('Contact/website');?>" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
        <li><a href="<?php echo U('Contact/Contact');?>" target="right"><span class="icon-caret-right"></span>联系我们</a></li>
        <li><a href="<?php echo U('column/column');?>" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>
        <li><a href="<?php echo U('column/cate');?>" target="right"><span class="icon-caret-right"></span>导航菜单</a></li>
        <li><a href="<?php echo U('column/link');?>" target="right"><span class="icon-caret-right"></span>友情管理</a></li>
    </ul>
    &lt;!&ndash; 基本设置结束 &ndash;&gt;

    &lt;!&ndash; 关于我们 &ndash;&gt;
    <h2><span class="icon-pencil-square-o"></span>关于我们</h2>
    <ul>
        <li><a href="<?php echo U('about/about');?>" target="right"><span class="icon-caret-right"></span>关于我们</a></li>
        <li><a href="<?php echo U('about/lists');?>" target="right"><span class="icon-caret-right"></span>列表</a></li>
    </ul>
    &lt;!&ndash; 关于我们结束 &ndash;&gt;

    &lt;!&ndash; 新闻管理 &ndash;&gt;
    <h2><span class="icon-pencil-square-o"></span>新闻管理</h2>
    <ul>
        <li><a href="<?php echo U('news/news');?>" target="right"><span class="icon-caret-right"></span>所有新闻</a></li>
        <li><a href="<?php echo U('news/cate');?>" target="right"><span class="icon-caret-right"></span>新闻分类</a></li>
    </ul>
    &lt;!&ndash; 服务管理结束 &ndash;&gt;
    <h2><span class="icon-pencil-square-o"></span>服务管理</h2>
    <ul>
        <li><a href="<?php echo U('service/service');?>" target="right"><span class="icon-caret-right"></span>所有服务</a></li>
        <li><a href="<?php echo U('service/lists');?>" target="right"><span class="icon-caret-right"></span>列表</a></li>
    </ul>
    &lt;!&ndash; 服务管理结束 &ndash;&gt;
    &lt;!&ndash; 案例管理结束 &ndash;&gt;
    <h2><span class="icon-pencil-square-o"></span>案例管理</h2>
    <ul>
        <li><a href="<?php echo U('case/index');?>" target="right"><span class="icon-caret-right"></span>所有案例</a></li>
        <li><a href="<?php echo U('case/casetype');?>" target="right"><span class="icon-caret-right"></span>案例分类</a></li>
    </ul>
    &lt;!&ndash; 案例管理结束 &ndash;&gt;

    &lt;!&ndash; 账号管理 &ndash;&gt;
    <h2><span class="icon-pencil-square-o"></span>账号管理</h2>
    <ul>
        <li><a href="<?php echo U('user/user');?>" target="right"><span class="icon-caret-right"></span>账号信息</a></li>
        <li><a href="<?php echo U('user/level');?>" target="right"><span class="icon-caret-right"></span>权限管理</a></li>
    </ul>
    &lt;!&ndash; 账号管理结束 &ndash;&gt;

    &lt;!&ndash; 数据库管理 &ndash;&gt;
    <h2><span class="icon-pencil-square-o"></span>数据库管理</h2>
    <ul>
        <li><a href="<?php echo U('Database/index',array('type'=>'export'));?>" target="right"><span class="icon-caret-right"></span>备份</a></li>
        <li><a href="<?php echo U('Database/index',array('type'=>'import'));?>" target="right"><span class="icon-caret-right"></span>还原</a></li>
    </ul>
    &lt;!&ndash;数据库管理结束 &ndash;&gt;

    &lt;!&ndash; 留言板 &ndash;&gt;
    <h2><a href="<?php echo U('message/message');?>" target="right"><span class="icon-pencil-square-o"></span>留言板</a></h2>

    &lt;!&ndash; 留言板 &ndash;&gt;-->
</div>
<script type="text/javascript">

    $(function () {
        $(".leftnav h2").click(function () {
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function () {
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });

    $(function(){
        $('#button').click(function(){
            if(confirm("确认要清除缓存？")) {
                $.post("<?php echo U('Index/clearRuntime');?>",function(){
                    alert("缓存清理成功");
                });
            }else{
                return false;
            }
        });
    });
</script>

<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo U('index/info');?>" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
</div>
</body>
</html>