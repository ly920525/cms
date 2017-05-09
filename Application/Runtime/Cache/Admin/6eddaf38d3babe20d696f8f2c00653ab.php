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
  <title>客户案例</title>
  <style>
    .tips {color:#6F6F6F;}
  </style>
</head>

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" onsubmit="return checkinput()">
      <div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="name" name="title" value="<?php echo $sort['type'];?>" placeholder="请输入分类标题" data-validate="required:请输入分类标题" />
          <div class="tips">（用于前端显示的标题）</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>所属方法：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="fang_fa" value="<?php echo $sort['fang_fa'];?>" placeholder="请输入所属方法" data-validate="required:请输入所属方法" />
          <div class="tips">（U函数解析的URL或者外链）格式：index/index</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="sorts" name="sort" value="<?php echo $sort['sort'];?>" placeholder="请输入分类排序" data-validate="number:排序必须为数字" />
          <div class="tips">（排序必须为数字）</div>
          <span id='sortjc' style='color:red;'></span>
          <input type='hidden' id="sortsjc" value="<?php echo U('Case/jiances');?>" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-edit sortjc" type="submit"> 修改</button>
          <button class="button bg-main icon-reply" onClick='javascript :history.back(-1);'> 返回</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="/yvanfa/Public/admin/js/jq.js"></script>
<script type="text/javascript">
  function checkinput(){
    var name = document.getElementById("name").value;
    if(name ==  null || name == ''){
      alert("分类不能为空,请输入分类");
      return false;   }

    var sort = document.getElementById("sort").value;
    if(sort ==  null || sort == ''){
      alert("排序不能为空,排序为分类顺序");
      return false;   }
    return true;
  }
</script>
</body></html>