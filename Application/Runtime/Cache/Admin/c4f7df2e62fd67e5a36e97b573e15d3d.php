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
  <title>修改栏目</title>
  <style>
    .inputs,.button {cursor:pointer;}
    .tips {color:#6F6F6F;}
    .button.active {background-color: #0ae;}
    .spans {font-size: 30px;}
  </style>
</head>

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改栏目</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>上级栏目：</label>
        </div>
        <div class="field">
          <select name="xiala" class="input w50 inputs">
            <option value="0">一级栏目</option>
              <?php if(is_array($cate)): foreach($cate as $key=>$val): if($val['id']==$dat['pid']){ ?>
                  <option selected="selected" value="<?php echo ($val["id"]); ?>" ><?php echo ($val["title"]); ?></option>
                <?php }elseif($val['id']==$dat['id']) { ?>

                <?php }else{ ?>
                  <option value="<?php echo ($val["id"]); ?>" ><?php echo ($val["title"]); ?></option>
                <?php } ?>

                  </option><?php endforeach; endif; ?>
          </select>
          <div class="tips">不选择上级栏目默认为上级栏目（不能选择本身作为上级菜单）</div>
        </div>
      </div>
        <div class="form-group">
            <div class="label">
                <label>栏目标题：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" id="catname" name="title" value="<?php echo ($dat["title"]); ?>" />
                <div class="tips">（用于后台显示的配置标题）</div>
                <span id='catjc' style='color:red;'></span>
                <input type='hidden'  id="catnamejc" value="<?php echo U('Backstage/jiance');?>" />
            </div>
        </div>
        <div class="form-group">
            <div class="label">
                <label>栏目小图标：</label>
            </div>
            <div class="field">
                <select name="xialas" class="input w50 inputs" id="selects">
                    <option value="0">请选择小图标的样式</option>
                    <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["icon"]); ?>  （<?php echo ($v["icon_title"]); ?>）</option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>

                <div class="tips" id="tubiao">小图标显示：<span class="<?php echo ($dat["icon"]); ?> spans"></span>&nbsp;&nbsp;&nbsp;(不选择默认为未修改前的小图标)</div>

            </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>所属方法：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="fangfa" value="<?php echo ($dat["fangfa"]); ?>" placeholder="请输入所属方法" data-validate="required:请输入所属方法" />
          <div class="tips">（U函数解析的URL或者外链）格式：index/index</div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>是否显示：</label>
        </div>
        <div class="field">
          <div class="button-group radio ">

              <?php if($dat['state'] == '是' ): ?><label class="button active">
                      <span class="icon icon-check"></span>
                      <input name="isshow" value="是" type="radio" >是
                  </label>
                  <label class="button"><span class="icon icon-times"></span>
                      <input name="isshow" value="否"  type="radio" >否
                  </label>
                  <?php else: ?>
                  <label class="button">
                      <span class="icon icon-check"></span>
                      <input name="isshow" value="是" type="radio" >是
                  </label>
                  <label class="button active"><span class="icon icon-times"></span>
                      <input name="isshow" value="否"  type="radio" >否
                  </label><?php endif; ?>

          </div>
          <div class="tips">（不选择默认为“未修改前的值”）</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-edit catjc" type="submit"> 修改</button>
          <button class="button bg-main icon-reply" onClick='javascript :history.back(-1);'> 返回</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="/yvanfa/Public/admin/js/jq.js"></script>
<script>
    $(function(){
        $(".inputs").change(function() {
            var checkText = $("#selects").find("option:selected").text();  //获取Select选择的Text
            var a=checkText.indexOf(" ");
            var b=checkText.substring(0,a);
            //alert(b);
            $("#tubiao").html('小图标显示：'+'<span class="'+b+' spans"></span>') ;
        });
    })
</script>

</body>
</html>