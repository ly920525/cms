<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="/yvanfa/Public/admin/css/pintuer.css">
    <link rel="stylesheet" href="/yvanfa/Public/admin/css/admin.css">
    <link rel="stylesheet" href="/yvanfa/Public/admin/css/drag.css">
    <script src="/yvanfa/Public/admin/js/jquery.js"></script>
    <script src="/yvanfa/Public/admin/js/pintuer.js"></script>
    <script src="/yvanfa/Public/admin/js/layer/layer.js"></script>
    <script src="/yvanfa/Public/admin/js/layer/dialog.js"></script>
    <script src="/yvanfa/Public/admin/js/layer/liyong.js"></script>
    <script src="/yvanfa/Public/admin/js/jquery-1.7.2.min.js"></script>
    <script src="/yvanfa/Public/admin/js/drag.js"></script>

</head>
<body>

<head>
    <style>
        .nickname {margin-top:1%;}
        .top {margin-top:0.5%;}
        .center {background:#8697b2 url(/yvanfa/Public/admin/images/gf.jpg); color:#fff; font-size: 1.3em;}
        .xinxi {text-align: center;}
    </style>
</head>

<body>
<div class="panel admin-panel">
    <div class="panel-head">
        <strong class="icon-reorder"> 管理员信息</strong>
    </div>
    <div class="padding border-bottom">
        <a class="button border-yellow" href="<?php echo U('user/pass');?>"><span class="icon-edit"></span> 修改密码</a>
        <a class="button border-yellow" href="<?php echo U('user/user_save');?>"><span class="icon-edit"></span> 修改信息</a>
    </div>
    <div class="center padding border-bottom ">
        <div class="xinxi" >
            <?php
 switch ($row['level']) { case 1: echo '  <img src="/yvanfa/Public/admin/images/chaoji.png" class="radius-circle rotate-hover" height="100" width="100px">'; break; case 2: echo ' <img src="/yvanfa/Public/admin/images/putong.png" class="radius-circle rotate-hover" height="100" width="100px">'; break; } ?>

            <div class="nickname">账号：<?php echo ($row["username"]); ?></div>
            <div class="top">身份：  <?php
 switch ($row['level']) { case 1: echo ' 超级管理员'; break; case 2: echo ' 管理员>'; break; } ?>
            </div>
            <div class="top">手机号：<?php echo ($row["numb"]); ?></div>
            <div class="top">电子邮箱：<?php echo ($row["mail"]); ?></div>
        </div>
    </div>
</div>
</body>