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
    <title>网站信息</title>
    <style>
        .field input{float: left;}
        .logos {padding-top: 4.5%;}
        .tips {color:#8D8D8D;}
    </style>
</head>

<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">
        <div class="form-group">
            <div class="label">
                <label>网站标题：</label>
            </div>
            <div class="field">
                <input type="text" class="input" name="web_name" value="<?php echo ($data["web_name"]); ?>" placeholder="请输入网站标题" data-validate="required:请输入网站标题" />
                <div class="tips">比如：公司名称等...</div>
            </div>
        </div>
        <div class="form-group">
            <div class="label">
                <label>网站域名：</label>
            </div>
            <div class="field">
                <input type="text" class="input" name="web_ip" value="<?php echo ($data["web_ip"]); ?>" placeholder="请输入网站域名" data-validate="required:请输入网站域名" />
                <div class="tips">例如：www.baidu.com</div>
            </div>
        </div>
        <div class="form-group">
            <div class="label">
                <label>网站LOGO：</label>
            </div>
            <div class="field">
                <div class="img" id="img"><img src="/yvanfa/Public/Uploads/<?php echo ($data["web_logo"]); ?>" width="110" height="150" /></div>
                <input type="file" name="files[]" onchange="ha.preview(this)" class="button bg-blue margin-left" id="image2" value="+ 浏览上传"  style="float:left;">
                <div class="tipss">图片尺寸：110*150</div>
                <div class="tips logos">网站LOGO：网站标志...</div>
            </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>网站小图标：</label>
        </div>
        <div class="field">
            <div class="imgs" id="imgs"><img src="/yvanfa/Public/Uploads/<?php echo ($data["web_logo_small"]); ?>" width="60" height="60"/></div>
            <input type="file" name="files[]" onchange="hi.preview(this)" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
            <div class="tipss">图片尺寸：60*60</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>创建者：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="web_author" value="<?php echo ($data["web_author"]); ?>" placeholder="请输入创建者" data-validate="required:请输入创建者" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>欢迎台词：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="welcome" value="<?php echo ($data["welcome"]); ?>" placeholder="请输入欢迎台词" data-validate="required:请输入欢迎台词" />
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>关键词做推广：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="keyword" value="<?php echo ($data["keyword"]); ?>" placeholder="请输入关键词做推广" data-validate="required:请输入关键词做推广" />
          <div class="tips"></div>
        </div>
      </div>
        <div class="form-group">
            <div class="label">
                <label>网站描述：</label>
            </div>
            <div class="field">
                <textarea class="input" name="web_miaoshu" placeholder="请输入网站描述" ><?php echo ($data["web_miaoshu"]); ?></textarea>
                <div class="tips"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="label">
                <label>版权信息：</label>
            </div>
            <div class="field">
                <input type="text" class="input" name="web_banquan" value="<?php echo ($data["web_banquan"]); ?>" placeholder="请输入版权信息" data-validate="required:请输入版权信息" />
                <div class="tips">以’@‘这个字符为分隔开</div>
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

<script>
    var ha={
        preview:function (file)
        {
            var prevDiv = document.getElementById('img');
            if (file.files && file.files[0])
            {
                var reader = new FileReader();
                reader.onload = function(evt){
                    prevDiv.innerHTML = '<img width="110" height="150" src="' + evt.target.result + '" />';
                };
                reader.readAsDataURL(file.files[0]);
            }
            else
            {
                prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
            }
        }
    };
    var hi={
        preview:function (file)
        {
            var prevDiv = document.getElementById('imgs');
            if (file.files && file.files[0])
            {
                var reader = new FileReader();
                reader.onload = function(evt){
                    prevDiv.innerHTML = '<img width="54" height="54" src="' + evt.target.result + '" />';
                };
                reader.readAsDataURL(file.files[0]);
            }
            else
            {
                prevDiv.innerHTML = '<div class="imgs" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
            }
        }
    };
</script>

</body></html>