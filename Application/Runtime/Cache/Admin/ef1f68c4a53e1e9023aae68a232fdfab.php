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
        .tips {color:#6F6F6F;}
        .button.active {background-color: #0ae;}
        .button {cursor:pointer;}
    </style>
</head>

<body>

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">
      <input type="hidden" name="id"  value="" />
      <div class="form-group">
        <div class="label">
          <label>栏目名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value="" placeholder="请输入栏目名称" data-validate="required:请输入标题" />
          <div class="tips">（用于前台首页轮播显示的名称）</div>
        </div>
      </div> 
      <div class="form-group">
        <div class="label">
          <label>栏目图片：</label>
        </div>
        <div class="field">
            <div class="img" id="img"><img src="" /></div>
            <input type="file" onchange="hai.preview(this)" name="file" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">（用于前台显示的首页轮播）图片尺寸：1920*200</div>
        </div>
      </div>
        <div class="form-group">
            <div class="label">
                <label>图片描述：</label>
            </div>
            <div class="field">
                <textarea name="describe" class="input" placeholder="请输入图片描述" style="height:100px; width: 50%; border:1px solid #ddd;"></textarea>
                <div class="tips"></div>
            </div>
        </div>
    
     <div class="form-group">
        <div class="label">
          <label>显示：</label>
        </div>
        <div class="field">
          <div class="button-group radio">
          
          <label class="button active">
         	  <span class="icon icon-check"></span>             
              <input name="isshow" value="是" type="radio">是
          </label>             
        
          <label class="button">
              <span class="icon icon-times"></span>
              <input name="isshow" value="否"  type="radio" >否
          </label>
           </div>
            <div class="tips">（不选择默认为“是”）</div>
        </div>
     </div>
     <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
            <button class="button bg-main icon-reply" onClick='javascript :history.back(-1);'> 返回</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="/yvanfa/Public/admin/js/jq.js"></script>

</body></html>