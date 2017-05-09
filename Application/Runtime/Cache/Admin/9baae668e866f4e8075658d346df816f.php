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
    <title>客户案例1</title>
    <style>
        .type {color:#00CC99;}
    </style>
</head>

<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href="<?php echo U('Case/kehu_add');?>"> 添加内容</a> </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="6%" style="text-align:left; padding-left:20px;">ID</th>
        <th width="10%">分类标题</th>
        <th width="15%">图片标题</th>
        <th width="20%">图片</th>
        <th width="15%">所属方法</th>
        <th width="15%">发布（或修改）时间</th>
        <th width="15%">操作</th>
      </tr>
      <!-- 循环新闻列表 -->
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
          <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="<?php echo ($vo["id"]); ?>" /></td>
          <td class="type"><?php echo ($vo["issuer"]); ?></td>
          <td><?php echo ($vo["title"]); ?></td>
          <td class="td"><img width="40%" src="/yvanfa/Public/Uploads/<?php echo ($vo["img"]); ?>" /> </td>
          <td><?php echo ($vo["fang_fa"]); ?></td>
          <td><?php echo ($vo["time"]); ?></td>
          <td>
              <div class="button-group">
                  <a class="button border-main" href="<?php echo U('/Admin/Case/kehu_save',array('id'=>$vo['id']))?>"><span class="icon-edit"></span> 修改</a>
                  <a class="button border-red" href="<?php echo U('/Admin/Case/del',array('id'=>$vo['id']))?>" onclick="return confirm('您确定要删除吗?')">
                   <span class="icon-trash-o"></span> 删除</a>
              </div>
          </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      <!-- 循环新闻列表 结束 -->
      <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;">
            <input type="checkbox" id="checkall" />全选
        </td>
        <td style="text-align:left;padding-left:20px;">
            <a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 批量删除</a>
        </td>
        <td colspan="3">
          <div class="pagelist"><?php echo $Page;?></div>
        </td>
        <td colspan="2">
        </td>
      </tr>
      <tr>

      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

//全选
$("#checkall").click(function(){
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

//批量删除
function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {
		Checkbox=true;
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false;
		$("#listform").submit();
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}


</script>
</body>
</html>