<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends CommonController
{

//点击登录功能

    public function header()
    {
        $this->_initialize();
        $username=$_SESSION['username'];
        $data=M('admin')->where(array('username'=>$username))->select();
        $this->assign('data',$data);
        $this->diaplay();
    }

}