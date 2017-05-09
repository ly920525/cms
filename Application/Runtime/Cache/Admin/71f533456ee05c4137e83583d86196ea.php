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

<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
  <a class="button border-yellow" href="<?php echo U('Column/column_add');?>"><span class="icon-plus-square-o"></span> 添加内容</a>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th>栏目名称</th>
      <th>首页图片</th>
      <th width="10%">图片名字</th>
      <th>描述</th>
      <th>创建时间</th>
      <th>显示</th>
      <th width="250">操作</th>
    </tr>

    <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($v["id"]); ?></td>
      <td><?php echo ($v["name"]); ?></td>
      <td><img src="/yvanfa/Public/Uploads/<?php echo ($v["img"]); ?>" alt="" width="300" height="100" /></td>
      <td><?php echo ($v["img"]); ?></td>
      <td><?php echo ($v["describe"]); ?></td>
      <td><?php echo ($v["create_time"]); ?></td>
      <td><?php echo ($v["state"]); ?></td>
      <td>
      <div class="button-group">
      <a type="button" class="button border-main" href="<?php echo U('Column/column_save','id='.$v['id']);?>"><span class="icon-edit"></span>修改</a>
       <a class="button border-red" href="<?php echo U('Column/delete','id='.$v['id']);?>" onclick="return confirm('您确定要删除吗?')"><span class="icon-trash-o"></span> 删除</a>
      </div>
      </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

  </table>
</div>


</body></html>