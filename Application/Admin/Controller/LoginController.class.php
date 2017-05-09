<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

//点击登录功能
    public function login(){
        $this->display();
    }
    public function check()
    {
        $username = $_POST["username"];  //获取到POST的用户名及密码
        $password = $_POST["password"];
        $mpassword=MD5(MD5($password));
        $admin=M('admin');
        if(!trim($username)||!trim($password)){//判断表单是否为空
            return show(0,'用户名或密码不能为空');
        }

        $user = $admin->where(array('username'=>$username))->find();//根据同户名获取数据表
        if (!$user) {
            return show(0,'用户名不存在');//判断数据表是否有值 没有则返回不存在
        }
        if($user['password']==$password){ //判断表单密码是否和数据表密码相同
            $state['state']=1;
            $map['username']=$username;
            $admin->where($map)->save($state); //登录成功之后的数据表修改
            $data['username']=$username;
            $data['loginip']= get_client_ip();;
            $data['logintime']=date('Y-m-d H:i:s');
            M("login_log")->add($data);
            add_log($username."登陆了后台",1);
            fangwen(1);
            session('username',$username);

            return show(1,'');
        }else{
            return show(0,'密码不正确');
        }
    }
    /**
     * 退出功能
     */
    public function loginout(){

        $username=$_SESSION['username'];//获取当前登录的账号
        if(!$username){
            $this->redirect("Admin/login/login");  //跳转登录页
        }
        $map['username']=$username;
        $data['state']=0;
        $data1['outtime']=date('Y-m-d H:i:s');
        M('admin')->where($map)->save($data);  //修改用户目前状态
        $id = M('login_log')->where($map)->max('id');//根据用户名查找用户最新登录的id值

        $map1['id']=$id;
        $log['user']=$username;
        $log['do']= '退出了后台';
        $log['time']=date('Y-m-d H:i:s');
        $log['state']= 2;
        M("log")->add($log);

        M('login_log')->where($map1)->save($data1);  //根据id值修改该用户退出时间
        session('username',null);     //吧session数据清空
        $this->redirect("Admin/login/login");  //跳转登录页
    }
    /**
     * 用户注册
     */
    public function register()
    {
        $username = $_POST["username"];  //获取到POST的用户名
        $password = $_POST['password1'];
        $numb = $_POST["numb"];
        $mail = $_POST["mail"];
        $row = M("admin")->select(array('username'=>$username));
        if ($row) {
            return show(0, $username."已存在");
        } else {
            $data["username"] = $username;
            $data['password'] = $password;
            $data['numb'] = $numb;
            $data['mail'] = $mail;
            $data['weight'] = 1;
            $data['createtime'] = date('Y-m-d H:i:s');
            M("admin")->add($data);

            $log['user']=$username;
            $log['do']= '加入到了管理员';
            $log['time']=date('Y-m-d H:i:s');
            $log['state']= 3;
            M("log")->add($log);

            return show(1, $username."注册成功! 是否直接登陆");
        }
    }

    /**
     * 邮箱找回页面
     */
    public function mail(){
        $this->display();
    }
    /**
     * 忘记密码 用邮箱找回
     */
    public function forget(){
        $mail = $_POST['mail'];
        $map['mail']=$mail;
        $ret=M('admin')->find($map);
        if(!$ret){
            return show(0,'邮箱没有注册');
        }
        $title="你的后台管理密码来了！";
        $content="你的密码是：".$ret['pass'];
        $row=SendMail($mail,$title,$content,'维登科技');

        if($row){
            return show(1,"已经向[".$mail."]发送你的密码");
        }else{
            return show(0,"发送失败");
        }

    }
}