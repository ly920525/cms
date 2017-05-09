/**
 * Created by Administrator on 2017/3/20.
 */
var dialog = {
    // 错误弹出层
    error: function (message) {
        layer.open({
            content: message,
            icon: 2,
            title: '错误提示',
        });
    },

    //成功弹出层
    success: function (message, url) {
        layer.open({
            content: message,
            icon: 1,
            yes: function () {
                location.href = url;
            },
        });
    },

    // 确认弹出层
    confirm: function (message, url1) {
        layer.open({
            content: message,
            icon: 3,
            btn: ['是', '否'],
            yes: function () {
                location.href = url1;
            },
        });
    },

    //无需跳转到指定页面的确认弹出层
    toconfirm: function (message) {
        layer.open({
            content: message,
            icon: 3,
            btn: ['确定'],
        });
    },
    /**
     * n： 1 2 3
     * @param url
     * @param n
     */
    jiazai: function (url,n) {
        var ii = layer.load(n);
        setTimeout(function () {
            window.location.href=url;
            layer.close(ii);
        }, 1000);
    },
    /**
     *提示的弹出层 可单独自定义
     * @param message
     * @param n：1 2 3 4 5
     * @param bt1
     * @param bt2
     * @param bt3
     */
    tishi:function(message,n){
        switch(n)
        {
            case 1:
                //信息框-例1
                layer.msg(message);
                break;
            case 2:
                //信息框-例2
                layer.msg(message, function(){
                    //关闭后的操作
                });
                break;
            case 3:
                //信息框-例3
                layer.msg(message, {icon: 1});
                break;
            case 4:
                //信息框-例4
                layer.msg('你确定你很帅么？', {
                    time: 0 //不自动关闭
                    ,btn: ["是 ", "否"]
                    ,yes: function(index){
                        layer.close(index);
                    }
                });
                break;
            case 5://信息框-例5
                layer.msg(message, {
                    icon: 6
                    ,btn: ["1","2","3"]
                });
                break;

            default:

        }
    },
    tishi2:function(message,url1,url2){
        layer.msg(message, {
            time: 0 //不自动关闭
            , btn: ["查看邮件 ", "直接登陆"],
            yes: function () {
                location.href = url1;
            },
            NO: function () {
                location.href = url2;
            }
        });
    }

};
