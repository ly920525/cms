/**
 * Created by Administrator on 2017/4/28.
 */
$(function(){

    /*检测栏目名称是否重复*/
    $('#catname').keyup(function(){
        var val=$(this).val();
        var url=$('#catnamejc').val();
        $.ajax({
            type: 'post',//提交类型
            url: url, //提交路径
            data: 'title='+val,//提交数据
            /*    data:{
             'username':username,
             'password':password,
             'sub':'dl'
             },*/

            //dataType:'json',   //json格式的数据类型

            success: function(msg){ //回调函数
                if(msg==1){
                    $('#catjc').html('栏目重复，不可用');
                }else{
                    $('#catjc').html('');
                }
            }
        });
    })

    $('.catjc').click(function(){
        var jc=$('#catjc').text();
        if(jc!=''){
            alert('栏目重复');
            return false;
        }
    })


});


$(function(){

    /*检测排序是否重复*/
    $('#sorts').keyup(function(){
        var val=$(this).val();
        var url=$('#sortsjc').val();
        $.ajax({
            type: 'post',//提交类型
            url: url, //提交路径
            data: 'sort='+val,//提交数据
            /*    data:{
             'username':username,
             'password':password,
             'sub':'dl'
             },*/

            //dataType:'json',   //json格式的数据类型

            success: function(msg){ //回调函数
                if(msg==1){
                    $('#sortjc').html('排序重复，不可用');
                }else{
                    $('#sortjc').html('');
                }
            }
        });
    })

    $('.sortjc').click(function(){
        var jc=$('#sortjc').text();
        if(jc!=''){
            alert('排序重复');
            return false;
        }
    })


});


        /*上传图片预览*/
var hai={
    preview:function (file)
{
    var prevDiv = document.getElementById('img');
    if (file.files && file.files[0])
    {
        var reader = new FileReader();
        reader.onload = function(evt){
            prevDiv.innerHTML = '<img width="15%" height="10%" src="' + evt.target.result + '" />';
        };
        reader.readAsDataURL(file.files[0]);
    }
    else
    {
        prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';
    }
}
};