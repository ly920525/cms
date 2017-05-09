<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="/yvanfa/Public/Home/css/common.css">
    <link rel="stylesheet" href="/yvanfa/Public/Home/css/style.css">
    <script src="/yvanfa/Public/Home/js/jquery-1.8.3.min.js"></script>
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
    <!--   横幅star-->
    <div class="slider" id="slider">
        <div class="slider-inner">

            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['state'] == '是'): ?><div class="item">
                        <img class="img" style="background:url('/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>')">
                    </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>

            <!--<div class="item">-->
                <!--<img class="img" style="background:url('/yvanfa/Public/Home/images/banner.jpg')">-->
            <!--</div>-->
            <!--<div class="item">-->
                <!--<img class="img" style="background:url('/yvanfa/Public/Home/images/banner.jpg')">-->
            <!--</div>-->
            <!--<div class="item">-->
                <!--<img class="img" style="background:url('/yvanfa/Public/Home/images/banner.jpg')">-->
            <!--</div>-->
        </div>
    </div>
    <!--   横幅end-->
    <!--        首页产品区域star-->
    <div class="pro_wk">
        <div class="pro_content">
            <div class="pro_con_l left">
                <div class="pro_con_title">
                    <h4>产品中心</h4>
                    <p>Product Center</p>
                    <i></i>
                </div>
                <div class="pro_con_list">
                    <!--循环列表标题-->
                    <?php if(is_array($cata)): $i = 0; $__LIST__ = $cata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pro_list_1">
                            <?php if($vo['pid'] == 0): ?><div class="list_title">
                                    <p><?php echo ($vo["title"]); ?></p>
                                </div><?php endif; ?>
                            <?php if($vo['erji'] > null ): if($key == 0 ): ?><ul style="display:block;">
                                        <?php if(is_array($cata[$key]['erji'])): foreach($cata[$key]['erji'] as $keys=>$v): ?><li class="">
                                                <a href="<?php echo U('Index/index',array('issuer'=>$v['id']));?>"><?php echo ($v["title"]); ?></a>
                                            </li><?php endforeach; endif; ?>
                                    </ul>
                                    <?php else: ?>
                                    <ul>
                                        <?php if(is_array($cata[$key]['erji'])): foreach($cata[$key]['erji'] as $keys=>$v): ?><li class="">
                                                <a href="<?php echo U('Index/index',array('issuer'=>$v['id']));?>"><?php echo ($v["title"]); ?></a>
                                            </li><?php endforeach; endif; ?>
                                    </ul><?php endif; endif; ?>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--循环列表标题结束-->
                    <!--<div class="pro_list_1">-->
                        <!--<div class="list_title">-->
                            <!--<p>产品名称1</p>-->
                        <!--</div>-->
                        <!--<ul style="display:block;">-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                    <!--<div class="pro_list_1">-->
                        <!--<div class="list_title">-->
                            <!--<p>产品名称2</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                    <!--<div class="pro_list_1">-->
                        <!--<div class="list_title">-->
                            <!--<p>产品名称3</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                    <!--<div class="pro_list_1">-->
                        <!--<div class="list_title">-->
                            <!--<p>产品名称4</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                    <!--<div class="pro_list_1">-->
                        <!--<div class="list_title">-->
                            <!--<p>产品名称5</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                    <!--<div class="pro_list_1">-->
                        <!--<div class="list_title">-->
                            <!--<p>产品名称6</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                    <!--<div class="pro_list_1">-->
                        <!--<div class="list_title">-->
                            <!--<p>产品名称7</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                    <!--<div class="pro_list_1">-->
                        <!--<div class="list_title">-->
                            <!--<p>产品名称8</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                    <!--<div class="pro_list_1">-->
                        <!--<div class="list_title">-->
                            <!--<p>产品名称9</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                            <!--<li><a href="">二级分类产品名称</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="pro_con_r right">
                <div class="pro_con_r_title">
                    <p class="left">推荐产品</p>
                    <span class="left">Recommended products</span>
                    <a href="" class="right"></a>
                    <div class="clear"></div>
                </div>
                <div class="pro_con_r_show">
                    <ul>
                        <!--循环图片-->
                        <?php if(is_array($listss)): $i = 0; $__LIST__ = $listss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo U('Product/product_details','id='.$v['id']);?>">
                                    <div class="pro_img_wk"><img src="/yvanfa/Public/Uploads/<?php echo ($v["img"]); ?>" alt=""></div>
                                    <p><?php echo ($v["title"]); ?></p>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--循环图片结束-->
                        <!--<li>-->
                            <!--<a href="product_details.php">-->
                                <!--<div class="pro_img_wk"><img src="/yvanfa/Public/Home/images/pro.jpg" alt=""></div>-->
                                <!--<p>产品名称</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="product_details.php">-->
                                <!--<div class="pro_img_wk"><img src="/yvanfa/Public/Home/images/pro.jpg" alt=""></div>-->
                                <!--<p>产品名称</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="product_details.php">-->
                                <!--<div class="pro_img_wk"><img src="/yvanfa/Public/Home/images/pro.jpg" alt=""></div>-->
                                <!--<p>产品名称</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<div class="pro_img_wk"><img src="/yvanfa/Public/Home/images/pro.jpg" alt=""></div>-->
                                <!--<p>产品名称</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<div class="pro_img_wk"><img src="/yvanfa/Public/Home/images/pro.jpg" alt=""></div>-->
                                <!--<p>产品名称</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<div class="pro_img_wk"><img src="/yvanfa/Public/Home/images/pro.jpg" alt=""></div>-->
                                <!--<p>产品名称</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<div class="pro_img_wk"><img src="/yvanfa/Public/Home/images/pro.jpg" alt=""></div>-->
                                <!--<p>产品名称</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<div class="pro_img_wk"><img src="/yvanfa/Public/Home/images/pro.jpg" alt=""></div>-->
                                <!--<p>产品名称</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<div class="pro_img_wk"><img src="/yvanfa/Public/Home/images/pro.jpg" alt=""></div>-->
                                <!--<p>产品名称</p>-->
                            <!--</a>-->
                        <!--</li>-->
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--        首页产品区域end-->
    <!--   广告区域star-->
    <div class="adver" style="background:url('/yvanfa/Public/Home/images/gg.jpg') no-repeat center center;"></div>
    <!--    广告区域end-->
    <!--   优势star-->
    <div class="advantage">
        <div class="advantage_top">
            <h5>源发通风<i>四大优势</i></h5>
            <p>真诚为客户服务,产品质量优质有保证</p>
        </div>
        <div class="advantage_bot">
            <ul>
                <?php if(is_array($sele)): $i = 0; $__LIST__ = $sele;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="" class="block" data-scroll-reveal="enter top over 1s after 0.3s">
                        <p class="block block-1x block-orange" data-scroll-reveal="enter left"><?php echo ($vo["title"]); ?></p>
                        <span class="block block-1x block-orange" data-scroll-reveal="enter left"><?php echo ($vo["describe"]); ?></span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <!--<li>-->
                    <!--<img src="/yvanfa/Public/Home/images/a1.png" alt="" class="block" data-scroll-reveal="enter top over 1s after 0.3s">-->
                    <!--<p class="block block-1x block-orange" data-scroll-reveal="enter left">优势标题</p>-->
                    <!--<span class="block block-1x block-orange" data-scroll-reveal="enter left">产品质量优质有保证<br />真诚为客户服务</span>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="/yvanfa/Public/Home/images/a2.png" alt="" class="block" data-scroll-reveal="enter top over 1s after 0.5s">-->
                    <!--<p class="block block-1x block-orange" data-scroll-reveal="enter left">优势标题</p>-->
                    <!--<span class="block block-1x block-orange" data-scroll-reveal="enter left">产品质量优质有保证<br />真诚为客户服务</span>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="/yvanfa/Public/Home/images/a3.png" alt="" class="block" data-scroll-reveal="enter top over 1s after 0.7s">-->
                    <!--<p class="block block-1x block-orange" data-scroll-reveal="enter left">优势标题</p>-->
                    <!--<span class="block block-1x block-orange" data-scroll-reveal="enter left">产品质量优质有保证<br />真诚为客户服务</span>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<img src="/yvanfa/Public/Home/images/a4.png" alt="" class="block" data-scroll-reveal="enter top over 1s after 0.9s">-->
                    <!--<p class="block block-1x block-orange" data-scroll-reveal="enter left">优势标题</p>-->
                    <!--<span class="block block-1x block-orange" data-scroll-reveal="enter left">产品质量优质有保证<br />真诚为客户服务</span>-->
                <!--</li>-->
                <div class="clear"></div>
            </ul>
        </div>
    </div>
    <!--   优势end-->
    <!--        源发实力图片区域star-->
    <div class="strength_wk">
        <div class="strength_con">
            <div class="strength_top">
                <?php if(is_array($selec)): $k = 0; $__LIST__ = $selec;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k == 1): ?><div class="strength_top_l left">
                            <img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="" class="block" data-scroll-reveal="enter left">
                        </div>
                        <?php elseif(($k > 1) and ($k < 4)): ?>
                        <div class="strength_top_r right">
                            <?php if($k == 2): ?><img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="" class="img1 block" data-scroll-reveal="enter top over 0.5s and move 200px after 0.5s">
                                <?php elseif($k == 3): ?>
                                <img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="" class="img2 block" data-scroll-reveal="enter top over 0.8s and move 200px after 0.7s"><?php endif; ?>
                        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </div>
            <div class="strength_bot">
                <?php if(is_array($selec)): $key = 0; $__LIST__ = $selec;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key; if($key == 4): ?><img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.3s">
                        <?php elseif($key == 5): ?>
                        <img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">
                        <?php elseif($key == 6): ?>
                        <img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.7s">
                        <?php elseif($key == 7): ?>
                        <img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.9s"><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <!--<img src="/yvanfa/Public/Home/images/str4.jpg" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.3s">-->
                <!--<img src="/yvanfa/Public/Home/images/str4.jpg" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">-->
                <!--<img src="/yvanfa/Public/Home/images/str4.jpg" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.7s">-->
                <!--<img src="/yvanfa/Public/Home/images/str4.jpg" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.9s">-->
            </div>
            <!--<div class="strength_top">-->
                <!--<div class="strength_top_l left">-->
                    <!--<img src="/yvanfa/Public/Home/images/str1.jpg" alt="" class="block" data-scroll-reveal="enter left">-->
                <!--</div>-->
                <!--<div class="strength_top_r right">-->
                    <!--<img src="/yvanfa/Public/Home/images/str2.jpg" alt="" class="img1 block" data-scroll-reveal="enter top over 0.5s and move 200px after 0.5s">-->
                    <!--<img src="/yvanfa/Public/Home/images/str3.jpg" alt="" class="img2 block" data-scroll-reveal="enter top over 0.8s and move 200px after 0.7s">-->
                <!--</div>-->
                <!--<div class="clear"></div>-->
            <!--</div>-->
            <!--<div class="strength_bot">-->
                <!--<img src="/yvanfa/Public/Home/images/str4.jpg" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.3s">-->
                <!--<img src="/yvanfa/Public/Home/images/str4.jpg" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.5s">-->
                <!--<img src="/yvanfa/Public/Home/images/str4.jpg" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.7s">-->
                <!--<img src="/yvanfa/Public/Home/images/str4.jpg" alt="" class="block" data-scroll-reveal="enter bottom over 1s and move 100px after 0.9s">-->
            <!--</div>-->
        </div>
    </div>
    <!--        源发实力图片区域end-->
    <!--       客户案例star-->
    <div class="case_wk">
        <div class="case_con">
            <div class="advantage_top">
                <h5>源发通风<i>客户案例</i></h5>
                <p>真诚为客户服务,产品质量优质有保证</p>
            </div>
            <div class="case_list">
                <ul>
                    <!--循环客户案例-->
                    <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo U('Cases/cases');?>">
                                <img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="">
                                <p><?php echo ($vo["title"]); ?></p>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--循环客户案例结束-->
                    <!--<li>-->
                        <!--<a href="">-->
                            <!--<img src="/yvanfa/Public/Home/images/caseimg.jpg" alt="">-->
                            <!--<p>客户案例</p>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="">-->
                            <!--<img src="/yvanfa/Public/Home/images/caseimg.jpg" alt="">-->
                            <!--<p>客户案例</p>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="">-->
                            <!--<img src="/yvanfa/Public/Home/images/caseimg.jpg" alt="">-->
                            <!--<p>客户案例</p>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="">-->
                            <!--<img src="/yvanfa/Public/Home/images/caseimg.jpg" alt="">-->
                            <!--<p>客户案例</p>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="">-->
                            <!--<img src="/yvanfa/Public/Home/images/caseimg.jpg" alt="">-->
                            <!--<p>客户案例</p>-->
                        <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="">-->
                            <!--<img src="/yvanfa/Public/Home/images/caseimg.jpg" alt="">-->
                            <!--<p>客户案例</p>-->
                        <!--</a>-->
                    <!--</li>-->
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>
    <!--       客户案例end-->
    <!--        新闻star-->
    <div class="news_wk">
        <div class="message_con">
            <div class="honor left">
                <div class="title_show">
                    <h3>荣誉资质</h3>
                    <p>Honor Qualifications</p>
                    <a href="<?php echo U('Honor/honor');?>">MORE +</a>
                </div>
                <div class="honor_con">
                    <!--循环荣誉资质-->
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Honor/honor');?>">
                            <img src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" alt="">
                            <p><?php echo ($vo["title"]); ?></p>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--循环荣誉资质结束-->
                    <!--<a href="">-->
                        <!--<img src="/yvanfa/Public/Home/images/ry.jpg" alt="">-->
                        <!--<p>荣誉资质</p>-->
                    <!--</a>-->
                    <!--<a href="">-->
                        <!--<img src="/yvanfa/Public/Home/images/ry.jpg" alt="">-->
                        <!--<p>荣誉资质</p>-->
                    <!--</a>-->
                    <div class="clear"></div>
                </div>
            </div>
            <div class="news right">
                <div class="title_show">
                    <h3>公司新闻</h3>
                    <p>Company news</p>
                    <a href="<?php echo U('News/news');?>">MORE +</a>
                </div>
                <div class="news_con">
                    <ul>
                        <?php if(is_array($lis)): $i = 0; $__LIST__ = $lis;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo U('News/news_details','id='.$vo['id']);?>">
                                    <div class="news_time left">
                                        <p><?php echo ($vo["time"]); ?></p>
                                    </div>
                                    <div class="news_text left">
                                        <h5><?php echo ($vo["title"]); ?></h5>
                                        <p><?php echo ($vo["describe"]); ?></p>
                                    </div>
                                    <div class="clear"></div>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<div class="news_time left">-->
                                    <!--<p>2017</p>-->
                                    <!--<p>01/02</p>-->
                                <!--</div>-->
                                <!--<div class="news_text left">-->
                                    <!--<h5>新闻标题新闻标题新闻标题</h5>-->
                                    <!--<p>新闻简短描述新闻简短描述新闻简短描述新闻简短描述</p>-->
                                <!--</div>-->
                                <!--<div class="clear"></div>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<div class="news_time left">-->
                                    <!--<p>2017</p>-->
                                    <!--<p>01/02</p>-->
                                <!--</div>-->
                                <!--<div class="news_text left">-->
                                    <!--<h5>新闻标题新闻标题新闻标题</h5>-->
                                    <!--<p>新闻简短描述新闻简短描述新闻简短描述新闻简短描述</p>-->
                                <!--</div>-->
                                <!--<div class="clear"></div>-->
                            <!--</a>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<a href="">-->
                                <!--<div class="news_time left">-->
                                    <!--<p>2017</p>-->
                                    <!--<p>01/02</p>-->
                                <!--</div>-->
                                <!--<div class="news_text left">-->
                                    <!--<h5>新闻标题新闻标题新闻标题</h5>-->
                                    <!--<p>新闻简短描述新闻简短描述新闻简短描述新闻简短描述</p>-->
                                <!--</div>-->
                                <!--<div class="clear"></div>-->
                            <!--</a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--   新闻end-->
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
<script src="/yvanfa/Public/Home/js/scrollReveal.js"></script>
<script>
    (function() {
        window.scrollReveal = new scrollReveal({
            reset: true,
            move: '50px'
        });
    })();

</script>
<script src="/yvanfa/Public/Home/js/common.js"></script>
</body>

</html>