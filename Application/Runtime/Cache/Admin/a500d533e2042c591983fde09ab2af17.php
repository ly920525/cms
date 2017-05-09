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
    <title>新闻中心</title>
    <style>
        .tips {color:#6F6F6F;}
        .type {color:#00CC99;}
    </style>
</head>

<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 分类列表</strong></div>
  <!--<div class="padding border-bottom">-->
    <!--<button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加分类</button>-->
  <!--</div>-->
  <table class="table table-hover text-center">
    <tr>
      <th width="2%" style="text-align:left; padding-left:20px;">ID</th>
      <th width="15%">新闻分类</th>
      <th width="10%">所属方法</th>
      <th width="10%">排序 （排序为0，显示在前端第一位）</th>
      <th width="10%">操作</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td style="text-align:left; padding-left:20px;"><?php echo ($vo["id"]); ?></td>
        <td class="type"><?php echo ($vo["type"]); ?></td>
        <td><?php echo ($vo["fang_fa"]); ?></td>
        <td><?php echo ($vo["sort"]); ?></td>
        <td><div class="button-group"> <a class="button border-main" href="<?php echo U('news/news_save',array('id'=>$vo['id']));?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="<?php echo U('/Admin/news/catedel',array('id'=>$vo['id']));?>" onclick="return confirm('您确定要删除吗?');"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

  </table>
</div>

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加新闻分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" onsubmit="return checkinput()">
      <div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" id="name" name="title" placeholder="请输入分类标题" data-validate="required:请输入分类" />
          <div class="tips">（用于前端显示的标题）</div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>所属方法：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="fang_fa" placeholder="请输入所属方法" data-validate="required:请输入所属方法" />
          <div class="tips">（U函数解析的URL或者外链）格式：index/index</div>
        </div>
      </div>

        <div class="form-group">
            <div class="label">
                <label>分类排序：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" id="sorts" name="sort" value="" placeholder="请输入分类排序" data-validate="number:排序必须为数字" />
                <div class="tips">（排序必须为数字）</div>
                <span id='sortjc' style='color:red;'></span>
                <input type='hidden'  id="sortsjc" value="<?php echo U('News/jiances');?>" />
            </div>
        </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o sortjc" type="submit"> 提交</button>
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

    //批量排序
    function sorts(){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){

            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");
            return false;
        }
    }



</script>

</body>
</html>