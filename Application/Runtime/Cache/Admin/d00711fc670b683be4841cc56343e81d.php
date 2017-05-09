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
    <title>二级产品</title>
    <style>
        .tips {color:#6F6F6F;}
        .inputs {cursor:pointer;}
    </style>
</head>

<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改二级产品</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">
        <div class="form-group">
            <div class="label">
                <label>二级分类：</label>
            </div>
            <div class="field">
                <select name="issuer" class="input w50 inputs">

                    <?php if(is_array($sort)): $i = 0; $__LIST__ = $sort;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($list['issuer']==$vo['title']){ ?>
                        <option selected="selected" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option>
                        <?php }elseif($list['issuer']==$vo['title']){ ?>

                        <?php }else{ ?>
                        <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option>
                        <?php } endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <div class="tips">（不选择新闻分类默认为未修改之前的值）</div>
            </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>图片标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($list["title"]); ?>" name="title" placeholder="请输入图片标题" data-validate="required:请输入图片标题" />
          <div class="tips">（用于前端显示的标题）</div>
        </div>
      </div>

        <div class="form-group">
            <div class="label">
                <label>图片：</label>
            </div>
            <div class="field">
                <div class="img" id="img"><img width="15%" height="10%"  src="/yvanfa/Public/Uploads/<?php echo ($list["img"]); ?>" /></div>
                <input type="file" name="file" onchange="hai.preview(this)" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
                <div class="tips">图片尺寸：500*500</div>
            </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>所属方法：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($list["fang_fa"]); ?>" name="fang_fa" placeholder="请输入所属方法" data-validate="required:请输入所属方法" />
          <div class="tips">（U函数解析的URL或者外链）格式：index/index</div>
        </div>
      </div>

      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-edit" type="submit"> 修改</button>
            <button class="button bg-main icon-reply" onClick='javascript :history.back(-1);'> 返回</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="/yvanfa/Public/admin/js/jq.js"></script>

</body></html>