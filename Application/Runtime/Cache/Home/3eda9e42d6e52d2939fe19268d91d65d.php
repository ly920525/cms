<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <title>产品详情</title>
    <meta charset="UTF-8">
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
    <!--           内页横幅star-->
    <div class="ny_banner" style="background:url('/yvanfa/Public/Home/images/banner.jpg') no-repeat center center"></div>

    <!--           内页横幅end-->
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
                                        <?php if(is_array($cata[$key]['erji'])): foreach($cata[$key]['erji'] as $keys=>$v): ?><li class="<?php if($vo['id']==$issuer){echo 'active';} ?>">
                                             <a href="<?php echo U('Product/product',array('issuer'=>$v['id']));?>"><?php echo ($v["title"]); ?></a>
                                            </li><?php endforeach; endif; ?>
                                    </ul>
                                    <?php else: ?>
                                    <ul>
                                        <?php if(is_array($cata[$key]['erji'])): foreach($cata[$key]['erji'] as $keys=>$v): ?><li class="<?php if($vo['id']==$issuer){echo 'active';} ?>">
                                                <a href="<?php echo U('Product/product',array('issuer'=>$v['id']));?>"><?php echo ($v["title"]); ?></a>
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
                    <p class="left">产品中心</p>
                    <span class="left">Product Center</span>
                    <a href="" class="right"></a>
                    <div class="clear"></div>
                </div>
                <div class="contact_l">
                    <div class="pro_details">
                        <div class="pro_xiangxi">
                            <div class="ny_product_txt">
                                <h3><?php echo ($list["name"]); ?></h3>
                                <p><?php echo ($list["content"]); ?></p>
                                <input type="submit" class="online_dg" value="在线咨询">
                                <!--<h3>嵌入式AGV</h3>-->
                                <!--<p>超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。</p>-->
                                <!--<input type="submit" class="online_dg" value="在线咨询">-->
                            </div>
                            <div class="ny_product_box">
                                <?php if(is_array($lists)): $key = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($key % 2 );++$key; if($key == 1): ?><div class="ny_product_sml">
                                            <img src="/yvanfa/Public/Uploads/<?php echo ($v["imgs"]); ?>" />
                                            <span class="product_move"></span>
                                            <span class="product_shade"></span>
                                        </div>
                                        <?php else: ?>
                                        <div class="ny_product_big">
                                            <img src="/yvanfa/Public/Uploads/<?php echo ($v["imgs"]); ?>" />
                                        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                <!--<div class="ny_product_sml">-->
                                    <!--<img src="/yvanfa/Public/Home/images/banner.jpg" />-->
                                    <!--<span class="product_move"></span>-->
                                    <!--<span class="product_shade"></span>-->
                                <!--</div>-->
                                <!--<div class="ny_product_big">-->
                                    <!--<img src="/yvanfa/Public/Home/images/banner.jpg" />-->
                                <!--</div>-->
                                <!--<div class="ny_product_big">-->
                                    <!--<img src="/yvanfa/Public/Home/images/banner.jpg" />-->
                                <!--</div>-->
                            </div>
                            <div style="clear:both"></div>
                            <div class="product_img_choose">
                                <ul>
                                    <?php if(is_array($lists)): $key = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($key % 2 );++$key; if($key == 1): ?><li class="choose_style">
                                                <img src="/yvanfa/Public/Uploads/<?php echo ($v["imgs"]); ?>" />
                                            </li>
                                            <?php else: ?>
                                            <li>
                                                <img src="/yvanfa/Public/Uploads/<?php echo ($v["imgs"]); ?>" />
                                            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    <!--<li class="choose_style">-->
                                        <!--<img src="/yvanfa/Public/Home/images/banner.jpg" />-->
                                    <!--</li>-->
                                    <!--<li>-->
                                        <!--<img src="/yvanfa/Public/Home/images/str1.jpg" />-->
                                    <!--</li>-->
                                    <!--<li>-->
                                        <!--<img src="/yvanfa/Public/Home/images/str1.jpg" />-->
                                    <!--</li>-->
                                </ul>
                            </div>
                            <div class="clear"></div>
                            <div class="product_xiang">
                                <ul>
                                    <li>
                                        产品概述
                                    </li>
                                </ul>
                                <p></p>
                            </div>
                            <!--调用产品介绍-->
                            <?php echo htmlspecialchars_decode($list['introduction']); ?>
                            <!--调用产品介绍结束-->
                            <!--<div class="product_txt">-->
                                <!--<p>mart功能-->
                                    <!--<br /> · Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能-->
                                    <!--<br /> · Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放-->
                                    <!--<br /> · Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术-->
                                    <!--<br /> · Smart控制：ABF（-A可选）、P-Iris（-P可选）-->
                                    <!--<br /> 图像相关-->
                                    <!--<br /> · 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像-->
                                    <!--<br /> · 支持走廊模式，增加纵向狭长环境下监控区域-->
                                    <!--<br /> · 支持区域裁剪，小带宽看清大细节-->
                                    <!--<br /> · 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要-->
                                    <!--<br /> · 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求-->
                                    <!--<br /> · 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile-->
                                    <!--<br /> · 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选-->
                                    <!--<br /> · 支持透雾、强光抑制-->
                                    <!--<br /> 系统功能-->
                                    <!--<br /> · 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入-->
                                    <!--<br /> · 支持三码流技术，双路高清，支持同时20路取流-->
                                    <!--<br /> · 支持防雷、防浪涌、防静电-->
                                    <!--<br /> · 支持宽压输入-->
                                    <!--<br /> 接口功能-->
                                    <!--<br />-->
                                <!--</p>-->
                            <!--</div>-->
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
<script>
    $(".product_shade").hover(function() {
        $(".product_move").show();
        $(".ny_product_big").show();
    }, function() {
        $(".product_move").hide();
        $(".ny_product_big").hide();
    })

    $(".product_shade").mousemove(function(e) {
        var moveX = e.clientX; //获取鼠标的X轴
        var moveY = e.clientY; //获取鼠标的Y轴
        var scroT = $(document).scrollTop();
        var boxLeft = $(".ny_product_box").offset().left; //获取外盒子到左边框的距离
        var boxTop = $(".ny_product_box").offset().top; //获取外盒子到上边框的距离
        var moveW = $(".product_move").width() / 2; //小滑块宽度
        var moveH = $(".product_move").height() / 2; //小滑块高度
        var moveLeft = moveX - boxLeft - moveW;
        var moveTop = scroT + moveY - boxTop - moveH;
        //                判断.不让移动块移出
        if (moveTop < 0) {
            moveTop = 0;
        } else if (moveTop > ($(".product_shade").height() - moveH * 2)) {
            moveTop = $(".product_shade").height() - moveH * 2;
        }

        if (moveLeft < 0) {
            moveLeft = 0;
        } else if (moveLeft > ($(".product_shade").width() - moveW * 2)) {
            moveLeft = $(".product_shade").width() - moveW * 2;
        }
        $(".product_move").css({
            left: moveLeft,
            top: moveTop
        });

        //                透明快滑动的最大高度和宽度
        var hd_w = $(".product_shade").width() - moveW * 2;
        var hd_h = $(".product_shade").height() - moveH * 2;

        //                滑动高度和宽度比例
        var ratioW = moveLeft / hd_w;
        var ratioY = moveTop / hd_h;
        //                alert(ratioW+"--"+ratioY);
        var big_left = ($(".ny_product_big img").width() - $(".ny_product_big").width()) * ratioW;
        var big_top = ($(".ny_product_big img").height() - $(".ny_product_big").height()) * ratioY;
        //                alert(big_left+"--"+big_top);
        $(".ny_product_big img").css({
            left: -big_left,
            top: -big_top
        });
    })

    /*小图选择区域*/
    $(".product_img_choose ul li").click(function() {
        $(this).addClass("choose_style").siblings().removeClass("choose_style");
        var ImgSrc = $(this).children("img").attr("src");
        $(".ny_product_sml img").attr("src", ImgSrc);
        $(".ny_product_big img").attr("src", ImgSrc);
    })

</script>
<script src="/yvanfa/Public/Home/js/common.js"></script>
</body>

</html>