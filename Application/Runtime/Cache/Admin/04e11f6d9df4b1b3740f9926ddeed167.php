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
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
    <a class="button border-yellow" href="<?php echo U('user/user_add');?>"><span class="icon-plus-square-o"></span> 添加账号</a>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">账号</th>
      <th width="10%">权限等级</th>
      <th width="10%">注册时间</th>
      <th width="10%">手机</th>
      <th width="10%">邮箱</th>
      <th width="10%">状态</th>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($val["id"]); ?></td>
      <td><?php echo ($val["username"]); ?></td>
      <td>
        <?php switch($val["level"]): case "1": ?>超级管理员<?php break;?>
          <?php case "2": ?>管理员<?php break; endswitch;?>
      </td>
      <td><?php echo ($val["createtime"]); ?></td>
      <td><?php echo ($val["numb"]); ?></td>
      <td><?php echo ($val["mail"]); ?></td>
      <td>
        <?php switch($val["state"]): case "0": ?>离线<?php break;?>
          <?php case "1": ?>在线<?php break; endswitch;?>
      </td>
      <td><div class="button-group"> <a class="button border-main" href="<?php echo U('user/user_save?id='.$val['id']);?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="<?php echo U('user/delete?id='.$val['id']);?>" onclick="return del(1,2)"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>
</div>
<script type="text/javascript">
</script>

</body>
</html>