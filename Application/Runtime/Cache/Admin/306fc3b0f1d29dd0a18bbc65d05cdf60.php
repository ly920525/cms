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

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x"  enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label for="sitename">管理员帐号：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;" id="user">
            <?php echo ($dat["username"]); ?>
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>邮箱</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="mail" placeholder="<?php echo ($dat["mail"]); ?>" />
          <div class="tips">留空为不修改</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>手机</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="numb" placeholder="<?php echo ($dat["numb"]); ?>"  />
          <div class="tips">留空为不修改</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>权限</label>
        </div>
        <div class="field">
          <select name="level"  class="input w50" id="level">
            <option value="1">超级管理员</option>
            <option value="2">管理员</option>
          </select>
          <div class="tips">默认为超级管理员</div>
        </div>
      </div>
      <div class="form-group">
        <div id="drag" style="margin-left: 10%"></div>
        <script type="text/javascript">
          $('#drag').drag();
        </script>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="button" onclick="liyong.save()" > 提交</button>
          <button class="button bg-main icon-reply" onClick='javascript :history.back(-1);'> 返回</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  function del(id,mid){
    if(confirm("您确定要删除吗?")){

    }
  }
</script>
</body>
</html>