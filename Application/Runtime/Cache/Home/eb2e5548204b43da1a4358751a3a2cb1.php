<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <title>联系我们</title>
    <meta charset="UTF-8">
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<link rel="stylesheet" href="/yvanfa/Public/Home/css/common.css">
<link rel="stylesheet" href="/yvanfa/Public/Home/css/style.css">
<script src="/yvanfa/Public/Home/js/jquery-1.8.3.min.js"></script>
    <style>
        .contact_text {font-size:18px; line-height:40px;}
    </style>
</head>

<body>
<div class="wk">
    <!--        头部公共部分star-->
    <div class="head_top_wk">
    <div class="head_top_con">
        <p class="head_top_l left"><?php echo ($fi["welcome"]); ?></p>
        <!--<p class="head_top_l left">源发通风公司网站欢迎您!</p>-->
        <div class="head_top_r right">
            <a href="">收藏本站</a>
            <span>|</span>
            <a href="<?php echo U('Contact/contact');?>">联系我们</a>
            <span>|</span>
            <a href="<?php echo U('contact/contact#baidumap');?>">网站地图</a>
            <span>|</span>
            <a href="">在线留言</a>
        </div>
    </div>
</div>
<div class="head_infor_wk">
    <div class="head_infor_con">
        <div class="head_infor_logo left">
            <a href="" class="logo left">
                <img src="/yvanfa/Public/Uploads/<?php echo ($fi["web_logo"]); ?>" alt="">
            </a>
            <!--<a href="" class="logo left">-->
                <!--<img src="/yvanfa/Public/Home/images/logo.png" alt="">-->
            <!--</a>-->
            <div class="head_infor_txt left">
                <h2><?php echo ($fi["keyword"]); ?></h2>
                <p><?php echo ($fi["web_miaoshu"]); ?></p>
                <!--<h2>源发通风 争做第一</h2>-->
                <!--<p>真诚为客户服务 产品质量优质有保证</p>-->
            </div>
            <div class="clear"></div>
        </div>
        <div class="head_infor_tel">
            <p>全国服务热线:</p>
            <span><?php echo ($finds["hotline"]); ?></span>
            <!--<p>全国服务热线:</p>-->
            <!--<span>400-0000-000</span>-->
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--        导航-->
<div class="nav_wk">
    <div class="nav_con">
        <!--循环导航-->
        <?php if(is_array($cat)): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['state'] == '是'): ?><a href="<?php echo U($vo['fangfa']);?>" ><?php echo ($vo["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <!--循环导航结束-->
        <!--<a href="<?php echo U('Index/index');?>" class="nav_hover">首页</a>-->
        <!--<a href="<?php echo U('About/about');?>">关于我们</a>-->
        <!--<a href="">资质荣誉</a>-->
        <!--<a href="<?php echo U('News/news');?>">新闻中心</a>-->
        <!--<a href="<?php echo U('Cases/cases');?>">工程案例</a>-->
        <!--<a href="">联系我们</a>-->
        <!--<div class="clear"></div>-->
    </div>
</div>

    <!--        头部公共部分end-->
    <!--           内页横幅star-->
    <div class="ny_banner" style="background:url('/yvanfa/Public/Home/images/banner.jpg') no-repeat center center"></div>

    <!--           内页横幅end-->
    <!--        首页产品区域star-->
    <div class="pro_wk">
        <div class="pro_content">
            <div class="pro_con_l left">
                <div class="pro_con_title">
                    <h4>联系我们</h4>
                    <p>About Us</p>
                    <i></i>
                </div>
                <div class="pro_con_list">
                    <div class="news_list_1">
                        <div class="list_title">
                            <p><a href="">联系我们</a></p>
                        </div>
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pro_con_r right">
                <div class="pro_con_r_title">
                    <p class="left">联系我们</p>
                    <span class="left">About Us</span>
                    <a href="" class="right"></a>
                    <div class="clear"></div>
                </div>
                <div class="news_details">
                    <div class="contact_l left">
                        <div class="news_details">
                            <!--
                                                            <div class="details_title">
                                                                <h4>2016年我国工业发展前景：智能制造将迎来黄金期</h4>
                                                                <p>发布来源：创智科技 发布时间：2014-03-15</p>
                                                            </div>
                            -->

                            <!--<?php echo htmlspecialchars_decode($data['content']); ?>-->

                            <div class="details_txt">
                                <div class="contact">
                                    <div class="contact_text">
                                        <p class="left">
                                            公司名称：
                                        </p>
                                            <span class="left">
                                                <?php echo ($finds["title"]); ?>
                                            </span>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="contact_text">
                                        <p class="left">
                                            联&nbsp;系&nbsp;&nbsp;人：
                                        </p>
                                            <span class="left">
                                                <?php echo ($finds["name"]); ?>
                                            </span>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="contact_text">
                                        <p class="left">
                                            公司电话：
                                        </p>
                                            <span class="left">
                                                <?php echo ($finds["telephone"]); ?>
                                            </span>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="contact_text">
                                        <p class="left">
                                            公司地址：
                                        </p>
                                            <span class="left">
                                                <?php echo ($finds["address"]); ?>
                                            </span>
                                        <div class="clear"></div>
                                    </div>
                                    <!--<div class="contact_text">-->
                                        <!--<p class="left">-->
                                            <!--公司名称：-->
                                        <!--</p>-->
                                            <!--<span class="left">-->
                                                <!--源发通风公司-->
                                            <!--</span>-->
                                        <!--<div class="clear"></div>-->
                                    <!--</div>-->
                                    <!--<div class="contact_text">-->
                                        <!--<p class="left">-->
                                            <!--联系人：-->
                                        <!--</p>-->
                                            <!--<span class="left">-->
                                                <!--123456789-->
                                            <!--</span>-->
                                        <!--<div class="clear"></div>-->
                                    <!--</div>-->
                                    <!--<div class="contact_text">-->
                                        <!--<p class="left">-->
                                            <!--公司电话：-->
                                        <!--</p>-->
                                            <!--<span class="left">-->
                                                <!--123456789-->
                                            <!--</span>-->
                                        <!--<div class="clear"></div>-->
                                    <!--</div>-->
                                    <!--<div class="contact_text">-->
                                        <!--<p class="left">-->
                                            <!--公司地址：-->
                                        <!--</p>-->
                                            <!--<span class="left">-->
                                                <!--广东省东莞市南城区xxxxxx-->
                                            <!--</span>-->
                                        <!--<div class="clear"></div>-->
                                    <!--</div>-->

                                </div>
                            </div>
                            <div class="map" style="margin-top:2%;" id="baidumap">
                                <div style="width:100%; height: 490px; font-size:12px" id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

        </div>
    </div>
    <!--        首页产品区域end-->
    <!--        底部公共部分star-->
    <!--         底部导航star-->
<div class="nav_wk">
    <div class="nav_con">
        <!--循环导航-->
        <?php if(is_array($cat)): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['state'] == '是'): ?><a href="<?php echo U($vo['fangfa']);?>" ><?php echo ($vo["title"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <!--循环导航结束-->
        <!--<a href="index.php" class="nav_hover">首页</a>-->
        <!--<a href="about.php">关于我们</a>-->
        <!--<a href="product_list.php">产品中心</a>-->
        <!--<a href="news_list.php">新闻中心</a>-->
        <!--<a href="">资质荣誉</a>-->
        <!--<a href="customer_case.php">客户案例</a>-->
        <!--<a href="">人才招聘</a>-->
        <!--<a href="">客户服务</a>-->
        <!--<a href="">联系我们</a>-->
        <!--<div class="clear"></div>-->
    </div>
</div>
<!--         底部导航end-->
<!--        底部star-->
<div class="footer_wk">
    <div class="footer_con">
        <a href="" class="footer_logo left">
            <img src="/yvanfa/Public/Uploads/<?php echo ($fi["web_logo"]); ?>" alt="">
        </a>
        <!--<a href="" class="footer_logo left">-->
            <!--<img src="/yvanfa/Public/Home/images/f_logo.png" alt="">-->
        <!--</a>-->
        <div class="footer_r left">
            <p>地址：<?php echo ($finds["address"]); ?></p>
            <p>手机：<?php echo ($finds["phone"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电话：<?php echo ($finds["telephone"]); ?></p>
            <p><?php echo ($findss[0]); ?>
                <a href=""><?php echo ($findss[1]); ?></a>
            </p>
            <!--<p>地址:东莞市南城区鸿福路</p>-->
            <!--<p>手机:15906000000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电话:15906000000</p>-->
            <!--<p>Copyright © 2014源发通风 版权所有-->
                <!--<a href="">技术支持:维登科技</a>-->
            <!--</p>-->
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--        底部end-->
<!--   返回顶部-->
<div id="goTopBtn"></div>

    <!--        底部公共部分end-->
</div>

<script src="/yvanfa/Public/Home/js/common.js"></script>
<script type="text/javascript" src="http://api.map.baidu.cn/api?v=2.0&ak=O62zG79hRl1FGwx8BO3jWTmmPaAuz7Ye"></script>
<script src="/yvanfa/Public/home/js/baidumap.js"></script>

</body>

</html>