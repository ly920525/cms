/**
 * Created by Administrator on 2017/3/20.
 */
var URL='/cms/index.php';
var liyong = {
    /**
     * 登陆功能
     */

    login: function () {
        //获取登陆页面的用户名和密码
        var user = document.getElementById("user").value;
        var pass = document.getElementById("pass").value;
        var yanzheng = document.getElementById("yanzheng").innerText;
        if (user == '') {
            return dialog.tishi("请输入账号！", 2);
        }
        if (pass == '') {
            return dialog.tishi("请输入密码！", 2);
        }
        if (yanzheng == '拖动滑块验证') {
            return dialog.tishi("请拖动滑块验证！", 2);
        }
        var url = URL+"/Admin/login/check";
        var data = {"username": user, "password": pass};
        $.post(url, data, function (result) {
            if (result.code == 0) {
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message, 1);
                }, 1000);

            }
            if (result.code == 1) {
                var url1 = URL+"/admin/index/index";
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.jiazai(url1, 3);
                }, 1000);

            }
        }, "JSON");
    },
    /**
     * 退出功能
     * @returns {*}
     */
    loginout:function() {
        var url = URL+"/Admin/login/loginout";
        dialog.confirm('你确定退出吗？',url);

    },
    /**
     * 注册功能
     * @returns {*}
     */
    zhuce: function () {
        //获取登陆页面的用户名和密码\
        var username = $('input[name="user"]').val();
        var password = $('input[name="pass1"]').val();
        var password1 = $('input[name="pass2"]').val();
        var level = $("#level").val();
        var yanzheng = document.getElementById("yanzheng").innerText;
        var mail = $('input[name="mail"]').val();
        var numb = $('input[name="numb"]').val();
        var data = {
            "username": username,
            "password": password,
            "mail": mail,
            "numb": numb,
            "level":level
        };
        if (username.length<5) {
            return dialog.tishi("账号至少5位", 2);
        }

        if (password.length<5) {
            return dialog.tishi("密码至少5位", 2);
        }
        if (password != password1) {
            return dialog.tishi("两次密码不一致", 2);
        }
        if (mail == "") {
            return dialog.tishi("请输入注册邮箱！", 2);
        }
        else {
            var reg = /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/gi;
            if (!reg.test(mail)) {
                return dialog.tishi("邮箱格式不正确！", 2);
            }
        }
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        if (!myreg.test(numb)) {
            return dialog.tishi("请输入正确的手机号！", 2);
        }
        if (yanzheng == '拖动滑块验证') {
            return dialog.tishi("请拖动滑块验证！", 2);
        }
        var url = URL+"/Admin/user/register";
        $.post(url, data, function (result) {
            if (result.code == 0) {
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message, 2);
                }, 1000);

            }
            if (result.code == 1) {
                var ii = layer.load();
                setTimeout(function () {
                    return dialog.success(result.message, URL+"/Admin/user/level");
                    layer.close(ii);
                }, 1000);

            }
        }, "JSON");
    },
    /**
     * 修改功能
     * @returns {*}
     */
    save: function () {
        //获取登陆页面的用户名和密码\
        var username = document.getElementById("user").innerText;
        var level = $("#level").val();
        var yanzheng = document.getElementById("yanzheng").innerText;
        var mail = $('input[name="mail"]').val();
        var numb = $('input[name="numb"]').val();
        var data = {
            "username": username,
            "mail": mail,
            "numb": numb,
            "level":level
        };
        if(mail!=''){
            var reg = /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/gi;
            if (!reg.test(mail)) {
                return dialog.tishi("邮箱格式不正确！", 2);
            }
        }
        if(numb!=''){
            var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            if (!myreg.test(numb)) {
                return dialog.tishi("请输入正确的手机号！", 2);
            }
        }
        if (yanzheng == '拖动滑块验证') {
            return dialog.tishi("请拖动滑块验证！", 2);
        }
        var url = URL+"/Admin/user/save";
        $.post(url, data, function (result) {
            if (result.code == 0) {
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message, 2);
                }, 1000);

            }
            if (result.code == 1) {
                var ii = layer.load();
                setTimeout(function () {
                    return dialog.success(result.message, URL+"/Admin/user/level");
                    layer.close(ii);
                }, 1000);

            }
        }, "JSON");
    },
    /**
     * 忘记密码 用邮件找回
     */
    forget: function () {
        var mail = document.getElementById("forget_mail").value;
        var url = URL+"/admin/login/forget";
        var data = {'mail': mail};
        if (mail == "") {
            return dialog.tishi("请输入注册邮箱！", 2);
        }
        else {
            var reg = /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/gi;
            if (!reg.test(mail)) {
                return dialog.tishi("邮箱格式不正确！", 2);
            }
        }

//截取@~.之间的字符串 做判断  转什么邮箱。
        var yx = mail.substring(mail.indexOf("@") + 1, mail.indexOf("."));
        var url1 = "http://mail." + yx + ".com";
        var url2 = URL+"/Admin/login/login1";
        $.post(url, data, function (result) {

            if (result.code == 1) {
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi2(result.message, url1, url2);
                }, 1000);
            }
            if (result.code == 0) {
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message, 2)
                }, 1000);
            }
        }, "JSON");
    },

    /**
     * 修改密码功能
     * @returns {*}
     */
    savepass: function () {
        //获取登陆页面的用户名和密码\
        var oldpass = document.getElementById("oldpass").value;
        var newpass = document.getElementById("newpass").value;
        var newpass2 = document.getElementById("newpass2").value;
        var yanzheng = document.getElementById("yanzheng").innerText;
        var data = {
            "oldpass": oldpass,
            "newpass": newpass,
            "newpass2": newpass2,
            "yanzheng":yanzheng
        };
        if (oldpass == "") {
            return dialog.tishi("请输入账号！", 2);
        }
        if (newpass == "") {
            return dialog.tishi("请输入新密码！", 2);
        }
        if (newpass2 == "") {
            return dialog.tishi("请再次输入密码！", 2);
        }
        if (newpass != newpass2) {
            return dialog.tishi("两次密码不一致", 2);
        }
        if(newpass == oldpass){
            return dialog.tishi("密码不能和以前一样", 2);
        }
        if (yanzheng == '拖动滑块验证') {
            return dialog.tishi("请拖动滑块验证！", 2);
        }
        var url = URL+"/Admin/user/savepass";
        $.post(url, data, function (result) {
            if (result.code == 0) {
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message, 2);
                }, 1000);

            }
            if (result.code == 1) {
                var ii = layer.load();
                setTimeout(function () {
                    return dialog.success(result.message, URL+"/Admin/login/loginout");
                    layer.close(ii);
                }, 1000);

            }
        }, "JSON");
    },
    /**
     * 留言板业务类
     */
    liuyan: function () {
        //获取登陆页面的用户名和密码\
        var name = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var content = document.getElementById("content").value;
        var data = {
            "name": name,
            "phone": phone,
            "content": content,
        };
        if (name == "") {
            return dialog.tishi("请输入您的姓名！", 2);
        }
        var reg = /^[\u4E00-\u9FA5]{2,4}$/;

        if (!reg.test(name)) {
            return dialog.tishi("请输入您的真实姓名！", 2);
        }
        if (phone == "") {
            return dialog.tishi("请输入您的联系方式！", 2);
        }
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        if (!myreg.test(phone)) {
            return dialog.tishi("请输入正确的手机号,以方便我们和你取得联系！", 2);
        }

        if (content == "") {
            return dialog.tishi("请输入您的留言内容！", 2);
        }
        var url = URL+"/Home/Contact/message";
        $.post(url, data, function (result) {
            if (result.code == 0) {
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message, 2);
                }, 1000);

            }
            if (result.code == 1) {
                var ii = layer.load(2);
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message, 3);
                }, 1000);
            }
        }, "JSON");
    }

};
