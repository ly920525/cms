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
  <title>产品中心</title>
  <style>
    .fold {cursor:pointer; font-size:20px;}
    .dd {display:none;}
    .common-input {width:20%; text-align: center;}
    .type {color:#00CC99;}
  </style>
</head>

<div class="panel admin-panel">
  <form action='' name="myform" id="myform" method="post">
    <div class="panel-head"><strong class="icon-reorder"> 分类列表</strong></div>
    <div class="padding border-bottom">
      <a class="button border-yellow" href="<?php echo U('Product/product_add');?>"><span class="icon-plus-square-o"></span> 添加分类</a>
      <button type="submit" class="button border-yellow" id="updateOrd" href="<?php echo U('Product/order');?>"><span class="icon-tag"></span>更新排序</button>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="5%">折叠（二级导航）</th>
        <th width="5%">排序</th>
        <th width="15%">产品列表名称</th>
        <th width="10%">所属方法</th>
        <!--<th width="10%">是否在浏览器中展示</th>-->
        <th width="10%">发布（或修改）时间</th>
        <th width="10%">操作</th>
      </tr>

      <?php
 $yy=0; dig($cat,$yy); function dig($cat,$yy){ $yy++; foreach($cat as $key => $val){ if($val['pid']==0){ $ss=0; }else{ $ss=$yy; } ?>
      <!--<?php var_dump($val); ?>-->
      <?php if($ss==0){ ?>
      <tr class="dt">
        <td class="fold"><i></i></td>
      <?php }else{ ?>
      <tr class="dd">
        <td></td>
      <?php } ?>
        <td>
          <input class="common-input sort-input" name="ord[]" value="<?php echo ($val["sort"]); ?>" type="text">
          <input class="common-input sort-input" name="ordid[]" value="<?php echo ($val["id"]); ?>" type="hidden">
        </td>
      <?php if($ss==0){ ?>
        <td class="type"><?php echo ($val["title"]); ?></td>
      <?php }else{ ?>
        <td class="type" style="padding-left: 4%">┝─&nbsp;<?php echo ($val["title"]); ?></td>
      <?php } ?>
        <td><?php echo ($val["fangfa"]); ?></td>
        <!--<td><?php echo ($val["state"]); ?></td>-->
        <td><?php echo ($val["create_time"]); ?></td>
        <td>
          <div class="button-group">
            <a class="button border-main" href="<?php echo U('Product/product_save?id='.$val['id']);?>"><span class="icon-edit"></span> 修改</a>
            <a class="button border-red" href="<?php echo U('Product/product?id='.$val['id']);?>" onclick="return confirm('您确定要删除吗?');"><span class="icon-trash-o"></span> 删除</a>
          </div>
        </td>
      </tr>

      <?php
 dig($val['erji'],$yy); } } ?>

    </table>
  </form>
</div>

<script type="text/javascript">
  (function($){
    /* 分类展开收起 */
    $(".dd").prev().find(".fold i").addClass("icon-plus")
            .click(function(){
              var self = $(this);
              if(self.hasClass("icon-plus")){
                self.closest(".dt").nextUntil(".dt",".dd").slideDown("fast", function(){
                  self.removeClass("icon-plus").addClass("icon-minus");
                });
              } else {
                self.closest(".dt").nextUntil(".dt",".dd").slideUp("fast", function(){
                  self.removeClass("icon-minus").addClass("icon-plus");
                });
              }
            });

  })(jQuery);
</script>

</body>
</html>