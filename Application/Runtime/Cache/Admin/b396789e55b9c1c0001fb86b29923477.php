<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <link href="/yvanfa/Public/admin/info/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <link href="/yvanfa/Public/admin/info/css/style.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="/yvanfa/Public/admin/info/css/morris.css" type="text/css"/>
    <link rel="stylesheet" href="/yvanfa/Public/admin/info/css/icon-font.min.css" type='text/css'/>
    <link href="/yvanfa/Public/admin/info/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <script src="/yvanfa/Public/admin/info/js/jquery-2.1.4.min.js"></script>
</head>
<body>
<div class="page-container" style="background-color: #ffffff">
    <div class="left-content" style="width: 100%">
        <div class="mother-grid-inner">
            <div class="header-main">
                <div class="logo-w3-agile" style="background-color: #ffffff">
                    <img src="/yvanfa/Public/home/images/logo.png"><a href="index.html"></a></img>
                </div>
                <div class="clearfix" style="padding-left:46%; padding-top:1%; font-size:30px;">后台信息</div>
            </div>

            <div class="four-grids">
                <div class="col-md-3 four-grid">
                    <div class="four-agileits">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                        </div>
                        <div class="four-text">
                            <h3>管理员</h3>
                            <h4> <?php echo ($count["admin"]); ?> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 four-grid">
                    <div class="four-agileinfo">
                        <div class="icon">
                            <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                        </div>
                        <div class="four-text">
                            <h3>留言量</h3>
                            <h4><?php echo ($count["message"]); ?> </h4>

                        </div>

                    </div>
                </div>
                <div class="col-md-3 four-grid">
                    <div class="four-w3ls">
                        <div class="icon">
                            <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
                        </div>
                        <div class="four-text">
                            <h3>后台事件</h3>
                            <h4><?php echo ($count["log"]); ?> </h4>

                        </div>

                    </div>
                </div>
                <div class="col-md-3 four-grid">
                    <div class="four-wthree">
                        <div class="icon">
                            <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
                        </div>
                        <div class="four-text">
                            <h3>今日访问量</h3>
                            <h4><?php echo ($count["visit"]); ?> </h4>

                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="agileinfo-grap">
                <div class="agileits-box">
                    <header class="agileits-box-header clearfix">
                        <h3 style="font-family: '微软雅黑', sans-serif">访问量</h3>
                        <div class="toolbar">
                            <div class="pull-left">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default btn-xs active" >日</a>
                                </div>
                            </div>

                        </div>
                    </header>
                    <div class="agileits-box-body clearfix">
                        <div id="hero-area"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 w3-agileits-crd" style="width: 50%">

                <div class="card card-contact-list">
                    <div class="agileinfo-cdr">
                        <div class="card-header">
                            <h3 style="font-family: '微软雅黑', sans-serif">留言板</h3>
                        </div>
                        <div class="card-body p-b-20">
                            <div class="list-group">
                                <?php if(is_array($data1)): foreach($data1 as $key=>$vo): ?><a class="list-group-item media" href="">
                                    <!--<div class="pull-left">
                                        <img class="lg-item-img" src="/yvanfa/Public/admin/info/images/in1.jpg" >
                                    </div>-->
                                    <div class="media-body">
                                        <div class="pull-left">
                                            <div class="lg-item-heading" ><?php echo ($vo["name"]); ?></div>
                                            <small class="lg-item-text"><?php echo ($vo["content"]); ?></small>
                                        </div>
                                        <div class="pull-right">
                                            <div class="lg-item-heading"><?php echo ($vo["phone"]); ?></div>
                                            <small class="lg-item-text"><?php echo ($vo["time"]); ?></small>
                                        </div>
                                    </div>

                                </a><?php endforeach; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 w3-agile-crd" style="width: 50%">
                <div class="card">
                    <div class="card-body card-padding">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title" style="font-family: '微软雅黑', sans-serif">行为公告</h4>
                            </header>
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <div class="streamline">
         <!--  //获取行为信息
        //0/蓝色 表示修改 更新操作
        // 1/绿色  表示新增 成功操作
        // 2/红色  表示失败 删除操作
        // 3/紫色  表示警告 提示操作
        // 4/灰色   表示不太重要的操作-->
                                    <?php if(is_array($data)): foreach($data as $key=>$vo): switch ($vo['state']){ case 0: echo '<div class="sl-item sl-danger">'; break; case 1: echo '<div class="sl-item sl-success">'; break; case 2: echo '<div class="sl-item sl-primary">'; break; case 3: echo '<div class="sl-item sl-warning">'; break; case 4: echo '<div class="sl-item">'; break; } ?>
                                                                <div class="sl-content">
                                                                    <small class="text-muted" style="font-size: 13px"><?php echo ($vo["time"]); ?></small>
                                                                    <p style="font-size: 12px"><strong><?php echo ($vo["user"]); ?></strong>  <?php echo ($vo["do"]); ?> </p>
                                                                </div>
                                                          </div><?php endforeach; endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <script>
            $(document).ready(function () {
                var navoffeset = $(".header-main").offset().top;
                $(window).scroll(function () {
                    var scrollpos = $(window).scrollTop();
                    if (scrollpos >= navoffeset) {
                        $(".header-main").addClass("fixed");
                    } else {
                        $(".header-main").removeClass("fixed");
                    }
                });

            });
        </script>
        <div class="inner-block">

        </div>
        <div class="copyrights">
            <p style="font-family: '微软雅黑', sans-serif">维登科技版权所有2017<br><a target="_blank"
                                                                          href="http://test.wheden.cn/whedencms">http://wheden.cn</a>
            </p>
        </div>
    </div>
</div>
<div class="clearfix"></div>
</div>
<script>
    var toggle = true;

    $(".sidebar-icon").click(function () {
        if (toggle) {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position": "absolute"});
        }
        else {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function () {
                $("#menu span").css({"position": "relative"});
            }, 400);
        }

        toggle = !toggle;
    });
</script>
<!--js -->
<script src="/yvanfa/Public/admin/info/js/jquery.nicescroll.js"></script>
<script src="/yvanfa/Public/admin/info/js/scripts.js"></script>
<script src="/yvanfa/Public/admin/info/js/bootstrap.min.js"></script>
<script src="/yvanfa/Public/admin/info/js/raphael-min.js"></script>
<script src="/yvanfa/Public/admin/info/js/morris.js"></script>
<script language="javascript">

    $(document).ready(function () {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function () {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function () {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function () {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });
        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: true,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth: true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity: 0.85,
            data: [
               <?php
 for ($x=1; $x<=count($day); $x++) { echo $day[$x]; } ?>
            ],
            lineColors: ['#018CD7', '#C6C6C6'],
            xkey: 'day',
            redraw: true,
            ykeys: ['qian', 'hou'],
            labels: ['前台', '后台'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });
    });
</script>
</body>
</html>