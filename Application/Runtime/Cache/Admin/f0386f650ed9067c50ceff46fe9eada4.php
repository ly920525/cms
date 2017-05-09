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
        .inputs {cursor:pointer;}
    </style>
</head>

<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改新闻</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $list['title']?>" name="title" placeholder="请输入标题" data-validate="required:请输入标题" />
          <div class="tips">（用于前端显示的标题）</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>新闻分类：</label>
        </div>
        <div class="field">
          <select name="issuer" class="input w50 inputs">

            <?php if(is_array($sort)): $i = 0; $__LIST__ = $sort;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($list['issuer']==$vo['type']){ ?>
                <option selected="selected" value="<?php echo ($vo["sort"]); ?>"><?php echo ($vo["type"]); ?></option>
              <?php }elseif($list['issuer']==$vo['type']){ ?>

              <?php }else{ ?>
                <option value="<?php echo ($vo["sort"]); ?>"><?php echo ($vo["type"]); ?></option>
              <?php } endforeach; endif; else: echo "" ;endif; ?>
          </select>
          <div class="tips">（不选择新闻分类默认为未修改之前的值）</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>所属方法：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($list["fang_fa"]); ?>" name="fang_fa" placeholder="请输入所属方法" data-validate="required:请输入所属方法" />
          <div class="tips">（U函数解析的URL或者外链）格式：index/index</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>首页新闻描述：</label>
        </div>
        <div class="field">
          <textarea name="describe" class="input" placeholder="请输入首页新闻描述" style="height:150px; width: 50%; border:1px solid #ddd;"><?php echo ($list["describe"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
        <div class="form-group">
            <div class="label">
                <label>内容简介：</label>
            </div>
            <div>
                <script id="editor" type="text/plain" style="width:1024px;height:500px;" name="content">
                    <?php echo htmlspecialchars_decode($list['content']); ?>
                </script>
            </div>
        </div>
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-edit" type="submit"> 修改</button>
          <button class="button bg-main icon-reply" onClick='javascript :history.back(-1);'> 返回</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript" charset="utf-8" src="/yvanfa/Public/admin/umeditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/yvanfa/Public/admin/umeditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/yvanfa/Public/admin/umeditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">

  //实例化编辑器
  //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
  var ue = UE.getEditor('editor');


  function isFocus(e){
    alert(UE.getEditor('editor').isFocus());
    UE.dom.domUtils.preventDefault(e)
  }
  function setblur(e){
    UE.getEditor('editor').blur();
    UE.dom.domUtils.preventDefault(e)
  }
  function insertHtml() {
    var value = prompt('插入html代码', '');
    UE.getEditor('editor').execCommand('insertHtml', value)
  }
  function createEditor() {
    enableBtn();
    UE.getEditor('editor');
  }
  function getAllHtml() {
    alert(UE.getEditor('editor').getAllHtml())
  }
  function getContent() {
    var arr = [];
    arr.push("使用editor.getContent()方法可以获得编辑器的内容");
    arr.push("内容为：");
    arr.push(UE.getEditor('editor').getContent());
    alert(arr.join("\n"));
  }
  function getPlainTxt() {
    var arr = [];
    arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
    arr.push("内容为：");
    arr.push(UE.getEditor('editor').getPlainTxt());
    alert(arr.join('\n'))
  }
  function setContent(isAppendTo) {
    var arr = [];
    arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
    UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
    alert(arr.join("\n"));
  }
  function setDisabled() {
    UE.getEditor('editor').setDisabled('fullscreen');
    disableBtn("enable");
  }

  function setEnabled() {
    UE.getEditor('editor').setEnabled();
    enableBtn();
  }

  function getText() {
    //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
    var range = UE.getEditor('editor').selection.getRange();
    range.select();
    var txt = UE.getEditor('editor').selection.getText();
    alert(txt)
  }

  function getContentTxt() {
    var arr = [];
    arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
    arr.push("编辑器的纯文本内容为：");
    arr.push(UE.getEditor('editor').getContentTxt());
    alert(arr.join("\n"));
  }
  function hasContent() {
    var arr = [];
    arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
    arr.push("判断结果为：");
    arr.push(UE.getEditor('editor').hasContents());
    alert(arr.join("\n"));
  }
  function setFocus() {
    UE.getEditor('editor').focus();
  }
  function deleteEditor() {
    disableBtn();
    UE.getEditor('editor').destroy();
  }
  function disableBtn(str) {
    var div = document.getElementById('btns');
    var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
    for (var i = 0, btn; btn = btns[i++];) {
      if (btn.id == str) {
        UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
      } else {
        btn.setAttribute("disabled", "true");
      }
    }
  }
  function enableBtn() {
    var div = document.getElementById('btns');
    var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
    for (var i = 0, btn; btn = btns[i++];) {
      UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
    }
  }

  function getLocalData () {
    alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
  }

  function clearLocalData () {
    UE.getEditor('editor').execCommand( "clearlocaldata" );
    alert("已清空草稿箱")
  }
</script>
</body></html>