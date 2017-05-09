<?php
namespace Admin\Controller;

use Think\Controller;

class UserController extends CommonController
{
    public function user()
    {
        $this->display();
    }

    public function pass()
    {
        $this->display();
    }

    public function savepass()
    {
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $username = $_SESSION['username'];
        $row = M("admin")->where(array('username'=>$username))->find();
        if ($row['password'] != $oldpass) {
            return show(0, "老密码错误");
        } else {
            $map['username'] = $username;
            $data['password'] = $newpass;
            M("admin")->where($map)->save($data);
            return show(1, "密码修改为[" . $newpass . "]请重新登录！");
        }
    }

    //获取管理员数据
    public function level()
    {
        $admin = M('admin');
        $data = $admin->select();
        $this->assign('data', $data);
        $this->display();
    }

    //删除管理员
    public function delete()
    {
        $id = $_GET["id"];
        $m = M('admin');
        $row = $m->where(array('id' => $id))->find();
        $m->where('id=' . $id)->delete();
        $user = $_SESSION['username'];
        $log['user'] = $user;
        $log['do'] = '把管理员' . $row['username'] . '删掉了';
        $log['time'] = date('Y-m-d H:i:s');
        $log['state'] = 2;
        $log['type'] = 1;
        M("log")->add($log);
        $this->redirect('user/level');
    }

//    添加管理员
    public function user_add()
    {

        $admin = M('admin');
        $data = $admin->select();
        $this->assign('data', $data);
        $this->display();
    }

    public function register()
    {
        $username = $_POST["username"];  //获取到POST的用户名
        $password = $_POST['password'];
        $numb = $_POST["numb"];
        $mail = $_POST["mail"];
        $level = $_POST['level'];
        $admin = M('admin');
        $row = M("admin")->where(array('username' => $username))->find();
        if ($row) {
            return show(0, '账号已存在');
        } else {
            $admin->create();
            $admin->username = $username;
            $admin->password = $password;
            $admin->mail = $mail;
            $admin->numb = $numb;
            $admin->level = $level;
            $admin->createtime = date('Y-m-d H:i:s');
            $admin->add();
            $log['user'] = $username;
            $log['do'] = '加入到了管理员';
            $log['time'] = date('Y-m-d H:i:s');
            $log['state'] = 3;
            M("log")->add($log);
            return show(1, '账号添加成功');
        }

    }

    //修改管理员
    public function user_save()
    {
        $username=$_SESSION['username'];
        $id = $_GET["id"];
        $m = M('admin');
        if($id==null){
            $m->where(array('username'=>$username))->find();
            $id=$m->id;
        }
        $data = $m->where(array('id' => $id))->find();
        $dat = $m->find($id);
        $this->assign('data', $data);
        $this->assign('dat', $dat);
        $this->display();

    }
    public function save()
    {

        //修改信息
        $m = M('admin');
        $username = $_POST["username"];
        $numb = $_POST["numb"];
        $mail = $_POST["mail"];
        $level = $_POST['level'];
        $map=array();
        if($numb!=''){
            $map['numb']=$numb;
        }
        if($mail!=''){
            $map['mail']=$mail;
        }
        if($level!=''){
            $map['level']=$level;
        }
        $m->where(array('username'=>$username))->save($map);
        $user=$_SESSION['username'];
        $log['user']=$user;
        $log['do'] = '修改了['.$username.']信息';
        $log['time'] = date('Y-m-d H:i:s');
        $log['state'] = 0;
        M("log")->add($log);
        return show(1, '账号修改成功');
    }

}