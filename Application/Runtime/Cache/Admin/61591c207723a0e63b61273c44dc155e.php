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
    <title>二级产品详情</title>
    <style>
    </style>
</head>

<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改二级产品详情</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="" enctype="multipart/form-data">
            <div class="form-group">
                <div class="label">
                    <label>未修改之前的图片：</label>
                </div>
                <div class="field">
                    <?php if(is_array($datath)): foreach($datath as $key=>$val): ?><sapn style="margin-bottom:0.5%;">
                            <!--<?php var_dump($val['id']); ?>-->
                            <input class="shv" type="hidden" value="/yvanfa/Public/Uploads/<?php echo ($val["imgs"]); ?>" name="files[]">
                            <img value="<?php echo ($val["id"]); ?>" style="height:76px;" src="/yvanfa/Public/Uploads/<?php echo ($val["imgs"]); ?>" />
                            <a onclick="return confirm('确认要删除吗？')" class="sh button border-red" href="<?php echo U('Product/product_details_delete','id='.$val['id']);?>" >删除</a>
                        </sapn><?php endforeach; endif; ?>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>新增图片：</label>
                </div>
                <div class="field">
                    <div>
                        <a class="tian button border-yellow" href="">添加选择文件</a>
                        <a class="shan button border-yellow" href="">删除选择文件</a>
                    </div>
                    <div class="thumb" style="list-style:none;">
                        <input type="file" onchange="hai.preview(this)" name="files[]" class="button bg-blue margin-left" value="+ 浏览上传"  style="float:left;">
                    </div>
                </div>
                <div class="field">
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo ($list["name"]); ?>" name="name" placeholder="请输入标题" data-validate="required:请输入标题" />
                    <div class="tips">（用于前端显示的标题）</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>内容描述：</label>
                </div>
                <div class="field">
                    <textarea name="content" class="input" placeholder="请输入内容描述" style="height:150px; width: 50%; border:1px solid #ddd;"><?php echo ($list["content"]); ?></textarea>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>产品介绍：</label>
                </div>
                <div>
                    <script name="introduction" id="editor" type="text/plain" style="width:900px;height:500px;"><?php echo htmlspecialchars_decode($list['introduction']); ?></script>
                </div>
            </div>

            <div class="clear"></div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 修改</button>
                    <a class="button bg-main icon-reply" href="<?php echo U('Product/twoproduct');?>"> 返回上一页</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="/yvanfa/Public/admin/js/jq.js"></script>
<script type="text/javascript" charset="utf-8" src="/yvanfa/Public/Admin/umeditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/yvanfa/Public/Admin/umeditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/yvanfa/Public/Admin/umeditor/lang/zh-cn/zh-cn.js"></script>
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
<script type="text/javascript">
    $(function(){
        //alert(22);
        $('.tian').click(function(){
            files='<input type="file" name="files[]" class="button bg-blue margin-left" value="+ 浏览上传"  style="float:left;">';
            $('.thumb').append(files);
            return false;
        })
        $('.shan').click(function(){
            shul=($('.thumb input').length)-1;
            //alert(shul);
            if(shul<=0){
                //alert('留一个');

            }else{
                $('.thumb input').eq(shul).next().remove();
                $('.thumb input').eq(shul).remove();
            }
            return false;


        })

        $('.sh').click(function(){
            ids=$(this).attr('value');
            url=$(this).attr('href');
            $(this).prev().remove();
            $(this).next().remove();
            $(this).remove();
            $.ajax({
                type:'post',
                url:url,
                data:{'ids':ids},
                success:function(msg){

                }
            })
            return false;
        })



    })
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


</script>
</body>
</html>