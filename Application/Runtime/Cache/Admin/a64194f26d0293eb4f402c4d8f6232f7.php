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
  <title>联系我们</title>
  <style>
    .table td{border:1px solid #ddd !important;}
    .tips {color:#6F6F6F;}
  </style>
</head>

<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 联系我们</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label>公司名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="title" value="<?php echo ($lists["title"]); ?>" placeholder="请输入公司名称" data-validate="required:请输入公司名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>联系人：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="name" value="<?php echo ($lists["name"]); ?>" placeholder="请输入联系人" data-validate="required:请输入联系人" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>手机：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="phone" value="<?php echo ($lists["phone"]); ?>" placeholder="请输入手机" data-validate="required:请输入手机" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="telephone" value="<?php echo ($lists["telephone"]); ?>" placeholder="请输入电话" data-validate="required:请输入电话" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>QQ：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="qq" value="<?php echo ($lists["qq"]); ?>" placeholder="请输入QQ" data-validate="required:请输入QQ" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>电子邮箱：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="email" value="<?php echo ($lists["email"]); ?>" placeholder="请输入电子邮箱" data-validate="required:请输入电子邮箱" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>全国服务热线：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="hotline" value="<?php echo ($lists["hotline"]); ?>" placeholder="请输入全国服务热线" data-validate="required:请输入全国服务热线" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="address" value="<?php echo ($lists["address"]); ?>" placeholder="请输入地址" data-validate="required:请输入地址" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>信息：</label>
        </div>
        <div class="field">
          <textarea name="information" class="input" placeholder="请输入信息" style="height:120px;"><?php echo ($lists["information"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-tag" type="submit"> 更新</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>